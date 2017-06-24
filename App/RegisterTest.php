<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 12:23
 */

namespace App;


use Yjc\DbSingleton;
use Yjc\Register;

class RegisterTest
{
    public function index(){
        $db = DbSingleton::getInstance();
        Register::set('db', $db);

        $db1 = Register::get('db');
        $db2 = Register::get('db');

        var_dump($db);
        var_dump($db1);
        var_dump($db2);
    }

}