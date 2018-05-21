<?php
namespace App\Models;
class BaseResult{
	public $errcode;
    public $errmsg;
    public $type;
    public $text;
    public $data;

    function __construct(array $attributes = [])
    {
        if(empty($attributes)){return;}
        if(!is_null($attributes['errcode']))
        {
            $this->setErrcode($attributes['errcode']);
        }
        if(!is_null($attributes['errmsg']))
        {
            $this->setErrmsg($attributes['errmsg']);
        }
        if(!is_null($attributes['type']))
        {
            $this->setType($attributes['type']);
        }
        if(!is_null($attributes['text']))
        {
            $this->setText($attributes['text']);
        }
        if(!is_null($attributes['data']))
        {
            $this->setData($attributes['data']);
        }
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }

    public function setErrcode($errcode) {
        $this->errcode = $errcode;
    }

    public function setErrmsg($errmsg) {
        $this->errmsg = $errmsg;
    }

    public function setText($text) {
        $this->text = $text;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getErrcode() {
        return $this->errcode;
    }

    public function getType() {
        return $this->type;
    }

    public function getErrmsg() {
        return $this->errmsg;
    }

    public function getText() {
        return $this->text;
    }
}