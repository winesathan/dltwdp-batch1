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
//Query
// $query = "SELECT * FROM users WHERE id=5";search box mr use tl
// $query = "SELECT * FROM users WHERE id!=5";
// $query = "SELECT * FROM users WHERE id>5";
// $query = "SELECT * FORM user ORDER BY id DESC";
// $query = "SELECT * FORM user ORDER BY id ASC";
// $query = "SELECT * FORM user ORDER BY email DESC";
// $query = "SELECT * FORM user ORDER BY email ASC";
// $query = "SELECT * FROM users WHERE id<5";
// $query = "SELECT * FROM users WHERE id < 5 ORDER BY id DESC";

$query = "SELECT * FROM users";

function executequery($qry){
    $database = dbconnection();
    $results = mysqli_query($database,$qry);
    //FOR EACH LOOPING
    // if(mysqli_num_rows($results) > 0){
    //     foreach($results as $result){
    //         echo  "Key is ${result['id']}"." "."Value is ${result['email']}";
    //         echo "<br/>";
    //     }
    // }else{
    //     echo "No data";
    // }

    //WHILE LOOP
    // if(mysqli_num_rows($results)){
    //     while($row = mysqli_fetch_assoc($results)){
    //         echo "Email is".$row["email"]."<br/>";
    //     }
    // }else{
    //     echo "No data";
    // }

    //For Loop
    // if(mysqli_num_rows($results) > 0){
    //     $i = 0;
    //     for($i; $i < mysqli_num_rows($results); $i++){
    //         $row = mysqli_fetch_assoc($results);
    //         echo "ID is ${row['id']}" . " Email is ${row['email']}". "<br/>";
    //     }
    // }else{
    //     echo "No Data";
    // }
    // if(mysqli_num_rows($results) > 0){
    //     $k = 0;
    //     $numrow = mysqli_num_rows($results);
    //     while($numrow > $k){
    //         $row = $mysqli_fetch_assoc($results);
    //         echo "ID is ${row['id']}" . " Email is ${row['email']}". "<br/>";
    //         $k++;
    //     }
    // }


}
executequery($query);
// beautyprint(dbconnection());
function beautyprint($array){
    echo "<pre>".print_r($array,true)."</pre>";
}






?>