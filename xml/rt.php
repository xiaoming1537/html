<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/9/11
 * Time: 13:55
 */
$xml=simplexml_load_file('ui.xml');
//foreach ($xml->cast->children() as $child) {
//    echo "$child<br/>";
//
//}
$authors =$xml->xpath("/book/cast/character");
foreach ($authors AS $author){
    echo "$author<br/>";
}