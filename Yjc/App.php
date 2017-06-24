<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 11:14
 */

namespace Yjc;


use Yjc\Decorator\Json;
use Yjc\Decorator\Template;
use Yjc\Decorator\Xml;

class App implements IResponse
{

    protected $view_data;

    public function run(){

        try{
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
            }else{
                $controller = 'Index';
                $action = 'index';
            }

            define('CONTROLLER_NAME', $controller);
            define('ACTION_NAME', $action);

            $class = '\\App\\' . $controller;
            $obj = new $class();

            if(!method_exists($obj, $action)){
                throw new \Exception('404 not found');
            }


            $res['code'] = 1;
            $res['info'] = '成功';
            $res['data'] = $obj->$action();
//            if($res) echo json_encode(['code' => 0, 'info' => 'succ', 'result' => $res]);
        }catch (\Exception $e){
            $res['code'] = $e->getCode();
            $res['info'] = $e->getMessage();
            $res['data'] = [];
        }

        $this->output($res);
    }

    public function output($data)
    {
        return (new Json($this))->output($data);
    }

    /**
     * 模板变量分配
     * @param $key
     * @param $view_data
     */
    public function assign($key, $view_data){
        $this->view_data[$key] = $view_data;
    }

    /**
     * 模板显示
     * @param string $file
     */
    public function display($file = ''){
        $view_path = BASE_PATH . '/View/';
        if(empty($file)){
            $file = $view_path. CONTROLLER_NAME . '/' . ACTION_NAME . '.php';
        }elseif($file && strpos($file, '/') === false){
            $file = $view_path. CONTROLLER_NAME . '/' . $file . '.php';
        }else{
            $file = $view_path . '/' . $file. '.php';
        }

        if(!file_exists($file)){
            exit("Cannot find template file: " . strstr($file, '/'));
        }

        extract($this->view_data);
        include $file;
    }
}