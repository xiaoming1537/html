<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/2
 * Time: 13:40
 */
class Employee{
    private $ein;
    function __construct($ein)
    {
        if($this->verifyEIN($ein)){
            echo "EIN verified . finish";
        }
    }
    protected function verifyEIN($ein){
        return TRUE;
    }
}
$employee = new Employee("123-45-6789");
?>