<?php
namespace App\Models;
class BaseRequest{
	public $userid;
    public $token;
    public $dateTime;
    public $actionType;
    public $appid;
    public $data;
    public $vesion;
    function __construct(array $attributes = [])
    {
        if(empty($attributes)){return;}
        if(!is_null($attributes['userid']))
        {
            $this->setUserid($attributes['userid']);
        }
        if(!is_null($attributes['token']))
        {
            $this->setToken($attributes['token']);
        }
        if(!is_null($attributes['dateTime']))
        {
            $this->setDateTime($attributes['dateTime']);
        }
        if(!is_null($attributes['actionType']))
        {
            $this->setActionType($attributes['actionType']);
        }
        if(!is_null($attributes['appid']))
        {
            $this->setAppid($attributes['appid']);
        }
        if(!is_null($attributes['data']))
        {
            $this->setData($attributes['data']);
        }
        if(!is_null($attributes['vesion']))
        {
            $this->setVesion($attributes['vesion']);
        }
    }
    public function getVesion() {
        return $this->vesion;
    }
    public function setVesion($vesion) {
        $this->vesion = $vesion;
    }

    public function getData() {
        return $this->data;
    }

    public function getDateTime() {
        return $this->dateTime;
    }

    public function getActionType() {
        return $this->actionType;
    }

    public function getAppid() {
        return $this->appid;
    }

    public function getUserid() {
        return $this->userid;
    }

    public function getToken() {
        return $this->token;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function setActionType($actionType) {
        $this->actionType = $actionType;
    }

    public function setAppid($appid) {
        $this->appid = $appid;
    }

    public function setDateTime($dateTime) {
        $this->dateTime = $dateTime;
    }

    public function setToken($token) {
        $this->token = $token;
    }

    public function setUserid($userid) {
        $this->userid = $userid;
    }
}