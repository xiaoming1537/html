<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/17
 * Time: 12:12
 */
//�� users.txt �ľ��
$fh = fopen('dome.txt','r');
//��δ
//fclose($fh);����EOFʱ��������һ�в����
while (!feof($fh)) echo fgets($fh);
//�رվ��