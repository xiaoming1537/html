<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/2
 * Time: 13:26
 */
class methouyyyd{
    /*scope*/ function functionName(){

}
public function calculateSalary(){
        return $this->wage*$this->hours;
}

}
$method = new methouyyyd();
$salary = $method->calculateSalary();