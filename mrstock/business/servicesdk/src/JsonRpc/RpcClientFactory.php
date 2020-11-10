<?php

namespace MrStock\Business\ServiceSdk\JsonRpc;

use MrStock\System\MJC\Facade\Log;
use MrStock\System\Helper\HttpRequest;
use MrStock\Business\ServiceSdk\RpcSdk\RpcSdkRequest;

class RpcClientFactory
{

    public static function sync($message)
    {

        if($message["site"]=="hq"){
                $url = "http://" . $message["site"] . ".service.guxiansheng.cn";
                      if(isset($message['callback']) && $message['callback'])
	        				{
							 unset($message['callback']);

						}
                       $rs = HttpRequest::query($url, $message, true);
      

                      
                       if ($rs['code'] == 1) {
                           return $rs;
                       } else {
                           throw new \Exception($rs["message"], $rs['code']);
                       }
                       Log::record('RpcClientFactory_synchttp_err' . http_build_query($message));
                       return false;
        }
        $request = \MrStock\System\MJC\Container::get("request", []);
        $message["refer_api"] = http_build_query($request->param);
        $message["refer_site"] = $request->site;
        $message["isdebug"] = $request->isdebug;

        $client = RpcSdkRequest::request($message);
        return $client->request();

    }

//    public static function synchttp($message)
//    {
//        $url = "http://" . $message["site"] . ".service.guxiansheng.cn";
//
//        $rs = HttpRequest::query($url, $message, true);
//
//        if ($rs['code'] == 1) {
//            return $rs;
//        } else {
//            throw new \Exception($rs["message"], $rs['code']);
//        }
//        Log::record('RpcClientFactory_synchttp_err' . http_build_query($message));
//        return false;
//    }
}
