<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/1
 * Time: 17:59
 */

class private_s
{
private $name;
private $telephone;
public function setName($name)
{
    $this->name=$name;
}
public function getName(){
    return $this->name;
}
}
$private= new private_s();
$private->setName("mary");
echo $private->getName();