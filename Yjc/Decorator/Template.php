<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 16:49
 */

namespace Yjc\Decorator;


use Yjc\IResponse;

class Template extends Decorator
{

    private $reponse;

    public function __construct(IResponse $response)
    {
        $this->reponse = $response;
        parent::__construct($response);
    }

    public function output($data)
    {
        $data = $data['data'];
        if(empty($data)){
            return;
        }

        if(is_array($data)){
            foreach($data as $k=> $v){
                $this->reponse->assign($k, $v);
            }
        }else{
            $this->reponse->assign('data', $data);
        }

        $this->reponse->display();
    }

}