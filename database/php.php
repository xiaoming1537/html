<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/9/6
 * Time: 15:06
 */

$con =mysqli_connect('localhost','root','');

if (!$con){
    die('Could not connect'.mysqli_error()
    );
}
mysqli_select_db($con,'new');
$sql = "INSERT INTO Persons (FirstName,LastName,Age) values ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
if (!mysqli_query($con,$sql)){
    echo "eeeeeeeeeeeeeeeeeee";
}else{
    echo "1 record added";
}
mysqli_close($con);



?>