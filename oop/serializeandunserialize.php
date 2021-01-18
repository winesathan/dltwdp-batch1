<?php
$myarr = ["red","blue","green","black","white","orange"];
echo "Thi si serialize and unserialize for array"."<br/>";

beautyprint($myarr);

//Serialize

$slz = serialize($myarr);
//var_dump($slz);
//echo "$slz";

$unslz = unserialize(($slz));
beautyprint($unslz);


function beautyprint($arr){
    echo "<pre>".print_r($arr,true)."</pre>";
}