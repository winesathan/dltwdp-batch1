<?php
namespace app\admin;
class class_admin{
    public function __construct(){
        echo "I am admin"."<br/>";
    }
    public function mydate(){
        $getdate = new \DateTime();
        var_dump($getdate);
    }
}