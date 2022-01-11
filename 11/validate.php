<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "wtlab";

// Create connection
$conn = new mysqli($serverName, $username, $password, $dbname);
// Check connection
if($conn === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}
$loginName =$_POST["email"];
$loginPassword = $_POST["password"];
// validation from DB

$sql = "SELECT * FROM logintable where username='$loginName'and
password='$loginPassword'";

$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
if($count == 1){
header("Location: home.html");
}
else{
echo "<h1> Login failed. Invalid username or password.</h1>";
}
?>
