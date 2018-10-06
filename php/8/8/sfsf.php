<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/8
 * Time: 16:58
 */
//此函数将直接添加缩写词的长形式到$matches中找到的任何缩写词后
function acronym($matches){
    $acronyms = array(
        'WWW' => 'World Wide Web',
        'TRS' => 'Internal Revenue Service',
        'PDF' => 'Portable Document Format'
    );
    if (isset($acronyms[$matches[1]]))
        return $matches[1]."(".$acronyms[$matches[1]].")";
    else
        return $matches[1];
}
//目标文本
$text = "The <acronym>TRS</acronym> offers tax forms in
<acronym>PDF</acronym> format on the <acronym>WWW</acronym>.";
//添加缩写词的长形式到目标文本中
$newtext = preg_replace_callback("/<acronym>(.*)<\/acronym>/U",'acronym',$text);
print_r($newtext);