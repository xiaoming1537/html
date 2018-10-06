<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/2
 * Time: 13:35
 */
class pussss{
    public function greetVisitor(){
        echo "Hello".PHP_EOL;
    }
    function sayGoodbye(){
        echo "Goodbye".PHP_EOL;
    }
}
pussss::sayGoodbye();
pussss::greetVisitor();
$value = new pussss();
$value->sayGoodbye();