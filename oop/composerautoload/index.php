<?php
//require_once "admin/class_admin.php";
//require_once "auth/class_auth.php";
require_once "vendor/autoload.php";
class index{
    public function __construct(){

        $admin = new class_admin();

        $auth= new class_auth("aungaung","032145697");
        echo "<br/>";
        $auth->accessinfo();

        $migration = new class_migration();

        $news = new class_news();

        $ebook = new class_ebook();
    }
}
$obj = new index();