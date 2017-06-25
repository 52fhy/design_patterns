<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/25 025
 * Time: 13:36
 */

namespace Yjc\Observer;

class OrderSubject extends ISubject
{
    public function change($data)
    {
        $this->nodifyObservers($data);
    }
}