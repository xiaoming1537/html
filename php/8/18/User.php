<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/16
 * Time: 15:50
 */
$userfile = file_get_contents('D:/XAMPP/htdocs/html_form/resource/dome.txt');


//��$userfile ��ÿһ�з�������
$users = explode("\n",$userfile);
//ѭ����������
foreach ($users as $user){
    //�����У��������ֺ͵����ʼ���ַ
    list($name,$email)=explode(' ',$user);
    //�����ʽ�������ֺ͵����ʼ���ַ
    printf("<a href='mailto:%s'>%s</a> <br/>",$email,$name);
}