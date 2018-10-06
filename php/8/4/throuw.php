<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/4
 * Time: 21:25
 */
try{
    $fh = fopen(":contacts.txt","r");
    if(!$fh){
        throw new Exception("Could not open the file!");
    }
}
catch (Exception $e){
    echo "Error (File: ".$e->getFile().".line".$e->getLine()."):".$e->getMessage();
}
