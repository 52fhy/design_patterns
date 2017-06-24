<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 15:26
 */

namespace Yjc\Strategy;


interface IHashLib
{
    public function update($str);
    public function hexdigest();
}