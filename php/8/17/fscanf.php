<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/17
 * Time: 14:17
 */
$fh = fopen('socsecurity.txt','r');
//echo gettype($fh);
//���ա�����-����-���֡��ĸ�ʽ����ÿ��SSN
while($user = fscanf($fh,"%d-%d-%d")){
    //��ÿһ��ssn���ָ�ֵ����Ӧ�ı���
    list($part1,$part2,$part3) = $user;
    printf("Part 1 :%d Part 2: %d Part 3 :%d<br/>",$part1,$part2,$part3);

}
fclose($fh);