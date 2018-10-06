<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/2
 * Time: 15:18
 */
class Bo0ok{
    private $title;
    private $isbn;
    private $copies;
    function __construct($isbn)
    {
        echo "<p>Book class instance created.</p>".PHP_EOL;
    }
    function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "<p>Book class instance destroyed.</p>".PHP_EOL;
    }
}
$bss = new Bo0ok(242);
