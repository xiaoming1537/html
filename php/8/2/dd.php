<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/2
 * Time: 11:25
 */

class dd
{
    public $name;
    public $city;
    protected $wage;
    function __get($name)
    {
        // TODO: Implement __get() method.
        echo "__get called!<br/>".PHP_EOL;
        $vars =array("name","city");
        if(in_array($name,$vars))
        {
           return $this->name;
        }
        else{
            return "No such variable!";
        }
    }
}
$oo= new dd();
$oo->name="mario";
echo $oo->name.PHP_EOL;
echo $oo->ss;