<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 20:51
 */

namespace Yjc\Iterator;

class UserList implements \Iterator
{
    private $index = 0;
    private $data = [];

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function current()
    {
        return $this->data[$this->index];
    }

    public function next()
    {
        $this->index ++;
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
        return $this->index < count($this->data);
    }

    public function rewind()
    {
        $this->index = 0;
    }
}