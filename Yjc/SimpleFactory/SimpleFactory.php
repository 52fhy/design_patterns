<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/25 025
 * Time: 8:21
 */

namespace Yjc\SimpleFactory;

class SimpleFactory
{
    public static function makeCar($type){
        switch ($type){
            case 'benz':
                return new Benz();
                break;
            case 'bmw':
                return new Bmw();
                break;
            default:
                throw new \Exception('not support type!');
                break;
        }
    }
}