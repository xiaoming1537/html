<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/8
 * Time: 12:16
 */
$line = "Vim is the greatest word processor ever created! Oh vim, how I love thee!";
if(preg_match("/\bVim\b/i",$line,$match))
    print "Match found!";