<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 11:14
 */

namespace Test;


use Yjc\Db;
use Yjc\DbSingleton;
use Yjc\Factory;

class FactoryTest
{

    public function index(){

        $db = new Db();
        echo $db->query();
    }

    public function factory(){

        $db = Factory::getDb();
        $db->query();
        var_dump($db);

        $db2 = Factory::getDb();
        $db->exec();
        var_dump($db2);
    }

    public function factory2(){

        $db = DbSingleton::getInstance();
        $db->query();
        var_dump($db);

        $db2 = DbSingleton::getInstance();
        $db->exec();
        var_dump($db2);
    }

}