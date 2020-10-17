<?php

$arr=[]; //declear

$num=[];
$num[0]="Maung Maung";
$num[1]="Aung Aung ";
$num[2]="Ko Ko";
$num[3]="Zaw Zaw";
$num[4]="Mya Mya";

echo $num[3];
echo "<hr/>";

$arr=["name"=>"Maung Maung","age"=>"25"];

$color=[];
$color["one"]="red";
$color["two"]="blue";
$color["three"]="black";
$color["four"]="white";
$color["five"]="green";

echo $color["two"];
echo "<hr/>";


$arr=[["name"=>"Maung Maung","age"=>"20"]];

$x[0]["name"]="maung maung";
$x[0]["age"]="20";
$x[1]["name"]="Aung Aung";
$x[1]["age"]="30";

echo $x[1]["name"];


?>