<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 15:30
 */

namespace App;


use Yjc\Strategy\Md5;

class StrategyTest
{
    public function index(){
        $md5 = new Md5();
        $md5->update('123');
        $md5->update('456');
        echo $md5->hexdigest();
    }

}