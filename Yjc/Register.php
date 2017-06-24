<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 10:55
 */

namespace Yjc;


class Register
{
    private static $objs = [];

    public static function set($key ,$obj){
        self::$objs[$key] = $obj;
    }

    public static function get($key){
        if(isset(self::$objs[$key])){
            return self::$objs[$key];
        }

        return false;
    }

    public static function remove($key){
        if(isset(self::$objs[$key])){
            unset(self::$objs[$key]);
        }
    }

}