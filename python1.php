<?php
include ("func1.php") ; 
session_start();
$table="python";
$user=$_SESSION["username"];
enroll($user,$table);
header("Location: http://localhost/Webcoursera/home.php");
exit();
?>
