<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signupdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM signupform";
$result = mysqli_query($conn, $sql);

if ($result) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo $row["email"]. " " . $row["password"]. "<br>";
  }
} else {
  echo "invalid email/password";
}
mysqli_close($conn);
?>
<?php include 'login5.html';
$email = $_POST['mail'];
$pwd = $_POST['pass'];

$hostname = "localhost";
$username = "root";
$password = "";
$db = "logindata";

// Create connection
$conn = mysqli_connect($hostname, $username, $password,$db);
/*if($conn){
    echo "connected successfully";
}
else{
    mysqli_connect_error();
}*/
//insertion
$ins = "INSERT INTO loginform(email,password)VALUES('$email','$pwd')";
$result = mysqli_query($conn,$ins);
if($result)
{
    $_SESSION["email"]=$row['email'];
    $_SESSION["password"]=$row['password'];
}
else
{
    echo "Invalid Email ID/Password";
}

?>
