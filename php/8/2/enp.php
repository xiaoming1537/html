<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/2
 * Time: 13:17
 */
class Employee{
    private $name;
    //获取方法
    public function getName(){
        return $this->name;
    }
    //设置方法
    public function setName($name){
        $this->name = $name;
    }
}