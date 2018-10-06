<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/1
 * Time: 11:27
 */
$cost = 20.99;
$tax = 0.0575;
function calculateCost(&$co,$jk=0.067){
    //修改
    $co = $co + ($co+$jk);
    $jk +=4;
}
$cost=10.9;
calculateCost($cost,$tax);
echo $cost.PHP_EOL;
echo $tax.PHP_EOL;
calculateCost($cost);
echo $cost.PHP_EOL;
echo $tax.PHP_EOL;

class Custormer{
  var  $value = 32;
}

$tttt= new Custormer();
function processPayPalPayment(Custormer $custormer){
    echo "hhhhhhhh".PHP_EOL;
   return 65;
}

processPayPalPayment($tttt);
echo "ssssssssssssssssssssssssssssssssssddddddddddddddddddd".PHP_EOL;