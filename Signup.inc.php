<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webcoursera";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$options = [
    'cost' => 12,
];
$hashed_password= password_hash($password, PASSWORD_BCRYPT, $options);

$sql = "SELECT * FROM auth where username='$username'";
$result1 = $conn->query($sql);

$sql = "SELECT * FROM auth where email='$email'";
$result2 = $conn->query($sql);

$sql = "SELECT * FROM auth where mobile='$mobile'";
$result3 = $conn->query($sql);

if($result1->num_rows>0)
{
  echo "<script type=\"text/javascript\"> alert('Already a user exist with same username');</script>";
  echo "<script>setTimeout(\"location.href = 'Signup.php';\",500);</script>";
}

if($result2->num_rows>0)
{
  echo "<script type=\"text/javascript\"> alert('Already a user exist with same email id');</script>";
  echo "<script>setTimeout(\"location.href = 'Signup.php';\",500);</script>";
}

if($result3->num_rows>0)
{
  echo "<script type=\"text/javascript\"> alert('Already a user exist with same mobile number');</script>";
  echo "<script>setTimeout(\"location.href = 'Signup.php';\",500);</script>";
}

if($result1->num_rows==0 && $result2->num_rows==0 && $result3->num_rows==0)
{
  $sql = "INSERT INTO auth VALUES('$firstName', '$lastName', '$username','$hashed_password','$email','$mobile')";


  if ($conn->query($sql) === TRUE) {
    echo "<script type=\"text/javascript\"> alert('Successfully regitered to Webcoursera');</script>";
    echo "<script>setTimeout(\"location.href = 'Login.php';\",500);</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}

$conn->close();
?>
