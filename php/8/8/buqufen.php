<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/8
 * Time: 21:41
 */
$delimitedText = "Jason+++Gilmore++++++++Columbus+++OH";
$fields = preg_split("/\++/",$delimitedText);
foreach ($fields as $field)
    echo $field."<br/>".PHP_EOL;

echo "sssssssssssssssss".PHP_EOL;
$pswd = "secretpswd";
if (strlen($pswd)<10)
    echo "Password is too short!";
else
    echo "Password is valid!";