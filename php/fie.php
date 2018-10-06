<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/7/31
 * Time: 8:46
 */
$uos = 45;
$ufn = & $uos;
$ufn=12;
echo $uos.PHP_EOL;
echo settype($uos,"string").PHP_EOL;

function varoop(){
    global $uos;
   $uos++;
}
varoop();
echo $uos;