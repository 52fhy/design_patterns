<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/25 025
 * Time: 13:28
 */

namespace Yjc\Observer;


abstract class ISubject
{
    private  $observers = [];//观察者集合

    public function attach(IObserver $observer){
        array_push($this->observers, $observer);
    }

    public function detach(IObserver $observer){
        return false;
    }

    public function nodifyObservers($data){
        if(count($this->observers) == 0) return false;
        foreach ($this->observers as $observer){
            $observer->update($data);
        }
    }

    public abstract function change($data);

}