<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/17
 * Time: 14:30
 */
//Ҫд��subscribers.txt�ļ�������
$subscriberInfo = 'Jason Gilmore|jason@example.com';

//Ϊд�����subscribers.txt
$fh = fopen('subscribers.txt','a');

//д����
fwrite($fh, $subscriberInfo);

//�رվ��
fclose($fh);
