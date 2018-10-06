<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/17
 * Time: 12:04
 */
$users = file('text.csv');

foreach ($users as $user){
    //将文件的每一行分解为3 部分
    list($name, $email, $phone) = explode(',',$user);
    //以HTML格式输出数据
    printf("<p>%s (%s) Tel.%s</p>",$name,$email,$phone);
}