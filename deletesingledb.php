<?php


define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","dbone");

function dbconnection(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno() > 0){
        die("Connection failed");
    }else{
        return $db;
    }
}

function singledelete($id){
    $database = dbconnection();
    $query = "DELETE FROM users WHERE id=$id";
    $result = mysqli_query($database,$query);
    if($result){
        echo "Deleteed Id number ${id}";
    }
}
singledelete(5);


// beautyprint(dbconnection());
function beautyprint($array){
    echo "<pre>".print_r($array,true)."</pre>";
}






?>