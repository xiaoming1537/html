<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/3
 * Time: 13:59
 */

class Employee
{
    public static $favSport = "Football";
    private $name;
    public static function watchTV(){
        echo "Watching".self::$favSport;
    }

    function setName($name){
        if($name=="") echo "Name cannot be blank1";
        else $this->name=$name;
    }
    function getName(){
        return "My name is ".$this->name."<br/>".PHP_EOL;
    }
}    //Employee类结束


//定义一个继承自Employee的Executive类
class Executive extends Employee{
    //定义一个Employee特有的方法
    function pillageCompany(){
        echo "I`m selling company assets to finance my yacht!";
    }
}//Executive类结束


class CEO extends Executive{
    function getFacelift(){
        echo "nip ninp tuck tuck";
    }
}
//$exec = new Executive();
//$exec->setName("Richard");
//echo $exec->getName();
//$exec->pillageCompany();
//$ceo->getFacelift();echo PHP_EOL;
//$ceo = new CEO();
//$ceo->setName("Bernie");
//$ceo->pillageCompany();
//echo PHP_EOL;
////
?>