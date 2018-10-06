<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/10
 * Time: 16:14
 */
//$fh = fopen('D:/XAMPP/htdocs/html_form/resource/dome.txt','r');

//$users = file('D:/XAMPP/htdocs/html_form/resource/dome.txt');
$users = file('dome.txt');
print_r($users);
foreach ($users as $user){
    //解析行，检索名字合电子邮件地址
    list($name, $email) = explode(' ',$user);
    //移除$email 中的换行符
    $email= trim($email);
    //输出格式化的名字合电子地址
    echo "<a href = \"mailto:$email\">$name</a><br/>";
}
echo PHP_EOL;
echo gettype($users);
//D:/XAMPP/htdocs/html_form/resource/dome.txt
