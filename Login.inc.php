<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webcoursera";

session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];


/*echo $username;
echo "<br>";
echo $password;
echo "<br>";*/

$sql = "SELECT * FROM auth where username='$username'";
$result = $conn->query($sql);

//echo $result->num_rows;

if ($result->num_rows == 1) {
  // output data of each row
  $row = $result->fetch_assoc();
  if(password_verify($password,$row["password"]))//Take care
  {
      echo "<script type=\"text/javascript\"> alert('Sucessfully logged in');</script>";
      echo "<script>setTimeout(\"location.href = 'home.php';\",500);</script>";
  }
  else {
     echo "<script type=\"text/javascript\"> alert('Wrong password');</script>";
     echo "<script>setTimeout(\"location.href = 'Login.php';\",500);</script>";
  }
}
else {
  echo "<script type=\"text/javascript\"> alert('Invalid username');</script>";
  echo "<script>setTimeout(\"location.href = 'Login.php';\",500);</script>";
}

$conn->close();
?>
