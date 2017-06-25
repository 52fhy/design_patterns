<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/25 025
 * Time: 10:31
 */

namespace Yjc\AbstractFactory;


class FactoryBenz implements IFactory
{

    public function makeMiniCar()
    {
        return new BenzMini();
    }

    public function makeSportCar()
    {
        return new BenzSport();
    }
}