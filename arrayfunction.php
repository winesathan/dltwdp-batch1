<?php



// Array Function

$arr = ["orange","red","blue","green","black"];

// echo count($arr);      

// array_push($arr,"yellow","white","gray");

// array_pop($arr);

// array_shift($arr);

array_unshift($arr,"yellow");
beautyprint($arr);




function beautyprint($arr){
    echo "<pre>". print_r($arr,true) ."</pre>";
}






?>