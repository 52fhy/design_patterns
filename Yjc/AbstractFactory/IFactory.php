<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/25 025
 * Time: 10:20
 */

namespace Yjc\AbstractFactory;

interface IFactory
{
    public function makeMiniCar();//Mini车
    public function makeSportCar();//跑车
}