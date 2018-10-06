<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/16
 * Time: 20:45
 */
$fh = fopen('text.csv','r');
//将文件分解为3部分
while (list($name,$email,$phone)= fgetcsv($fh,1024,',')){
//以HTML格式输出数据
printf("<p>%s (%s)Tel.%s</p>.".PHP_EOL,$name,$email,$phone);


}