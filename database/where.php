<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/9/7
 * Time: 10:18
 */
$con = mysqli_connect("localhost","root",'');

if (!$con){
    die("Could not connect:".mysqli_error());
}
$sql    = "SELECT * FROM Persons WHERE FirstName='Peter'";

mysqli_select_db($con,'new');
$result = mysqli_query($con,$sql);
while($row= mysqli_fetch_array($result)) {
    echo $row['FirstName'] . ' ' . $row['LastName'];
    echo "<br />";
}


?>