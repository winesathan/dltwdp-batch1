<?php
//Regular Function - manual function
function regfun1(){
    echo "this is regular manual function";
}
regfun1();
echo "<br/>";

//Anonymous Function  (Name Less Function)
$anonfun1 = function(){
    echo "this is anno function";
};
$anonfun1();

//Anonymous Function (Name less Function ) - single
$anonfun2 = function($name){
    echo "this is anno function .getting value is ${name}"."<br/>";
};
$anonfun2("aung aung");
$anonfun3 = function($name,$age){
    echo "this is anno function .getting value is ${name}.his or her age is ${age}"."<br/>";
};
$anonfun3("aung aung",30);
echo "<hr/>";

//lamda style
function mycal($num1,$num2,$onefun){
    $total = $num1+$num2;
    $onefun($total);
}
$fun = function($result){
    echo "Total result is = ${result}";
};

mycal(100,200,$fun);

// Closure Function
$num1 = 300; //Global Variable
$num2 = 400; //Global Variable
function getglo(){
    global $num1;
    global $num2;
    echo "This is regular function . my getting value is ${num1}";

}
getglo();

$clofun = function() use($num1){
    echo "This is closure function . my getting value is ${num1}";
};
$clofun;
//Dynamic Function
//Manual FUnction
$dynfun1 = create_function('','echo "this is dynamic function"."<br/>";');
$dynfun1();

//single function
$dynfun2 = create_function('$num','echo "the value of dynamic function is ${num}"."<br/>";');
$dynfun2(130);

//Multi funciton
$dynfun3 = create_function('$num1,$num2','echo "this is value of dynamic num1 is ${num1}"."Second value is ${num2}"."<br/>";');
$dynfun3(234,556);
echo "<hr/>";
?>