<?php

$val="white";
$vbl=$val;

echo $vbl;//abvr val

echo "<hr/>";

if($vbl == "red"){
    #using rf variable
 echo "my fav color is red";
}else{
    echo "your fav color is not red";
}

echo "<hr/>";

if($val=="red"){
    echo "my fav color is red"." "."input value is " . $val;
}else{
    echo "my fav color is red "."but input value is " . $val;
}

echo "<hr/>";

/*
this is command line1
this is command line2
this is command line3
this is command line4
*/

if($val=="red"){
     echo "value color is ". $val;
}elseif($val=="white"){
      echo "value color is ". $val;
}else{
      echo "your color is ". $val;
}

echo "<hr/>";
//logical operator
$num1=10;
$num2=20;
$num3=0;

if($num1 > $num2 || $num1 > $num3){
   echo "true";
}else{
    echo "false";
}
echo "<hr/>";

if($num1 > $num2 && $num1 > $num3){
    echo "true";
}else{
    echo "false";
}

echo "<hr/>";

switch ($num1) {
    case "10":
        echo "input value is ". $num1;
        break;
    case "20":   
        echo "input value is ". $num1;
    break;
    default:
        echo "input value is not 10 and 20 ". $val1;
        break;
}

?>