<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/9/7
 * Time: 10:35
 */
$con =mysqli_connect('localhost','root','');

if (!$con){
    die('Could not connect:'.mysqli_error());
}
mysqli_select_db($con,'new');
$sql = "UPDATE Persons SET Age='36'
WHERE FirstName='Peter' AND LastName='Griffin'";

$sqli="UPDATE Persons SET Age='12'
WHERE FirstName='Peter'";
mysqli_query($con,$sqli);
mysqli_close($con);
?>
