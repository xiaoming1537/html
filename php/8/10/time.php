<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/10
 * Time: 16:14
 */
//$fh = fopen('D:/XAMPP/htdocs/html_form/resource/dome.txt','r');

//$users = file('D:/XAMPP/htdocs/html_form/resource/dome.txt');
$users = file('dome.txt');
print_r($users);
foreach ($users as $user){
    //�����У��������ֺϵ����ʼ���ַ
    list($name, $email) = explode(' ',$user);
    //�Ƴ�$email �еĻ��з�
    $email= trim($email);
    //�����ʽ�������ֺϵ��ӵ�ַ
    echo "<a href = \"mailto:$email\">$name</a><br/>";
}
echo PHP_EOL;
echo gettype($users);
//D:/XAMPP/htdocs/html_form/resource/dome.txt
