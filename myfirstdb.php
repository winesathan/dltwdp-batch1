<?php

//Creat DB Access
define("DB_HOST","localhost");
define("DB_NAME","dbone");
define("DB_USER","root");
define("DB_PASS","");

//Connection to DB and check error
        //mysqli_connect(host,username,password,dbname);
        function dbconnection(){
            $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
            // echo mysqli_connect_errno() > 0 ? "Connection Error" : "Connection Success";
            if(mysqli_connect_errno() > 0){
                die("Connection Failed");
            }else{
                return $db;
            }
        }


//2 Query ( Table )
$query = "SELECT * FROM users";
function excutequery($qry){
    //1 Database ( Successful )
$database = dbconnection();

//3 Connect to Database and Query
// mysqli_query("database","query");
$results = mysqli_query($database,$qry);

// beautyprint($results);
if(mysqli_num_rows($results) > 0){
    foreach($results as $result){
        foreach($result as $key=>$value){
            echo "Key is = ${key}" . "Value is = ${value}" . "<br/>";
        }
    }
}else{
    echo "No data";
}



}
excutequery($query);

?>