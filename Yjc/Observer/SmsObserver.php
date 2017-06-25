<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/25 025
 * Time: 13:27
 */

namespace Yjc\Observer;

class SmsObserver implements IObserver
{

    public function update($data)
    {
        echo 'send sms';
    }
}