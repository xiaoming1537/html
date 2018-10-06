<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/9/6
 * Time: 22:46
 */

$con = mysqli_connect('localhost','root','');
if (!$con){
    echo "Α¬½ΣΚ§°ά";
}
$sql ="CREATE TABLE Persons(
personID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY (personID),
FirstName varchar(15),
LastName varchar(15),
Age int
)";
mysqli_select_db($con,'new');
mysqli_query($con,$sql);
mysqli_close($con);