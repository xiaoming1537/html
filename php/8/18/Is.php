<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/16
 * Time: 20:45
 */
$fh = fopen('text.csv','r');
//���ļ��ֽ�Ϊ3����
while (list($name,$email,$phone)= fgetcsv($fh,1024,',')){
//��HTML��ʽ�������
printf("<p>%s (%s)Tel.%s</p>.".PHP_EOL,$name,$email,$phone);


}