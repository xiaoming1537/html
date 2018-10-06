<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/9/7
 * Time: 10:44
 */
$sql ="INSERT INTO Persons (FirstName,LastName,Age)VALUES (
'Peter','Griffin','35'
) 
";
$con= mysqli_connect('localhost','root','');
if (!$con)
{
    die('Could not connect:'.mysqli_error());
}
mysqli_select_db($con,'new');

mysqli_query($con,$sql);
mysqli_close($con);
?>