<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/9/11
 * Time: 14:14
 */
$xml =simplexml_load_file("MOp.xml");
$book = $xml->xpath("/bookstre/book[year='2005']");
echo $book[0]->title;