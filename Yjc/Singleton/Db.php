<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 11:11
 */

namespace Yjc\Singleton;

class Db
{
    public function query(){
        echo 'query'.PHP_EOL;
    }

    public function exec(){
        echo 'exec'.PHP_EOL;
    }
}