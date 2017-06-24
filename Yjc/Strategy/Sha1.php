<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 15:27
 */

namespace Yjc\Strategy;


class Sha1 implements IHashLib
{
    private $str;

    public function update($str)
    {
        $this->str .= $str;
    }

    public function hexdigest()
    {
        return sha1($this->str);
    }
}