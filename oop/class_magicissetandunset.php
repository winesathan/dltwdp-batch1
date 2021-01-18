<?php
class class_magicissetandunset{
// public $name = "Mya Mya";

    public function __isset($property){
        echo "You are trying to check set or not. It doestn't exit"."<br/>";
    }
    public function __unset($property){
        echo "You are trying to check unset or not. It doestn't exit"."<br/>";
    }

}
$obj = new class_magicissetandunset();
echo "This is Magic method isset and unset". "<br/>";
isset($obj->name);

unset($obj->name);
