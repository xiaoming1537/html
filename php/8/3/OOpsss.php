<?php
/**
 * Created by PhpStorm.
 * User: vi
 * Date: 2018/8/3
 * Time: 15:18
 */

class OOpsss
{
    public static $favSport = "Football";
    public static function watchTV(){
        echo "Watching ".self::$favSport;
    }
}
class Executive extends OOpsss{
    public static $favSport = "Polo";
    public static function watchTV()
    {
        echo "Watching ".static::$favSport;
    }
}
echo Executive::watchTV();