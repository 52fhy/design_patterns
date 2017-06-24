<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 14:49
 */

namespace App;


use Yjc\Adapter\BookAdapter;
use Yjc\Adapter\SimpleBook;
use Yjc\Adapter\SimpleMp4Player;

class AdapterTest
{

    public function index(){
        $book = new SimpleBook('yjc', 'PHP设计模式');
        $target = new BookAdapter($book);
        echo $target->getAuthorAndTitle();//调用了SimpleBook没有实现的类
        $target->getTitle();//调用了SimpleBook已实现的类
    }

    public function index2(){
        $player = new SimpleMp4Player();
        echo $player->playMusic();
    }

}