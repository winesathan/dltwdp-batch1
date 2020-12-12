<?php

// 1 Jan 1970

// $time = time();
// echo $time;

//cookie
// setcookie(name,value,expiretime,path,domain,security)


// function setmycookie(){
// 	return setcookie("job1","we have to hire programmer",time()+2000,"/","",0);


// }
// setmycookie();
// echo "successful setcookie";
// echo "<br/>";
 function deletecookie(){
 	if(isset($_COOKIE["job1"])){
 		return setcookie("job1","",time()-2000,"/","",0);
 	}else{
 		echo "there is no cookie sir";
 	}
 }
 deletecookie();


 function getmycookie(){
	 if(isset($_COOKIE["job1"])){
		 return $_COOKIE["job1"];
	 }else{
		 return "There is no cookie sir, key number job1 is not exists sir";
	 }
 }
echo getmycookie();

?>