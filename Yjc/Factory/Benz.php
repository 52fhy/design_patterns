<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/25 025
 * Time: 8:24
 */

namespace Yjc\Factory;

class Benz implements ICar
{
    public function driver()
    {
        echo 'benz driver.';
    }
}