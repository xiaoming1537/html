<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/7/31
 * Time: 8:23
 */
class Application{
    public $_Power;
    function setPower($status){
        $this->_Power = $status;
    }
}


$blendre = new Application();

$blendre->setPower("sdfds");
echo $blendre->_Power;

