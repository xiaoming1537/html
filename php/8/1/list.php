<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/1
 * Time: 11:48
 */
function retrieveUserProfile(){
    $usr[] = "Jason Gilmore";
    $usr[] = "jason@example.com";
    $usr[] = "English";
    return $usr;
}

list($name,$email,$language)=retrieveUserProfile();
echo $name.PHP_EOL,$email.PHP_EOL,$language.PHP_EOL;
