<?php
require_once "vendor/autoload.php";
class index{
    public function __construct(){
        $admin = new \app\admin\class_admin();
        $admin->mydate();
        echo"<br/>";
        $auth = new \app\auth\class_auth("aungaung","123456789");
        $auth->accessinfo();
        echo"<br/>";
        $site = new \site\news\class_news();
    }
}
$obj = new index();