<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 20:57
 */

namespace App;

use Yjc\Iterator\UserList;

class IteratorTest
{
    public function index(){

        //实际应该从数据库查询
        $users = new UserList([
            ['id' => 1, 'name' => 'yjc'],
            ['id' => 2, 'name' => 'hhh'],
            ['id' => 3, 'name' => 'fkkf'],
        ]);

        foreach ($users as $user){
            print_r($user);
        }
    }

}