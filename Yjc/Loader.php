<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 10:57
 */

namespace Yjc;


class Loader
{

    public static function autoload($class){
        if(false !== strpos($class, '\\')){
            $file = str_replace('\\', '/', BASE_PATH . '/'. trim($class, '\\')). '.php';
            if(file_exists($file)){
                require_once $file;
            }else{
                throw new \Exception("class file {$file} not exit.");
            }
        }
    }

}