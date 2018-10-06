<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/16
 * Time: 15:50
 */
$userfile = file_get_contents('D:/XAMPP/htdocs/html_form/resource/dome.txt');


//将$userfile 的每一行放入数组
$users = explode("\n",$userfile);
//循环处理数组
foreach ($users as $user){
    //解析行，检索名字和电子邮件地址
    list($name,$email)=explode(' ',$user);
    //输出格式化的名字和电子邮件地址
    printf("<a href='mailto:%s'>%s</a> <br/>",$email,$name);
}