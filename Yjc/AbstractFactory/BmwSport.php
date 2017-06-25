<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/25 025
 * Time: 10:47
 */

namespace Yjc\AbstractFactory;

class BmwSport implements IProductSportCar
{
    public function driver()
    {
        echo 'driver';
    }
}