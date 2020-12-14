<?php
trait class_trait{
    public $username = "winesathan";
    public $email = "winesathan42@gmail.com";
    public $password = "123456";
    public function parentone(){
        echo "I am from parent";
    }

}
trait class_baby1{
    public function baby1(){
        echo "I am from baby1";
    }
}
class class_baby2{
    use class_trait;
    use class_baby1;
    public function baby2(){
        echo "i am from baby2";
    }
}
$obj = new class_baby2;
$obj->baby2();
echo "<br/>";
$obj->baby1();
echo "<br/>";
$obj->parentone();
echo "<br/>";
$obj->email;
echo "<hr/>";