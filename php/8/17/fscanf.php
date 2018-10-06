<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/17
 * Time: 14:17
 */
$fh = fopen('socsecurity.txt','r');
//echo gettype($fh);
//依照“数字-数字-数字”的格式解析每个SSN
while($user = fscanf($fh,"%d-%d-%d")){
    //将每一个ssn部分赋值给相应的变量
    list($part1,$part2,$part3) = $user;
    printf("Part 1 :%d Part 2: %d Part 3 :%d<br/>",$part1,$part2,$part3);

}
fclose($fh);