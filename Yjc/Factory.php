<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 10:54
 */

namespace Yjc;


class Factory
{
    /**
     * 工厂模式
     */
    public static function getDb(){
        return new Db();
    }
}