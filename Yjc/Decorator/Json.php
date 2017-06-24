<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 16:27
 */

namespace Yjc\Decorator;


use Yjc\IResponse;

class Json extends Decorator
{
    public function output($data)
    {
        header('Content-type: application/json');
        echo json_encode($data);
        exit;
    }

}