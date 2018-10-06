<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/8
 * Time: 22:37
 */
$password = "3312345";
if (strspn($password,"1234567890") == strlen($password))
    echo "The password cannot consist solely of numbers!";
