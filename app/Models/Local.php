<?php
namespace App\Models;
class Local{
    private $id=-1;
    private $uid=-1;
    private $country="";
    private $province="";
    private $city="";
    private $political="";
    private $route="";
    private $street="";
    private $updateTime;
    private $latitude = 0;
    private $longitude = 0;
    private $status=1;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }


    public function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    public function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

    public function getLatitude() {
        return $this->latitude;
    }

    public function getLongitude() {
        return $this->longitude;
    }
    public function setCity($city) {
        $this->city = $city;
    }

    public function setCountry($country) {
        $this->country = $country;
    }

    public function setPolitical($political) {
        $this->political = $political;
    }

    public function setProvince($province) {
        $this->province = $province;
    }

    public function setRoute($route) {
        $this->route = $route;
    }

    public function setStreet($street) {
        $this->street = $street;
    }

    public function setUid($uid) {
        $this->uid = $uid;
    }

    public function setUpdateTime($updateTime) {
        $this->updateTime = $updateTime;
    }

    public function getUpdateTime() {
        return $this->updateTime;
    }

    public function getUid() {
        return $this->uid;
    }

    public function getCity() {
        return $this->city;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getPolitical() {
        return $this->political;
    }

    public function getProvince() {
        return $this->province;
    }

    public function getRoute() {
        return $this->route;
    }

    public function getStreet() {
        return $this->street;
    }

}