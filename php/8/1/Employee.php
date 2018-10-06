<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/1
 * Time: 17:38
 */

class Employee
{
private $name;
private $title;
protected $wage;
protected function clockIn(){
    echo "Member $this->name clocked in at ".date("h:i:s");
}
protected function clockOut(){
    echo "Member $this->name clocked out at ".date("h:i:s");
}
}
$employee = new Employee();
//$value = $employee->name;
