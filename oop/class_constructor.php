<?php
class class_constructor{

    public function __construct($name){
        echo "I am start working by automatically sir ${name} ";
    }

}
echo "This is Constructor"."<br/>";
//$obj = new class_constructor();
$obj = new class_constructor("Aung Aung");
echo "<hr/>";