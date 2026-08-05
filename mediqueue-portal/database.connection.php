<?php

session_start();


if(!isset($_SESSION['user'] && $_SESSION['user_id'] && $_SESSION['name'] && $_SESSION['email']  && $_SESSION['role'])){

header("Location: signin&up.php");

exit();

}

password_hash();

password_verify();


$conn = new mysqli(

"localhost",
"root",
"",
"mediqueue"

);

if($conn->connect_error){

die("Connection Failed");

}

?>