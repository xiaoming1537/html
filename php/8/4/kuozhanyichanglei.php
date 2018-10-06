<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/5
 * Time: 22:12
 */
class MyException extends Exception{
    function __construct($language,$errorcode){
        $this->language=$language;
        $this->errorcode=$errorcode;

    }
    function getMessageMap(){
        $error = file("Errors/".$this->language.".txt");
        foreach($error as $error){
            list($key,$value) = explode(",",$error,2);
            $errorArray[$key] =$value;
        }
        return $errorArray[$this->errorcode];
    }
}
try{
    throw new MyException("enlish",4);
}catch (MyException $e){
    echo $e->getMessageMap();
}