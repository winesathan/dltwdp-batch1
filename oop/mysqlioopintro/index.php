<?php
require_once "vendor/autoload.php";
class index{
    private $db;

    public function __construct(){
        $this->db = new \app\database\class_db();
        $this->db->getallusers();
        $this->db->getsguser(3);
        $this->db->getusersbystatus(1);

        $user=[
            ["lolo@gmail.com","123456",1],
            ["zolo@gmail.com","123456",1],
            ["loxlo@gmail.com","123456",1],
            ["lopplo@gmail.com","123456",1],
        ];
        $this->db->insertmultiusers($user);
    }
}
$obj = new index();