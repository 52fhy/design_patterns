<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 18:33
 */

namespace yjc\Prototype;

class Factory
{
    private $ins;

    public function __construct(IProduct $product)
    {
        $this->ins = $product;
    }

    public function getInstance(){
        return clone $this->ins;
    }

}