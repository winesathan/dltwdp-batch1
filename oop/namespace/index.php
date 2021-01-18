<?php
date_default_timezone_set("Asia/Yangon");
require_once "app/class_public.php";
require_once "app/admin/class_admin.php";
class index{
    public function __construct()
    {
        $public = new app\class_public();
        $public->myfun();
        $public->mydate();
        $admin = new app\admin\class_admin();
    }

}
$obj = new index();