<?php
class Adress {
    private $house;
    private $city;
    private $country;
    function __construct($house,$city,$country) {
        $this->house = $house;
        $this->city = $city;
        $this->country = $country;
    }
    function getHouse() { return $this->house; }
    function getCity() { return $this->city; }
    function getCountry() { return $this->country; }
}
?>