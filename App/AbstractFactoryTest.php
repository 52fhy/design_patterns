<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/25 025
 * Time: 10:50
 */

namespace App;

use Yjc\AbstractFactory\FactoryBenz;
use Yjc\AbstractFactory\FactoryBmw;

class AbstractFactoryTest
{
    public function index(){
        //生产奔驰跑车
        $benzFactory = new FactoryBenz();
        $benzCar = $benzFactory->makeSportCar();
        $benzCar->driver();

        //生产宝马MINI
        $bmwFactory = new FactoryBmw();
        $bmwCar = $bmwFactory->makeMiniCar();
        $bmwCar->playMusic();
    }

}