<?php
class class_magicgetandset{
    public $fullname ="aungaung";
    public function __get($a){
        echo" There is any property${a} you want to find";
    }
    public function __set($property,$value){
        echo "this is your ${property}.This is your ${value}";
    }
}
$obj = new class_magicgetandset();
$obj->adress = "yangon";
