<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 15:30
 */

namespace App;

use Yjc\App;

class DecoratorTest extends App
{
    public function index(){
        $res = ['name' => 'yjc'];
        return $res;
//        $this->assign('name', 'vvv');
//        $this->display();
    }

}