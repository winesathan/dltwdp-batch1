<?php
namespace app;
class class_public{
    public function __construct(){
        echo "Hello i am from public "."<br/>";
    }
    public function myfun(){
        echo "Hello i am myfun from public"."<br/>";
    }
    public function mydate(){
        $getdate = new \DateTime();
        var_dump($getdate);
    }
}