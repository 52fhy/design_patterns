<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 18:37
 */

namespace App;

use yjc\Prototype\Factory;
use yjc\Prototype\Product;

class PrototypeTest
{
    public function index(){
        $factory = new Factory(new Product());
        $p1 = $factory->getInstance();
        $p1->name = 'p1';

        $p2 = $factory->getInstance();
        $p2->name = 'p2';

        print_r($p1->name);
        print_r($p2->name);
    }

}