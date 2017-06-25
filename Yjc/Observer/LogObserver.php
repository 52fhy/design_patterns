<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/25 025
 * Time: 13:26
 */

namespace Yjc\Observer;

class LogObserver implements IObserver
{

    public function update($data)
    {
        echo 'write log to file.';
    }
}