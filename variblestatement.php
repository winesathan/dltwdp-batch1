<?php

#var_dump
$val="Zaw Myint Maung";

echo "{$val}";
echo "<br/>";

$val1='Zaw Myint Maung\'s';

echo "{$val1}";
echo "<br/>";

$val2="Zaw Myint Maung\"s ";
echo "{$val2}";
echo "<br/>";
echo "<hr/>";
 //statement function
 $num="Aung Aung";
 var_dump($num);
 if(is_string($num)){
echo "Your variable is string ";
 }
echo "<hr/>";

$num1=150;
var_dump($num1);

if(is_numeric($num1)){
    echo "YOur variable is numeric";
}
echo "<hr/>";

$num2=20.5;
var_dump($num2);
if(is_float($num2)){
    echo "your variable is float";
}

echo "<hr/>";
$num3=false;
var_dump($num3);
if(is_bool($num3)){
echo "Your variable is boolean";
}
echo "<hr/>";
$num4=[1,2];
var_dump($num4);
if(is_array($num4)){
    echo "your variable is array";

}
echo "<hr/>";

$num5=[];
var_dump($num5);
if(empty($num5)){
    echo "Your variable is empty";
}
echo "<hr/>";

$num6=12;
var_dump($num6);
if(is_int($num6)){
    echo "your variable is int";
}
?>