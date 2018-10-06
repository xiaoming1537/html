<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/9/6
 * Time: 23:15
 */
$con =mysqli_connect('localhost','root','');
if (!$con){
    die('Could not connect:'.mysqli_error());
}

mysqli_select_db($con,'new');
$result = mysqli_query($con,'select * from Persons');
if (!$result){
    echo 'ttttttt';
}
while($row=mysqli_fetch_array($result)){
    echo $row['FirstName'].'    '.$row['LastName'];
    echo "<br/>";
}

mysqli_close($con);
?>