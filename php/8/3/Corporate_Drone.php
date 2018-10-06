<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/3
 * Time: 13:33
 */

class Corporate_Drone
{
    private $emloyeeid;
    private $tiecolor;
    function setEmployeeID($employeid){
        $this->emloyeeid= $employeid;
    }
    function getEmployeeID(){
        return $this->emloyeeid;
    }
    function setTiecolor($tiecolor){
        $this->tiecolor=$tiecolor;
    }
    function getTiecolor(){
        return $this->tiecolor;
    }
    function __clone()
    {
        // TODO: Implement __clone() method.
        $this->tiecolor= "blue";
    }
}

//新建Corporate_Drone对象
$dronel = new Corporate_Drone();
//设置$dronel的employee属性
$dronel->setEmployeeID("1234");
//设置
$dronel->setTiecolor("red");
//克隆dronel对象
$dronel2 = clone $dronel;
//echo $dronel2->getEmployeeID();
//设置2的employee属性
$dronel2->setEmployeeID("3444444444444444");
echo $dronel2->getEmployeeID().PHP_EOL;
echo $dronel->getEmployeeID().PHP_EOL;
echo $dronel2->getTiecolor();