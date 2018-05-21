<?php
namespace App\Models;
class User{
    public $id=-1;
    public $name;
    public $phone;
    public $password;
    public $sex=1;
    public $city;
    public $photo;
    public $gold=0;
    public $zhuan=0;
    public $level=0;
    public $count=0;
    public $create;
    public $update;
    public $status=0;
    public $local;
    public $phone2;
    public $token;
    public $imei;
    public $version;
    public $qq;
    public $address;
    public $weixin;
    public $online;
    public $no_read;
    public $loveNum;
    public $orderNum;

    function __construct(array $attributes = [])
    {
        if(empty($attributes)){return;}

        if(isset($attributes['id'])&&!is_null($attributes['id']))
        {
            $this->setId($attributes['id']);
        }

        if(isset($attributes['name'])&&!is_null($attributes['name']))
        {
            $this->setName($attributes['name']);
        }
        if(isset($attributes['phone'])&&!is_null($attributes['phone']))
        {
            $this->setPhone($attributes['phone']);
        }
        if(isset($attributes['password'])&&!is_null($attributes['password']))
        {
            $this->setPassword($attributes['password']);
        }
        if(isset($attributes['sex'])&&!is_null($attributes['sex']))
        {
            $this->setSex($attributes['sex']);
        }
        if(isset($attributes['city'])&&!is_null($attributes['city']))
        {
            $this->setCity($attributes['city']);
        }
        if(isset($attributes['photo'])&&!is_null($attributes['photo']))
        {
            $this->setPhoto($attributes['photo']);
        }
        if(isset($attributes['gold'])&&!is_null($attributes['gold']))
        {
            $this->setGold($attributes['gold']);
        }
        if(isset($attributes['zhuan'])&&!is_null($attributes['zhuan']))
        {
            $this->setZhuan($attributes['zhuan']);
        }
        if(isset($attributes['level'])&&!is_null($attributes['level']))
        {
            $this->setLevel($attributes['level']);
        }
        if(isset($attributes['count'])&&!is_null($attributes['count']))
        {
            $this->setCount($attributes['count']);
        }
        if(isset($attributes['create'])&&!is_null($attributes['create']))
        {
            $this->setCreate($attributes['create']);
        }
        if(isset($attributes['update'])&&!is_null($attributes['update']))
        {
            $this->setUpdate($attributes['update']);
        }
        if(isset($attributes['status'])&&!is_null($attributes['status']))
        {
            $this->setStatus($attributes['status']);
        }
        if(isset($attributes['local'])&&!is_null($attributes['local']))
        {
            $this->setLocal($attributes['local']);
        }
        if(isset($attributes['phone2'])&&!is_null($attributes['phone2']))
        {
            $this->setPhone2($attributes['phone2']);
        }
        if(isset($attributes['token'])&&!is_null($attributes['token']))
        {
            $this->setToken($attributes['token']);
        }
        if(isset($attributes['imei'])&&!is_null($attributes['imei']))
        {
            $this->setImei($attributes['imei']);
        }
        if(isset($attributes['version'])&&!is_null($attributes['version']))
        {
            $this->setVersion($attributes['version']);
        }
        if(isset($attributes['qq'])&&!is_null($attributes['qq']))
        {
            $this->setQq($attributes['qq']);
        }
        if(isset($attributes['address'])&&!is_null($attributes['address']))
        {
            $this->setAddress($attributes['address']);
        }
        if(isset($attributes['weixin'])&&!is_null($attributes['weixin']))
        {
            $this->setWeixin($attributes['weixin']);
        }
        if(isset($attributes['online'])&&!is_null($attributes['online']))
        {
            $this->setOnline($attributes['online']);
        }
        if(isset($attributes['no_read'])&&!is_null($attributes['no_read']))
        {
            $this->setNo_read($attributes['no_read']);
        }
        if(isset($attributes['loveNum'])&&!is_null($attributes['loveNum']))
        {
            $this->setLoveNum($attributes['loveNum']);
        }
        if(isset($attributes['orderNum'])&&!is_null($attributes['orderNum']))
        {
            $this->setOrderNum($attributes['orderNum']);
        }
    }

    public function getLoveNum() {
        return $this->loveNum;
    }

    public function getOrderNum() {
        return $this->orderNum;
    }

    public function setLoveNum($loveNum) {
        $this->loveNum = $loveNum;
    }

    public function setOrderNum($orderNum) {
        $this->orderNum = $orderNum;
    }

    public function getNo_read() {
        return  $this->no_read;
    }

    public function setNo_read($no_read) {
         $this->no_read = $no_read;
    }

    public function getOnline() {
        return  $this->online;
    }

    public function setOnline($online) {
         $this->online = $online;
    }

    public function getWeixin() {
        return  $this->weixin;
    }

    public function setWeixin($weixin) {
         $this->weixin = $weixin;
    }

    public function getAddress() {
        return  $this->address;
    }

    public function setAddress($address) {
         $this->address = $address;
    }

    public function getQq() {
        return  $this->qq;
    }

    public function setQq($qq) {
         $this->qq = $qq;
    }

    public function setVersion($version) {
         $this->version = $version;
    }

    public function getVersion() {
        return  $this->version;
    }

    public function setImei($imei) {
         $this->imei = $imei;
    }

    public function getImei() {
        return  $this->imei;
    }

    public function setToken($token) {
         $this->token = $token;
    }

    public function getToken() {
        return  $this->token;
    }
    public function setPhone2($phone2) {
         $this->phone2 = $phone2;
    }

    public function getPhone2() {
        return  $this->phone2;
    }

    public function setLocal($local) {
         $this->local = $local;
    }
    public function getLocal() {
        return  $this->local;
    }
    public function getStatus() {
        return  $this->status;
    }

    public function setStatus($status) {
         $this->status = $status;
    }
    public function setUpdate($update) {
         $this->update = $update;
    }
    public function getUpdate() {
        return  $this->update;
    }

    public function setCreate($create) {
         $this->create = $create;
    }

    public function getCreate() {
        return  $this->create;
    }

    public function setCount($count) {
         $this->count = $count;
    }

    public function getCount() {
        return  $this->count;
    }

    public function setLevel($level) {
         $this->level = $level;
    }

    public function getLevel() {
        return  $this->level;
    }

    public function setZhuan($zhuan) {
         $this->zhuan = $zhuan;
    }

    public function getZhuan() {
        return  $this->zhuan;
    }

    public function setGold($gold) {
         $this->gold = $gold;
    }

    public function getGold() {
        return  $this->gold;
    }

    public function setPhoto($photo) {
        $this->photo = $photo;
    }

    public function getPhoto() {
        return $this->photo;
    }

    public function setCity($controy) {
        $this->city = $controy;
    }

    public function getCity() {
        return $this->city;
    }

    public function getSex() {
        return $this->sex;
    }

    public function setSex($sex) {
        $this->sex = $sex;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
} 