<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/9/7
 * Time: 10:01
 */
$con = mysqli_connect('localhost','root','');
if (!$con){
    die('Could not connect:'.mysqli_error());
}

mysqli_select_db($con,'new');
$result = mysqli_query($con,"SELECT * FROM Persons");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
";

 while ($row = mysqli_fetch_array($result)){
     echo "<tr>";
     echo "<td>".$row['FirstName']."</td>";
     echo "<td>".$row['LastName']."</td>";
     echo "</tr>";
 }

 echo "</table>";
 mysqli_close($con);
 ?>