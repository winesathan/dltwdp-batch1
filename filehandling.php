<?php

// Create File
// $file="fileserver/logs/test1.txt";
// $handler=fopen($file,"w");
// echo "file created";

//read file

//method 1 (Binary Data Return, limited characters)
// $file="fileserver/logs/test1.txt";
// $handler=fopen($file, "r");

// //length

// $filesize=filesize($file);
// $data=fread($handler, $filesize);
// echo "$data";


//method2 (string data return , no limit)

// $file="fileserver/logs/test1.txt";

// if (file_exists($file)) {
// 	$data=file_get_contents($file);
// echo "$data";

// }else{
// 	echo "No file exists";
// }


//write

// $file="fileserver/logs/text1.txt";
// $handler=fopen($file, "w");

// fwrite($handler, "I love Mandalay");
// fclose($handler);
// echo "Successful write";

//Appending
$file="fileserver/logs/text1.txt";
$handler=fopen($file, "a");
$message1= "I love Indonesia";
$message2= "I love Srilanka";
fwrite($handler, $message1);
fclose($handler);
echo "Successful Appending";



?>