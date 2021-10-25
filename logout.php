<?php
session_start();
$_SESSION["logg"] = "0";
header("Location: http://localhost/Webcoursera-main/home.php");
exit();
?>