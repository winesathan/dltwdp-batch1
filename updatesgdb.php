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

// function singleupdate($id,$email,$password){
//     $database = dbconnection();
//     $query = "UPDATE users SET email = '$email',password = '$password' WHERE id=$id";
//     $results = mysqli_query($database,$query);
//     if($results){
//         echo "Updated id =".$id;
//     }
// }
// singleupdate(1,"winesathan42@gmail.com","124567");

function singleupdate($id,$password){
    $database = dbconnection();
    $query = "UPDATE users SET password = '$password' WHERE id=$id";
    $results = mysqli_query($database,$query);
    if($results){
        echo "Updated id =".$id;
    }
}
singleupdate(1,"qwert"); 

// beautyprint(dbconnection());
function beautyprint($array){
    echo "<pre>".print_r($array,true)."</pre>";
}






?>