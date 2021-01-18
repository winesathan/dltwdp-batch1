<?php
class class_databinding{
    public static $name = "Aung Aung";
    public static function classname(){
        return __CLASS__;
    }
    public function getclassname(){
//        echo $this->classname();
//        echo self::classname();
        echo static::classname();
    }
    public function getname(){
//        echo self::$name."<br/>";
        echo static::$name."<br/>";
    }
}
class childclass1 extends class_databinding{
    public static $name ="Kyaw Kyaw";
    public static function classname(){
        return __CLASS__;
    }
}

$obj = new class_databinding();
//echo $obj->classname();
$obj->getclassname();
echo "<br/>";
$obj->getname();
echo "<br/>";
$childobj = new childclass1();
$childobj->getclassname();
echo"<br/>";
//echo $childobj::$name;
//echo"<br/>";
$childobj->getname();
