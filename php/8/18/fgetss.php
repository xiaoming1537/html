<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/17
 * Time: 12:17
 */
//�����ɽ��ܵı�ǩ���б�
$tags = '<h2><h3><p><b></b><a></a><img>';
//�����¶�ȡ������
$fh = fopen('form.html','r');
while(!feof($fh)){
    $article.= fgetss($fh,1024,$tags);
}
//�رվ��
fclose($fh);

//��дģʽ���ļ������������
$fh = fopen('form.html','w');
fwrite($fh,$article);
//�رվ��
fclose($fh);
