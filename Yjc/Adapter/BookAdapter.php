<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 14:49
 */

namespace Yjc\Adapter;


class BookAdapter
{
    private $book;

    public function __construct(SimpleBook $book_in) {
        $this->book = $book_in;
    }

    //该方法是客户端需要的
    public function getAuthorAndTitle() {
        return $this->book->getTitle().' by '.$this->book->getAuthor();
    }

    //该方法源类已实现
    function getAuthor() {
        return $this->book->getAuthor();
    }

    //该方法源类已实现
    function getTitle() {
        return $this->book->getTitle();
    }

}