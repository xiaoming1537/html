<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/17
 * Time: 12:28
 */
/*
 * 逐个读取。
$fh = fopen('dome.txt','r');
while(! feof($fh)){
  echo fgetc($fh);
}
*/
//为读取而打开文件
$fh = fopen('dome.txt','r');
//读入整个文件
$userdata = fread($fh,filesize('dome.txt'));
 echo $userdata;
//关闭文件句柄
fclose($fh);