<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/25 025
 * Time: 13:25
 */

namespace Yjc\Observer;

interface IObserver
{
    public function update($data);
}