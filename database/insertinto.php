<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/9/6
 * Time: 22:54
 */
$con = mysqli_connect('localhost','root','','new');
if (!$con){
    echo 'Α¬½ΣΚ§°ά';
}

mysqli_query($con,'INSERT INTO Persons(FirstName,LastName,Age) values ("Peter","Griffin","35")');
mysqli_close($con);
