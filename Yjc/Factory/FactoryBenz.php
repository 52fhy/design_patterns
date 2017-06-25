<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/25 025
 * Time: 9:11
 */

namespace Yjc\Factory;

class FactoryBenz implements IFactory
{
    public static function makeCar()
    {
        return new Benz();
    }
}