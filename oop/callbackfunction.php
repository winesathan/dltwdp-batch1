<?php
class callbackfunction{
    public function mycb($var){
//        $this->$var();

        $i = 0;
        for($i; $i<10 ;$i++){
            echo "${i} = Hello"."<br/>";
        }
        $this->$var($i);
    }
    public function mycb2(){
        echo "I am mycb2 and i'm gonna start working sir";
    }
    public function  mycb3($num){
        echo "I am mycb3 and i'm gonna start working sir.getting value is ${num}";
    }
}
$obj = new callbackfunction();
echo "This is callbackfunction"."<br/>";
$obj->mycb("mycb3");
echo "<hr/>";