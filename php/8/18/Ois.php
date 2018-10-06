<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/17
 * Time: 12:12
 */
//打开 users.txt 的句柄
$fh = fopen('dome.txt','r');
//在未
//fclose($fh);到达EOF时，读入另一行并输出
while (!feof($fh)) echo fgets($fh);
//关闭句柄