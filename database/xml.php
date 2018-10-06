<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/9/7
 * Time: 11:39
 */

//Initialize the xml parser
$parser=xml_parser_create();
//Function to use the start of an element
function start($parser,$element_name,$element_attrs){
    switch ($element_name){
        case "NOTE":
            echo "--Note--<br />";
            break;
        case "TO":
            echo "To:";
            break;
        case "FROM":
            echo "From";
            break;
        case "HEADING":
            echo "Heading";
            break;
        case "BODY":
            echo "Message";
    }
}
function stop($parser,$element_name)
{
    echo "<br/>";
}

function char($parser,$data)
{
    echo $data;
}

xml_set_element_handler($parser,"start","stop");
