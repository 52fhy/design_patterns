<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/25 025
 * Time: 10:19
 */

namespace Yjc\AbstractFactory;

class BenzSport implements IProductSportCar
{
    public function driver()
    {
        echo 'driver';
    }
}