<?php
/*consul*/
namespace MrStock\Business\ServiceSdk\Swoole;
use MrStock\Business\Middleware\Service\RpcStartDeal;
class SwooleXiechengFactory
{
    public static function check(){
        //......Server............... 127.0.0.1:9501......
            return;
    }
    public static function creatework($vendor_worker_ipport,$vendor_worker_count,$vendor_worker_name,$vendor_siterpc_url,$vendor_siterpc_suffix,$ip){
        //多进程管理模块
        $pool = new \Swoole\Process\Pool(1);
        //让每个OnWorkerStart回调都自动创建一个协程
        $pool->set(['enable_coroutine' => true]);

        $pool->on('workerStart', function ($pool, $id)use($vendor_worker_ipport,$vendor_siterpc_url) {
            //每个进程都监听9501端口
            $server = new \Swoole\Coroutine\Server('0.0.0.0', $vendor_worker_ipport , false, true);

            //收到15信号关闭服务
            Swoole\Process::signal(SIGTERM, function () use ($server) {
                $server->shutdown();
            });

            //接收到新的连接请求 并自动创建一个协程
            $server->handle(function (Swoole\Coroutine\Server\Connection $conn)use($vendor_siterpc_url) {
                while (true) {
                    //接收数据
                    $data = $conn->recv();
                    if (empty($data)) {
                        $conn->close();
                        break;
                    }
                    self::revDeal($conn, $data,$vendor_siterpc_url);
                    //发送数据
                    //$conn->send('hello');

                    \Co::sleep(1);
                }
            });

            //开始监听端口
            $server->start();
        });
        $pool->start();




    }

    public static function revDeal($conn,$data,$vendor_siterpc_url){
      $s=microtime(true);
            $statistic_address = "";
            $data = json_decode($data, true);

            // 判断数据是否正确
            if(empty($data['class']) || empty($data['method']) || !isset($data['param_array']))
            {
                // 发送数据给客户端，请求包错误
               return $conn->send(json_encode(array('code'=>400, 'msg'=>'bad request', 'data'=>null))."\n");
            }
       
            $data['param_array'][0]["RPC_PATH"]=$vendor_siterpc_url.strtolower($data['param_array'][0]['site']).'/public/rpc.php';
            
            // 获得要调用的类、方法、及参数
            $class = $data['class'];
            $method = $data['method'];
            $param_array = $data['param_array'];

            $param_array=$param_array[0];
            $success = false;

            try
            {
                $ret=RpcStartDeal::deal( $param_array);
                // 发送数据给客户端，调用成功，data下标对应的元素即为调用结果
                $rs=$conn->send(json_encode($ret)."\n");
                $e=round((microtime(true) - $s) * 1000, 3);
                //file_put_contents('/tmp/3.txt',print_r($rs,true).$e,FILE_APPEND);
                return $rs;
            }
            // 有异常
            catch(Exception $e)
            {
                // 发送数据给客户端，发生异常，调用失败
                $code = $e->getCode() ? $e->getCode() : 500;

                return $conn->send(json_encode($e)."\n");
            }
    }

}
