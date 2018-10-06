<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/9/6
 * Time: 16:21
 */
$con =mysqli_connect("localhost",'root','');
if (!$con){
    die('Could not connect:'.mysqli_error());
}
//create database
if (mysqli_query($con,'CREATE DATABASE my_db_2')){
    echo "database created";
}else{
    echo "Error creating database";
}

//create table in my_db database
mysqli_select_db($con,'my_db_2');
$sql = "CREATE TABLE persons(
FirstName varchar (15),
LastName varchar (15),
Age int 
)";
mysqli_query($con,$sql);
mysqli_close($con);
?>

