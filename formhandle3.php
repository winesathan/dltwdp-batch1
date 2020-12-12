<?php

if(isset($_POST["login"])){
    $username=$_POST["username"];
    $password=$_POST["pwd"];
    if ($username == "aung aung" && $pwd="123456"){
        header("Location:https://facebook.com");
        exit();
    }else{
        echo "Username and password do not match";
    }


}
echo "<hr/>";

?>

<!DOCTYPE html>
<html>
<head>
<title>Form Handeling 1</title>
<link rel="icon" href="../css/img/icon1.png" type="image/png">
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
<table>
<thead>
<tr>
<th colspan="2">Login Form</th>
</tr>
</thead>
<br/>
<tbody>
<tr>
<td><label for="username">Username</label></td>
<td><input type="text" name="username" id="username" class="">
</td>
</tr>
<br/>
<br/>
<tr>
<td><label for="pwd">Password</label></td>
<td><input type="password" name="pwd" id="pwd" class=""></td>
</tr>
</tbody>
<br/>
<tfoot>
<tr>
<td colspan="2" align="right"><input type="reset" name="reset" id="reset" class="" value="reset">
<input type="submit" name="login" id="login" class="" value="login"></td>
</tr>

</tfoot>
</table>








</form>
</body>
</html>