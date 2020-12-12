<?php

//Default Function

// Number Format
$num = 1230000;
echo number_format($num);
echo "<hr/>";
echo number_format($num,"2");
echo "<br/>";
echo number_format($num,"0");
echo "<br/>";
echo number_format($num,"0",".","-");
echo "<br/>";

//chunk-split ( String Type = Serial Number)
$b="Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
$ph ="09955780122";
echo chunk_split($b,5,"/");
echo "<br/>";
echo chunk_split($ph,3,"-");
echo "<br/>";

// lcfirst
echo lcfirst("This is lcfirst = Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
echo "<br/>";

//ucwords
echo ucwords("This is ucwords = Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
echo "<br/>";

//strtoupper
echo strtoupper("This is strtoupper = Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
echo "<br/>";
//strtolower
echo strtolower("This is strtolower = Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
echo "<br/>";

//strlen
echo strlen("Aung Aung");
echo "<br/>";

$name= "/ aung aung / mg mg / kyw kyw /";
echo strlen($name);
echo "<br/>";

echo $name;
echo "<br/>";

//trim
echo trim($name,"/");
echo "<br/>";
echo strlen(trim($name));
echo "<br/>";

// ltrim left
echo strlen(ltrim($name));
echo "<br/>";
echo ltrim("/ aung aung /","/");
echo "<br/>";

// rtrim right
echo strlen(rtrim($name));
echo "<br/>";
echo rtrim("/ aung aung /","/");
echo "<br/>";

//start crypt
//MD5 true = raw 16 chars binary format , false = raw 32 chars hax number
$password = "123456";
echo md5($password);
echo "<br/>";
echo md5($password,true);
echo "<br/>";
echo md5($password,false);
echo "<br/>";



// SHA1 true = raw 20 chars binary format , false = raw 40 chars hax number

echo sha1($password);
echo "<br/>";
echo sha1($password,true);
echo "<br/>";
echo sha1($password,false);
echo "<br/>";
//crypt hashed codes string DES(Data encryption Standard)
echo crypt($password,false);
echo "<br/>";

echo md5(sha1(crypt($password,"dlt")));
echo "<br/>";

$z = "I love mandalay, because mandalay is my hometown";
echo strpos($z,"mandalay");
echo "<br/>";
echo strrpos($z,"mandalay");
echo "<br/>";
echo stripos($z,"Mandalay");
echo "<br/>";
echo strripos($z,"Mandalay");
echo "<br/>";
echo str_word_count($z);
echo "<br/>";
echo substr_replace("hello world","mandalay",6);
echo "<br/>";

// Array as object (json)
$myarr =["name"=>"maung maung","age"=>20,"adress"=>"mandalay","phone"=>"09955780122"];
echo json_encode($myarr);
echo "<br/>";
$myarr2=[
    ["name"=>"maung maung","age"=>20,"adress"=>"mandalay","phone"=>"09955780122"],
    ["name"=>"zaw zaw","age"=>20,"adress"=>"yangon","phone"=>"09955780122"],
    ["name"=>"kyw kyw","age"=>20,"adress"=>"Pyin oo lwin","phone"=>"09955780122"]
];
echo json_encode($myarr2);















?>