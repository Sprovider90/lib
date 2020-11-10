<?php

namespace MrStock\Business\ServiceSdk\RpcSdk;

use MrStock\System\MJC\Facade\Log;
use MrStock\System\MJC\Log\LogLevel;
use MrStock\System\Helper\HttpRequest;
use MrstockCloud\Client\MrstockCloud;
use MrStock\System\Helper\Config;
class RpcSdkRequest
{
   public static function request($bodyData){

    try {

            if(is_string($bodyData)){
                throw  new \Exception("bodyData is string is error", -__LINE__);
            }
//            if(getenv("worker_container")=="swoole"){
//                if($bodyData['v']=="inneruse"){
//                    return self::rpcRequestSwoole($bodyData);
//                }else{
//                    return self::rpcRequest($bodyData);
//                }
//            }elseif(getenv("worker_container")=="workerman"){
//                return self::rpcRequest($bodyData);
//            }else{
//                throw  new \Exception("worker_container is empty", -__LINE__);
//            }

            if($bodyData['site']=="hq" && getenv("vendor_hq_switch")){
                return self::HttpRequest($bodyData,"hq");
            }
            if($bodyData['v']=="inneruse"){
                if(empty(getenv("vendor_requestInneruseType"))||getenv("vendor_requestInneruseType")=="RPC"){
                    return self::inneruseRpcRequest($bodyData);
                }else{
                    return self::inneruseHttpRequest($bodyData);
                }

            }else{
                return self::rpcRequest($bodyData);
            }



        } catch (\Exception $e) {

            //记录日志 错误信息不返回
            Log::write($e->getMessage(), LogLevel::RPCDEBUG);

            $message = $bodyData['isdebug'] ? $e->getMessage() : "RPCERROR";
           
            throw  new \Exception($message, $e->getCode());
        }
   }
    /**
     * 发起rpc 请求
     * @return mixed
     * @throws \Exception
     */
    public static function inneruseRpcRequest($bodyData)
    {
   
        if(empty($bodyData['serviceversion'])){$bodyData['serviceversion']="v1";}
       
        $service_name=strtolower($bodyData['site'].'-'.$bodyData['c'].'-'.$bodyData['a'].'-'.$bodyData['v'].'-'.$bodyData['serviceversion']);

        $address=self::getAdressByConsul($service_name);

                //获取服务配置
        if (empty($address)) {
            //如果没有相应的服务，并且是app那么就转至中台处理
            if(getenv('vendor_zhongtai_onoff')){
                $result =\MrStock\System\Helper\HttpRequest::query(getenv('vendor_zhongtai_url'), $bodyData);
                return $result;
            }
            throw new \Exception("所依赖的服务没配置:".$service_name, -__LINE__);
        }

        RpcClient::config($address);
        $client = RpcClient::instance('server');

        $result = $client->trans($bodyData);

        //转换 非1 时的
        if ($result['code'] != 1) {
            $result = ['code' => $result['code'], 'message' => $result["message"], 'data' => $result["message"]];
        }
        return $result;
    }

    public static function getAdressByConsul($service_name,&$isapp=0)
    {
        $result=[];
        
        $json=self::getAdressByConsulJson($service_name);
        //print_r($str);exit;
        if(!empty($json)){

            foreach ($json as $key => $value) {
                # code...
           
                if(in_array('isapp:1', $value["Service"]["Tags"])){
                    $isapp = 1;
                }
                $result[]=$value["Service"]["Address"].":".$value["Service"]["Port"];
            }

        }

        return $result;
    }
    public static function getAdressByConsulJson($service_name)
    {

        try {
            $host=getenv('vendor_consul_ip');
            $url = "http://{$host}:8500/v1/health/service/{$service_name}?passing=true";
           
            return HttpRequest::query($url);
        } catch (\Exception $e) {
            return "";
        }
    }

    /**
     * 发起http 请求
     * @return mixed
     * @throws \Exception
     */
    public static function HttpRequest($bodyData,$service_name)
    {
        try {
            $url=Config::get($service_name);
            $url = "http://{$url}/index.php";

            return HttpRequest::query($url,$bodyData,1);
        } catch (\Exception $e) {

            $message = $bodyData['isdebug'] ? $e->getMessage() : "RPCERROR";
            throw  new \Exception($message, $e->getCode());
        }
    }
    
    /**
     * 发起http 请求
     * @return mixed
     * @throws \Exception
     */
    public static function inneruseHttpRequest($bodyData)
    {
        try {
            $url = "http://".getenv("vendor_requestInneruseUrl")."/index.php";          
            return HttpRequest::query($url,$bodyData,1);
        } catch (\Exception $e) {

            $message = $bodyData['isdebug'] ? $e->getMessage() : "RPCERROR";
            throw  new \Exception($message, $e->getCode());
        }
    }
//    public static function rpcRequestSwoole($bodyData)
//    {
//        //\Co\run(function(){
//            $s=microtime(true);
//            $service_name=strtolower($bodyData['site']);
//
//            $address=self::getAdressByConsul($service_name);
//
//            //获取服务配置
//            if (empty($address)) {
//
//                $vendor_worker_name="";
//                throw new \Exception("所依赖的服务没配置:".$service_name, -__LINE__);
//            }
//
//            $client = new \
//\Coroutine\Client(SWOOLE_SOCK_TCP);
//
//            $client->set(array(
//                'timeout' => 0.5,
//                'connect_timeout' => 1.0,
//                'write_timeout' => 10.0,
//                'read_timeout' => 0.5,
//            ));
//            list($ip,$port)=explode(':', array_rand($address,1));
//            if (!$client->connect($ip, $port, 0.5))
//            {
//                $result = ['code' => -1, 'message' => "connect failed. Error: {$client->errCode}"];
//                return $result;
//
//            }
//            $sendData=json_encode(array('class' => $service_name, 'method' =>"trans", 'param_array' => $bodyData))."\n";
//
//            $client->send($sendData);
//            $result = $client->recv();
//            $result=json_decode($result,true);
//            $client->close();
//            $e=round((microtime(true) - $s) * 1000, 3);
//            //file_put_contents('/tmp/3.txt',print_r($bodyData,true).$e,FILE_APPEND);
//            //转换 非1 时的
//            if ($result['code'] != 1) {
//                $result = ['code' => $result['code'], 'message' => $result["message"], 'data' => $result["message"]];
//            }
//            return $result;
//
//        //});
//    }


    /**
     * 发起rpc 请求
     * @return mixed
     * @throws \Exception
     */
    public static function rpcRequest($bodyData)
    {
        $s=microtime(true);
        $service_name=strtolower($bodyData['site']);
        
        $address=self::getAdressByConsul($service_name);

       //获取服务配置
        if (empty($address)) {
 
            $vendor_worker_name="";
            throw new \Exception("所依赖的服务没配置:".$service_name, -__LINE__);
        }

        RpcClient::config($address);
        $client = RpcClient::instance('server');

        $result = $client->trans($bodyData);

        $e=round((microtime(true) - $s) * 1000, 3);
        //file_put_contents('/tmp/3.txt',print_r($bodyData,true).$e,FILE_APPEND);
        //转换 非1 时的
        if ($result['code'] != 1) {
            $result = ['code' => $result['code'], 'message' => $result["message"], 'data' => $result["message"]];
        }
        return $result;
    }

}
