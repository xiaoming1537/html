<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/7
 * Time: 18:47
 */
$foods = array("pasta","steak","fish","potatoes");
$food = preg_grep("/^p/",$foods,"PREG_REGP_INVERT");
print_r($food);
