<?php
$myarr1 = ["red","black","white","green","blue"];

function myfun($value,$key){
    echo "key is = ${key} and Value is = ${value}"."<br/>";
}
echo "This is array walk by manual array". "<br/>";
array_walk($myarr1,"myfun");
echo "<br/>";
$myarr2 = ["name"=>"aung aung","age"=>"30","city"=>"mandalay","phone"=>"09955780122"];

echo "This is array walk by associate array"."<br/>";
array_walk($myarr2,"myfun");
echo "<br/>";

$myarr3 = [
    ["name"=>"aung aung","age"=>"30","city"=>"mandalay","phone"=>"09955780122"],
    ["name"=>"aung aung","age"=>"30","city"=>"mandalay","phone"=>"09955780122"],
    ["name"=>"aung aung","age"=>"30","city"=>"mandalay","phone"=>"09955780122"],
];
function myfun2($val,$key){
    foreach($val as $key=>$value){
        echo "Key is = ${key} and Value is ${value}"."<br/>";
    }
}
echo "THis is array walk by multdemissional array". "<br/>";
array_walk($myarr3,"myfun2");