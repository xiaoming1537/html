<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/10
 * Time: 11:04
 */
$srr = "/home/www/htdocs/book/chapter10/index.html";
$pathinfo = pathinfo($srr);
printf("dir name: %s".PHP_EOL,$pathinfo['dirname']);