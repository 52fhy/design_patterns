<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/25 025
 * Time: 8:27
 */

namespace App;

use Yjc\SimpleFactory\SimpleFactory;

class SimpleFactoryTest
{
    public function index(){
        $car = SimpleFactory::makeCar('benz');
        $car->driver();
    }
}