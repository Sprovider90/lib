<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020-07-03
 * Time: 10:10
 */

namespace MrStock\Business\ServiceSdk\Rpc;


class Autoload
{
    static function autoload($class){

        require basedir."/src/".basename($class).".php";
    }
}