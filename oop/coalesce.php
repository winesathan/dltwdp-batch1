<?php
function mycol(...$var){
//    $var = ["maungmaung","aungaung","zawzaw"]
    echo $var[0][1] ?? "You are trying to print out without argument". "<br/>";
}
//mycol(["aungaung","maungmaung","zawzaw"],"you are my first love","hay");
mycol();
echo"<hr/>";