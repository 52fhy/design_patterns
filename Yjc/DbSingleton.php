<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 11:55
 */

namespace Yjc;


class DbSingleton extends Db
{
    private static $db = null;

    /**
     * 单例工厂模式
     */
    public static function getInstance(){
        if(self::$db === null){
            self::$db = new Db();
        }
        return self::$db;
    }

    /**禁止使用构造函数*/
    private function __construct() {}

    /**禁止克隆*/
    private function __clone() {}

}