<?php


// $arr = ["red","green","yellow","black"];
// var_dump($arr);
// echo "<hr/>";
// print_r($arr);
// echo "<hr/>";
// echo "<pre>" . print_r($arr,true). "</pre>";

// beautyprint($arr);

// $arr2 =["red","green","yellow","black"];
// beautyprint($arr2);

// $arr3 = [
//     ["mg mg","ag ag","zaw zaw","kyaw kyaw"],
//     ["su su","mya mya","hla hla","kyw kyw"],
//     ["mg mg","ag ag","zaw zaw","kyaw kyaw"],
// ];
// beautyprint($arr3);

// $myarr2=[
//     ["name"=>"maung maung","age"=>20,"adress"=>"mandalay","phone"=>"09955780122"],
//     ["name"=>"zaw zaw","age"=>20,"adress"=>"yangon","phone"=>"09955780122"],
//     ["name"=>"kyw kyw","age"=>20,"adress"=>"Pyin oo lwin","phone"=>"09955780122"]
// ];

// $arrjson = json_encode($myarr2);
// beautyprint($arrjson);

$file = "myjson.json";
if(file_exists($file)){
    $handler =fopen($file,"r");
    $filesize = filesize($file);
    $fileread = fread($handler,$filesize);
    $jsontoarray = json_decode($fileread); //Json object to array
    beautyprint($jsontoarray);
}

foreach($jsontoarray as $array){
    foreach($array as $key=>$value){
        echo "key is ${key}" . "value is ${value}". "<br/>"; 
    }
}

// Constants value

define("name","aung aung");
echo name;
echo "<br/>";
define("age",26);
echo age;
echo "<br/>";
define("colors",["black","white","red"]);
echo colors[2];




//Custom Reuseable Function
function beautyprint($array){
    echo "<pre>" . print_r($array,true) . "</pre>";
}


?>