<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/25 025
 * Time: 13:37
 */

namespace App;


use Yjc\Observer\LogObserver;
use Yjc\Observer\OrderSubject;
use Yjc\Observer\SmsObserver;

class Observertest
{
    public function index(){
        $order_subject = new OrderSubject();
        $order_subject->attach(new LogObserver());//写日志
        $order_subject->attach(new SmsObserver());//发短信
        $order_subject->change(['oid' => '1', 'flag' => 3]);//订单状态变化，触发观察者
    }
}