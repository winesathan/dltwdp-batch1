<?php
require_once "autoload/autoload.php";
class index{
    public function __construct(){
        autoload::myload("admin/class_admin");
        $admin = new class_admin();
        echo"<br/>";
        autoload::myload("auth/class_auth");
        $auth= new class_auth("aungaung","032145697");
        echo "<br/>";
        $auth->accessinfo();
    }
}
$obj = new index();