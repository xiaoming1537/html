<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/17
 * Time: 12:17
 */
//构建可接受的标签的列表
$tags = '<h2><h3><p><b></b><a></a><img>';
//打开文章读取其内容
$fh = fopen('form.html','r');
while(!feof($fh)){
    $article.= fgetss($fh,1024,$tags);
}
//关闭句柄
fclose($fh);

//以写模式打开文件并输出其内容
$fh = fopen('form.html','w');
fwrite($fh,$article);
//关闭句柄
fclose($fh);
