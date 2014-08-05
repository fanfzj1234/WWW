<?php
/**
 * Created by PhpStorm.
 * User: attect
 * Date: 14-7-25
 * Time: 下午5:07
 */


class ReceiveAction extends CommonAction {
    //其它类实例后的变量
    private $ErrorModel;
    private $ReturnEvent;
    private $CstringEvent;

    //客户端信息
    private $client = 0;

    /////////////////接收到的数据有关的变量/////////////////////
    //保存传入的数组
    private $json;

    //接口名
    private $A;

    //操作名
    private $AC;

    //验证串
    private $C;

    //接口版本
    private $E;

    //接口额外变量名称数组
    private $V;

    //额外变量数组
    private $Array;


    ////////////////////返回值常量//////////////////
    //传入的不是一个字符串
    const RETURN_RECIVE_NOT_STRING_TYPE = 1;
    //JSON解析时达到了最大的堆栈深度
    const RETURN_RECIVE_JSON_ERROR_DEPTH = 2;
    //JSON解析失败，无效或者异常的JSON
    const RETURN_RECIVE_JSON_ERROR_STATE_MISMATCH = 3;
    //JSON解析时控制字符错误
    const RETURN_RECIVE_JSON_ERROR_CTRL_CHAR = 4;
    //JSON里有语法错误
    const RETURN_RECIVE_JSON_ERROR_SYNTAX = 5;
    //JSON里有异常的UTF-8字符
    const RETURN_RECIVE_JSON_ERROR_UTF8 = 6;
    //尝试取出一个不存在的额外变量
    const RETURN_GET_NOT_EXISTS_EXTRA_VALUE = 7;
    //未能根据验证串识别出客户端类型
    const RETURN_UNKNOWN_CLIENT_TYPE_BY_CSTING = 8;


    //接收字符串
    public function receive($string){
        if(!is_string($string))
        {
            $this->_error(self::RETURN_RECIVE_NOT_STRING_TYPE);
        $this->json = json_decode($string,true);
        $json_error_code = json_last_error();
		}
        
        //取得A值
        $this->A = $this->json['A'];
        //取得AC值
        $this->AC = $this->json['AC'];
        //取得E值
        $this->E = $this->json['E'];
        //取得C验证串值
        $this->C = $this->json['C'];
        //验证串事件载入一下这个验证串
        $this->CstringEvent->checkCstring($this->C);
        //验证一下:
        if($this->CstringEvent->getClientType() == CstringEvent::CLIENT_TYPE_UNKNOWN) $this->_error(self::RETURN_UNKNOWN_CLIENT_TYPE_BY_CSTING);
        //取得V数组
        $this->V = $this->json['V'];

        //取得自定义变量数组
        foreach($this->V as  $v){
            $this->Array[$v] = $this->json[$v];
        }
    }

    //根据名称获取额外变量的值
    public function getExtraValue($n,$all = false){
        if($all){
            return $this->Array;
        }

        if(array_key_exists($n,$this->Array)){
            //如果存在则返回
            return $this->Array[$n];
        }
    }



}