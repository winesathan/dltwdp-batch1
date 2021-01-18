<?php
class  class_magictostringandinvoke{
    public $name = "Kyaw Kyaw";
    public function __toString(){
        return"You are trying to print out as obj"."<br/>";
    }
    public function __invoke(){
        return "you are trying to call obj as method"."<br/>";
    }
    public function __clone(){
        echo "You are trying to clone obj";
    }
}
$obj = new class_magictostringandinvoke();
echo $obj;

echo $obj();

//$cc = $obj;
//echo $cc->name;

$cc = clone $obj;
//echo $cc->name;
echo "<hr/>";