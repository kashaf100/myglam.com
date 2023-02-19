<?php include 'signup5.html';
$email = $_POST['mail'];
$pwd = $_POST['pass'];
$addr1 = $_POST['add1'];
$addr2 = $_POST['add2'];
$city = $_POST['cityname'];
$zip = $_POST['zipcode'];

$hostname = "localhost";
$username = "root";
$password = "";
$db = "signupdata";

// Create connection
$conn = mysqli_connect($hostname, $username, $password,$db);
/*if($conn){
    echo "connected successfully";
}
else{
    mysqli_connect_error();
}*/
//insertion
$ins = "INSERT INTO signupform(email,password,address1,address2,city,zipcode)VALUES('$email','$pwd','$addr1','$addr2','$city','$zip')";
$result = mysqli_query($conn,$ins);
/*if($result){
    echo "inserted successfully";
}
else{
    echo mysqli_connect_error();
}*/




?>