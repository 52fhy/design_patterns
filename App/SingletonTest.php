<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/25 025
 * Time: 9:31
 */

namespace App;

use Yjc\Singleton\Factory;

class SingletonTest
{
    public function index(){
        $db = Factory::getInstance();
        $db->query();
        var_dump($db);

        $db2 = Factory::getInstance();
        $db->exec();
        var_dump($db2);
    }
}