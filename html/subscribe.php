<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/7/30
 * Time: 15:49
 */
//如果已经填写名字字段
if(isset($_POST['name'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    printf("Hi %s!<br/>",$email);
}
?>