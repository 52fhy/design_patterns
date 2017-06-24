<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 11:14
 */

namespace Yjc;


class App
{

    public static function run(){

        $uri = explode('?', $_SERVER['REQUEST_URI']); //分出路由部分和参数部分
        $uri_part = trim($uri[0], '/'); //取出路由部分

//        var_dump($uri);exit; // /FactoryTest/index

        $uri_arr = explode('/', $uri_part);

        if(strpos($uri_arr[0], '.') !== false){
            array_shift($uri_arr);
        }

        if(!empty($uri_arr[0]) && !empty($uri_arr[1])){
            $controller = $uri_arr[0];
            $action = $uri_arr[1];

            $class = '\\Test\\' . $controller;
            $obj = new $class();

            if(method_exists($obj, $action)){
                $res = $obj->$action();
                if($res) echo json_encode($res);
            }else{
                header('HTTP/1.1 404 Not Found');
                exit('404 not found.');
            }

        }else{
            header('HTTP/1.1 404 Not Found');
            exit('404 not found.');
        }
    }

}