<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 14:48
 */

namespace Yjc\Adapter;


class SimpleBook
{
    private $author;
    private $title;

    function __construct($author_in, $title_in) {
        $this->author = $author_in;
        $this->title  = $title_in;
    }

    function getAuthor() {
        return $this->author;
    }

    function getTitle() {
        return $this->title;
    }
}