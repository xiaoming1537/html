<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/17
 * Time: 12:04
 */
$users = file('text.csv');

foreach ($users as $user){
    //���ļ���ÿһ�зֽ�Ϊ3 ����
    list($name, $email, $phone) = explode(',',$user);
    //��HTML��ʽ�������
    printf("<p>%s (%s) Tel.%s</p>",$name,$email,$phone);
}