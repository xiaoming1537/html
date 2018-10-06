<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/9/7
 * Time: 10:25
 */


$con = mysqli_connect('localhost','root','');


if (!$con){
    die('Could not connect:'.mysqli_error());
}

mysqli_select_db($con,'new');
$sql ="SELECT * FROM Persons ORDER BY age desc ";
$result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($result)){
    echo $row['FirstName'];
    echo " ".$row['LastName'];
    echo " ".$row['Age'];
    echo "<br />";
}