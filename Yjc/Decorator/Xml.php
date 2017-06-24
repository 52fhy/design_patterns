<?php
/**
 * Created by PhpStorm.
 * User: YJC
 * Date: 2017/6/24 024
 * Time: 16:51
 */

namespace Yjc\Decorator;


class Xml extends Decorator
{
    public function output($data)
    {
        header('Content-type: application/xml');
        echo $this->xml_encode($data);
        exit;
    }

    /**
     * XML编码
     * @param mixed $data 数据
     * @param string $encoding 数据编码
     * @param string $root 根节点名
     * @return string
     */
    public function xml_encode($data, $encoding='utf-8', $root='xml') {
        $xml    = '<?xml version="1.0" encoding="' . $encoding . '"?>';
        $xml   .= '<' . $root . '>';
        $xml   .= $this->data_to_xml($data);
        $xml   .= '</' . $root . '>';
        return $xml;
    }

    /**
     * 数据XML编码
     * @param mixed $data 数据
     * @return string
     */
    public function data_to_xml($data) {
        $xml = '';
        foreach ($data as $key => $val) {
            is_numeric($key) && $key = "item id=\"$key\"";
            $xml    .=  "<$key>";
            $xml    .=  ( is_array($val) || is_object($val)) ? $this->data_to_xml($val) : $val;
            list($key, ) = explode(' ', $key);
            $xml    .=  "</$key>";
        }
        return $xml;
    }

}