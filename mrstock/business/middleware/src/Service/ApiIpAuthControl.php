<?php
namespace MrStock\Business\Middleware\Service;

use MrStock\System\Helper\Cache\File;
use MrStock\System\MJC\Http\Request;
use MrStock\System\Helper\Output;
use MrStock\Business\ServiceSdk\JsonRpc\RpcClientFactory;
use MrStock\System\Helper\Config;
/**
 * 接口ip限制
 */
class ApiIpAuthControlControl
{

    private $request;
    private $defaultCount = 10;

    public function handle(Request $request, \Closure $next)
    {

        $this->request = $request;

        if($this->request['site']=="user" && $this->request['c']=="sms" && $this->request['a']=="send")
        {
            $ip = $this->get_real_ip();
            $count = intval(File::get($ip));
            $count++;
            File::set($ip,$count,0);
            if($count > $this->defaultCount) {
                return Output::response("SB", "-4444");
            }
        }

        return $next($this->request);
    }

    function get_real_ip(){
        if(isset($_SERVER)){
            if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
                $realip=$_SERVER['HTTP_X_FORWARDED_FOR'];
            }else if(isset($_SERVER['HTTP_CLIENT_IP'])){
                $realip=$_SERVER['HTTP_CLIENT_IP'];
            }else{
                $realip=$_SERVER['REMOTE_ADDR'];
            }
        }else{
            if(getenv('HTTP_X_FORWARDED_FOR')){
                $realip=getenv('HTTP_X_FORWARDED_FOR');
            }else if(getenv('HTTP_CLIENT_IP')){
                $realip=getenv('HTTP_CLIENT_IP');
            }else{
                $realip=getenv('REMOTE_ADDR');
            }
        }
        return $realip;
    }
}