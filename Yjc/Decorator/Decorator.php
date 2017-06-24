<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 16:37
 */

namespace Yjc\Decorator;


use Yjc\IResponse;

class Decorator implements IResponse
{
    private $reponse;

    public function __construct(IResponse $response)
    {
        $this->reponse = $response;

    }

    public function output($data)
    {
        $this->reponse->output($data);
    }
}