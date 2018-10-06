<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/17
 * Time: 14:30
 */
//要写入subscribers.txt文件的数据
$subscriberInfo = 'Jason Gilmore|jason@example.com';

//为写入而打开subscribers.txt
$fh = fopen('subscribers.txt','a');

//写数据
fwrite($fh, $subscriberInfo);

//关闭句柄
fclose($fh);
