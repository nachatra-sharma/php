<?php 

$str = "Nachatra";

$password = md5($str); // message digest algorithm

if($password === "2b906989bfe5027cfbb23b0c2d434615"){
    echo "Password Matched </br>";
}else {
    echo "Password Wrong </br>";
}

$str2 = "Sharma"; 

$passwd = sha1($str2); // US Secure Hash Algo

// echo $passwd;

if($passwd === "32d87e530db0deef44c2429f4f47a6ca537a746e") {
    echo "Password Matched <br>";
}else {
    echo "Password not matched <br>";
}