<?php

namespace MrStock\Business\Middleware\Service;

use MrStock\System\MJC\Facade\Log;
use MrStock\System\MJC\Http\Request;
use MrStock\System\Helper\Output;
use MrStock\Business\ServiceSdk\JsonRpc\RpcClientFactory;
use MrStock\System\Helper\Config;
use MrStock\System\Helper\HttpRequest;

/**
 * 服务鉴权中间件
 */
class ServiceAuthControl
{

    private $request;

    /**
     * @param Request $request
     * @param \Closure $next
     * @return mixed|\MrStock\System\Helper\unknown
     */
    public function handle(Request $request, \Closure $next)
    {
        $this->request = $request;
        try {
            $this->checkAuthenticate();
        } catch (\Exception $e) {
            return Output::response($e->getMessage(), $e->getCode());
        }
        return $next($this->request);
    }

    /**
     * @throws \Exception
     * apicode与app_code验证
     */
    private function checkAuthenticate()
    {

        //验证appcode
        if (empty($this->request->param["appcode"]) || !in_array($this->request->param["appcode"], array_keys(Config::get("appcode_hash")))) {
            throw new \Exception('appcode不正确', '-1002');
        }
        
        $site = $this->request->site;
        $v = $this->request->v;
        $c = $this->request->c;
        $a = $this->request->a;
        if ($v == "cli" || empty($site)) {
            return;
        }
        if (empty($site) || empty($c) || empty($a)) {
            throw new \Exception('接口不正确', '-1003');
        }
         if(strtolower($v)=="inneruse" && !in_array(strtolower($site) ,['news','uploadfile'])){
             if (empty($this->request->param["access_token"])) {
                 throw new \Exception('access_token必须', '-1002');
             }
             $rpc_inneruse_secretkey = Config::get("rpc_inneruse_secretkey");
             $access_data = [
                 'c' => $c,
                 'a' => $a,
                 'v' => $v,
                 'site' => $site,
                 'inneruse_secretkey' => $rpc_inneruse_secretkey,
                 'serviceversion' => $this->request->serviceversion,
                 'timestamp' => (string)$this->request->timestamp,
             ];
             rsort($access_data);
             $access_data_str = implode('-',$access_data);
             $access_token = md5($access_data_str);
             if ($this->request->param["access_token"] != $access_token) {
                 Log::record('签名错误:'.var_export($_SERVER,true));
                 throw new \Exception('签名错误', '-1002');
             }
             if ($this->request->param["timestamp"] + 60 < time() ) {
                 Log::record('access_token已过期:'.var_export($_SERVER,true));
                 throw new \Exception('access_token已过期', '-1002');
             }
         }
        if (empty($v)) {
            $v = "App";
        }
        $apicode = md5(strtolower($site . $v . $c . $a));
        if (in_array($apicode, ["51a1c4441617eb101e81e5a2d446a553", "6980cdf9a12b7aefe3bc9b8314f4148f", "c42d25e5bb907478988328e8812c1e2b", "c0fbccfb67a60aa0a5bd3734319c9bb4","d1f25f8b6dc02733702b9d50100828e6"])) {
            return;
        }
        //确定来源是德证通还是后台
        if (!empty($this->request->param["appId"])){
            $reqorigin = 'app';//请求来源,老师端或者后台.
        } else{
            $reqorigin = 'cloudmanager';
        }

        $data = [];
        //版本接口登录验证
        if (in_array(strtolower($v), ["cloud", "institution", "company", "manager"])) {

            $admin_id = $this->request->param["admin_id"];
            $key = $this->request->param["key"];
            if (empty($admin_id) || empty($key)) {
                throw new \Exception('后台账号登录参数错误', '-1005');
            }
            //admin_id与apicode的权限验证

            $res = \MrstockCloud\Client\MrstockCloud::gateway()->inneruse()->v()->Auth()->adminislogin(["admin_id" => $admin_id, "key" => $key,"reqorigin"=>$reqorigin])->request();
            if ($res["code"] != 1) {
                throw new \Exception($res["message"], $res["code"]);
            }
        }

        //为了数据隔离，添加机构公司覆盖
        if (in_array(strtolower($v), ["cloud", "institution", "company"])) {
            //机构
            if (!empty($res["data"]["institution_id"])) {
                $this->request->param["institution_id"] = $res["data"]["institution_id"];
            }
            //公司
            if (!empty($res["data"]["company_id"])) {
                $this->request->param["company_id"] = $res["data"]["company_id"];
            }

            $res = \MrstockCloud\Client\MrstockCloud::gateway()->inneruse()->v()->Auth()->checkadminapi(["admin_id" => $admin_id, "key" => $key, 'apicode' => $apicode, 'reqorigin' => $reqorigin])->request();
            if ($res["code"] != 1) {
                throw new \Exception($res["message"], $res["code"]);
            }
        } else if (substr(strtolower($v), 0, 4) == "user") {
            $appcode_hash = Config::get("appcode_hash");
         
            $member_id = $this->request->param["member_id"];
            $key = $this->request->param["key"];
            if (empty($member_id) || empty($key)) {
                throw new \Exception('用户账号登录参数错误', '-1007');
            }

            $res = \MrstockCloud\Client\MrstockCloud::user()->inneruse()->v2()->Member()->get(["member_id" => $member_id, "key" => $key])->request();

            if ($this->request->isdebug != 1) {
                if ($res["code"] != 1) {
                    //throw new \Exception($res["message"], $res["code"]);
                }
            }
               
          
        }

        $this->request->appcodelist = $this->request->appcode;
       
    }
}
