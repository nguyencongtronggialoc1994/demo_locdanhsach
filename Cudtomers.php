<?php


class Cudtomers
{
    private $name;
    private $birthday;
    private $address;

    public function  __construct($name,$birthday,$address){
        $this->name= $name;
        $this->birthday= $birthday;
        $this->address= $address;
    }
     public function getName(){
        return $this->name;
     }
     public function setName($name){
        $this->name= $name;
     }
     public function getBirthday(){
        return$this->birthday;
     }
     public function setBirthday($birthday){
        $this->birthday=$birthday;
     }
     public function getAddress(){
        return$this->address;
     }
     public function setAddress($address){
        $this->address=$address;
     }
}