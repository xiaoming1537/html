<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/17
 * Time: 12:28
 */
/*
 * �����ȡ��
$fh = fopen('dome.txt','r');
while(! feof($fh)){
  echo fgetc($fh);
}
*/
//Ϊ��ȡ�����ļ�
$fh = fopen('dome.txt','r');
//���������ļ�
$userdata = fread($fh,filesize('dome.txt'));
 echo $userdata;
//�ر��ļ����
fclose($fh);