<?php

// 是否开启调试模式
define("APP_DEBUG", true);

// 是否命令行
define('IS_CLI', 1);

// 是否接口模式
define('IS_API', 0);

require_once 'app.php';
$_REQUEST["site"]="test";
\MrStock\System\Helper\Config::register();
MrStock\System\MJC\Facade\App::run();
MrStock\Business\ServiceSdk\PhpAmqpLibSdk\PhpAmqpLibFactory::listen("test","sss","","testlisten");
?>