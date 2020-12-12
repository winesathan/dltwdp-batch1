<?php


//variable scope
$val=20; //Global Variable


function variablescope(){
    $num=10; //local variable
    echo $num;
}

echo $val;
echo "<br/>";
variablescope();
echo "<br/>";
//echo $num; local variable does not working in outside;
echo "<hr/>";

$x=50;
$y=100;

function vscope(){
    global $x;
    global $y;
    $z=$x+$y;
    return $z;
}
echo $x;
echo "<br/>";
echo vscope();
echo "<hr/>";

//Static Variable
function stativbariable(){
    STATIC $val=0;
    $val++;
    echo $val;
}
echo stativbariable();
echo "<br/>";
echo stativbariable();
echo "<br/>";


$num=20;
$num2=50;
function myval(&$num){
    $num=40;
    echo $num;
}

echo "this is first value from global {$num}";
echo "<br/>";
echo "this is second value from global {$num2}";
echo "<br/>";
myval($num2);
echo "<br/>";
echo "this is second value form global {$num}";
echo "<br/>";
echo "this is second value from global {$num2}";
echo "<br/>";

echo "<hr/>";

$num=20;
function myval1(&$val){
    $val=40;
    echo $val;
}

echo "this is first value from global {$num}";
echo "<br/>";
myval($num);
echo "<br/>";
echo "this is second value form global {$num}";
echo "<br/>";





?>