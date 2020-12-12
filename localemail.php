<?php


$to = "aungaung@localhost,susu@localhost,myamya@localhost,maungmaung@localhost";
$subject = "Happy Birthday";
$message = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s";
$header = "From: sale@dlt.com\r\n"."Content-Type:text/html";


// \r Enter
// \n line break
function sendmail($to,$sbj,$msg,$header){
    $mail =mail($to,$sbj,$msg,$header);

    if($mail){
        echo "Send Successful";
    }else{
        echo "Send Failed";
    }
}

// sendmail($to,$subject,$message,$header)

$myarrs = [
    ["id"=>1,"email"=>"aungaung@localhost","password"=>"123456789"],
    ["id"=>2,"email"=>"maungmaung@localhost","password"=>"123456789"],
    ["id"=>3,"email"=>"susu@localhost","password"=>"123456789"],
    ["id"=>4,"email"=>"myamya@localhost","password"=>"123456789"],
];
//Multi Send

foreach($myarrs as $data){
    $to = $data["email"];
    sendmail($to,$subject,$message,$header);
}


?>


<!-- mail(to,subject,message,header,parameter); 

to = who?
subject = title
message = description (text/plain or text/html)
header = from(text/plain or text/html)
parameter = reply/foward -->