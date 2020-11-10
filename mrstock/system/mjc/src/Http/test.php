<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020-07-06
 * Time: 15:13
 */

namespace MrStock\System\MJC\Http;


class test
{
    public $param=[];
    function __construct()
    {
        $this->param=$_REQUEST;

    }
    function pti(){
        print_r($this->param);
    }
}
$_REQUEST["c"]="test";
$obj=new test();
unset($_REQUEST);
$obj->pti();
