<?php
//Function
// function functionname(){

//}

//simple function
function myfun(){
    echo "my name is function";
}
myfun();

echo "<hr/>";

function hellocal(){
    $num1=100;
    $num2=20;
    $cal=$num1/$num2 + 5+5;
    echo $cal;
}
hellocal();

echo "<hr/>";


//parameter passing to function
function singleparameter($name){
    echo "My name is {$name}";

}
singleparameter("aung aung");

echo "<hr/>";

//multiparameter passing to function
function multiparameter($name,$age){
    echo "My name is {$name}. My age is {$age}";
}
multiparameter("Mya Mya",20);

function multical($val1,$val2,$val3){
    $cal=($val1+$val2)*$val3;
    echo $cal;
}
multical(10,20,2);

echo "<hr/>";

//default parameter
function defaultparameter($name="Mya Mya"){
    echo "My name is {$name}";
}
defaultparameter();

echo "<hr/>";

function defaultpp($num1=20,$num2=10,$num3=3){
    $cal=($num1=$num2)/$num3;
    echo $cal;
}
defaultpp(40,20);

echo "<hr/>";

//return value
//simple function
function simplereturn(){
    return " my name is return function ";

}
echo simplereturn();

echo "<hr/>";
//parameter function
function singlereturn($num1){
    $cal=$num1+200;
    return $cal;

}
 echo singlereturn(40);
 //function abc(){
     // $val=10;
     //simplereturn(10)+$val;
     //}this is js type function for explain
     echo "<hr/>";
     
     function multireturn($num1,$num2,$num3){
         $cal=($num1+$num2)*$num3;
         return ($num1);
    }
    echo multireturn(10,20,40);

















?>