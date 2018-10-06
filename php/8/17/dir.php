<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/17
 * Time: 15:46
 */
$dh = opendir('C:/Users/vi/Desktop/文件/');
while($file = readdir($dh))
    echo "$file <br/>";
closedir($dh);

print_r(scandir('C:/Users/vi/Desktop/文件/'));