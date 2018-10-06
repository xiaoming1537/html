<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/1
 * Time: 18:20
 */

class final_s
{
 var  $gui;
function __set($name, $value)
{
    // TODO: Implement __set() method.
    //$this->gui=$value;
//    echo "Nonexistent variable :\$$name!";
    $this->$name = $value;
}
}
$employee = new final_s();
$employee->gui="Mario";
$employee->title = "Executive Chef";
echo "Name:".$employee->gui;
echo "<br/>";
echo "Title:".$employee->title;
?>
