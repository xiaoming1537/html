<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/9
 * Time: 18:04
 */
$path = '/home/www/data/users.txt';
printf("Filename: %s<br/>",basename($path));
printf("Filename sans extension: %s<br/>",basename($path,".txt"));
printf("Directory path: %s",dirname($path));