<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/9/11
 * Time: 13:25
 */
$xml = simplexml_load_file('Mop.xml');


//foreach ($xml->book as $book){
//    printf("%s is %s.<br/>",$book->title,$book->title->attributes());
//}
//echo ($xml->book[2]->title->attributes())[1];
////
//$ww= $xml->asXML();
//var_dump($ww);
echo htmlspecialchars($xml->asXML());