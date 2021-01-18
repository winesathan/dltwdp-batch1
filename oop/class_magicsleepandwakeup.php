<?php
class class_magicsleepandwakeup{
    public function __sleep(){
        echo "sir you are trying to serialize for object"."<br/>";
        return[];
    }
    public function __wakeup(){
    echo "sir you are trying to unserialize for object"."<br/>";
    }
}
echo "this is magic method sleep and wakeup"."<br/>";
$obj = new class_magicsleepandwakeup();

$slz = serialize($obj);

unserialize($slz);