<?php
function updatedb($tablename,$vno){
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webcoursera";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    session_start();
    $user = $_SESSION["username"];
    echo $tablename . " " . $vno ;
    $sql = "UPDATE ". $tablename. " SET ". $vno . "='0' WHERE `username` ='$user' ";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }
      
      $conn->close();

}?>