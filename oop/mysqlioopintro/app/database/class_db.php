<?php
namespace app\database;
class class_db
{
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "dbone";

    private $database;

    public function __construct()
    {
        $this->database = new \mysqli(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);

    }

    public function getallusers()
    {
        $stmt = $this->database->query("SELECT * FROM users");
//        while ($row = $stmt->fetch_array()){
//            echo "id is". $row["id"] . "and email is". $row["email"]."<br/>";
//        }
        while ($row = $stmt->fetch_object()) {
            echo "id is =  " . $row->id . " and email is = " . $row->email . "<br/>";
        }

    }

    public function getsguser($id)
    {
        $stmt = $this->database->prepare("SELECT * FROM users WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($id, $email, $password, $status_id, $created_at);

        while ($stmt->fetch()) {
            echo "this is single user , id is = ${id} and email is = ${email} " . "<hr/>";
        }
    }

    public function getusersbystatus($status)
    {
        $stmt = $this->database->prepare("SELECT * FROM users WHERE status_id=?");
        $stmt->bind_param("i", $status);
        $stmt->execute();
        $stmt->bind_result($id, $email, $password, $status_id, $created_at);

        while ($stmt->fetch()) {
            echo "this is ${status} , id is = ${id} and email is = ${email} " . "<hr/>";
        }

    }


public function insertmultiusers($users){
        $crtdate = date("Y-m-d");
        $stmt = $this->database->prepare("INSERT INTO users (email,password,status_id,created_at) VALUES (?,?,?,?)");
          foreach ($users as $user){
              $stmt->bind_param("ssis",$user[0],$user[1],$user[2],$crtdate);
              $result = $stmt->execute();
              $lstinsert = $stmt->insert_id;

              if($result){
                  echo "Date Insert Successfully = id ${lstinsert}";
              }else{
                  echo "Insert Failed". "<br/>";
              }
          }
        }

}