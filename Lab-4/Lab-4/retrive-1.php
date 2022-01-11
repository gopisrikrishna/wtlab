<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "wtlab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($conn === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM logintable";
if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) >0){
echo "<table>";
echo "<tr>";
echo "<th>name</th>";
echo "<th>username</th>";
echo "<th>password</th>";
echo "</tr>";
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "</tr>";
}
echo "</table>";
// Free result set
mysqli_free_result($result);
} else{

echo "No records matching your query were found.";
}
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$conn->close();
?>
</body>
</html>