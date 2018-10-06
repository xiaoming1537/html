<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/2
 * Time: 14:44
 */
class sss{
    protected $name;
    protected $title;
    function __construct()
    {
        echo "<p>Employee constructor called!</p>".PHP_EOL;
    }
}
class Manager {
    function __construct()
    {
            sss::__construct();
            echo "<p>Manger constructor called!</p>".PHP_EOL;
    }
}
$employee = new Manager();