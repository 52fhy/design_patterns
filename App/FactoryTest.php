<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 11:14
 */

namespace App;

use Yjc\Db;
use Yjc\DbSingleton;
use Yjc\Factory;

class FactoryTest
{
    public function index(){
        $car = Factory\FactoryBenz::makeCar();
        $car->driver();
    }
}