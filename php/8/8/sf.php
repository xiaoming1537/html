<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/8
 * Time: 16:26
 */
$draft = "In 2010 the company faced plummeting revenues and scandal";
$keywords = array("/faced/","/plummeting/","/scandal/");
$replacements = array("celebrated","skyrocketing","expansion");
echo preg_replace($keywords,$replacements,$draft);