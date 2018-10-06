<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/3
 * Time: 11:49
 */



function __autoload($class){
    require_once ("classes/$class.class.php");
}
class OOP
{
function voifsd(){

}
function soid(){

}
}
class_alias("OOP","OOPs");
$oop= new OOPs();
if (class_exists("OOPss"))
    echo "YES".PHP_EOL;

echo get_class($oop).PHP_EOL;
$sss= get_object_vars($oop);
echo $sss;