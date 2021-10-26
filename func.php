<?php

function checkdb($table, $conn,$user){
  
  $sql = "SELECT * from ". $table." WHERE `username` ='$user' ";  
  
  $result = $conn->query($sql);
  if ($result->num_rows>0) {
    $row = $result->fetch_assoc();
    $flag=0;
    if($table === "java"){
      for ($x = 1; $x <= 10; $x++) {
        if($row["v".$x]==0)
        { $flag=1;
          break;
        }
      }
    }
    else if( $table === "python"){
      for ($x = 1; $x <= 9; $x++) {
        if($row["v".$x]==0)
        { $flag=1;
          break;
        }
      }

    }else{
      for ($x = 1; $x <= 8; $x++) {
      if($row["v".$x]==0)
        { $flag=1;
          break;
        }
      }

    }
    

    
    if($flag == 0){                 
$sql = "DELETE from ".$table." WHERE `username` ='$user'" ;  
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }
      
    }
    
  }
} 


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
    $sql = "UPDATE ". $tablename. " SET ". $vno . "='1' WHERE `username` ='$user' ";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }
      
    checkdb($tablename,$conn,$user);


      $conn->close();



}?>
