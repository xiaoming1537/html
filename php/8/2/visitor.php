<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/2
 * Time: 15:41
 */
class Visitor{
    private static $visitors = 0;
    function __construct()
    {
        self::$visitors++;
    }
    static function getVisitors(){
        return self::$visitors;
    }
}
//实例化Visitor 类
$visits =  new Visitor();
echo  Visitor::getVisitors().PHP_EOL;
$visits2 = new Visitor();
echo Visitor::getVisitors();