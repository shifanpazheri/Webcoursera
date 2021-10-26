<?php

function online($table){
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
    
    $user = $_SESSION["username"];
    
    $sql = "SELECT COUNT(DISTINCT( username )) AS A FROM ".$table."  ";

    $result = $conn->query($sql) ;
  
    $a=-1;
    if($row = $result->fetch_assoc()){
        $a=$row["A"];
    }
    else{$a=0;}
    echo $a;
    $conn->close();
    

}

function enroll($user,$table){
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
    
    $sql = "INSERT INTO `courses` VALUES('$user','$table')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }

    if($table === "java"){
        $sql = "INSERT INTO ".$table." VALUES('$user','0','0','0','0','0','0','0','0','0','0')";
      }
      else if( $table === "python"){
        $sql = "INSERT INTO ".$table." VALUES('$user','0','0','0','0','0','0','0','0','0')";
        }
  
      else{
        $sql = "INSERT INTO ".$table." VALUES('$user','0','0','0','0','0','0','0','0')";
      }
     
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }
      
      
    $conn->close();
  
}

function checkenroll($tablename,$user){
    
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
    
    $user = $_SESSION["username"];
    
    $sql = "SELECT * from  ". $tablename. " WHERE `username` ='$user' ";
    
    $a=-1;
    if ($conn->query($sql)->num_rows >0) {
        $a= 1;
      } else {$a=0;
      }
    
    $conn->close();
    return $a;
}?>
