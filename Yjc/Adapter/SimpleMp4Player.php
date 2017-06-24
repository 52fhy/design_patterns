<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 15:08
 */

namespace Yjc\Adapter;

class SimpleMp4Player extends Mp4PlayerAdapter
{
    public function playMusic(){
        echo '播放音乐';
    }

    public function playVideo(){
        echo '播放视频';
    }
}