<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RegistrationForm</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous">
<link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container">
<header>
<a href="index.html" target="_blank"><imgsrc="images/logo-adare-restaurant.png"
alt="logo"></a>
</header>
<nav>

<a href="home.html">Home</a>
<a href="login.html">Login</a>
<a href="registration.html">Registration</a>
<a href="catalogue.html">catalogue</a>
<a href="#">cart</a>
<a href="#">ContactUs</a>
</nav>
</div>
<div class="container">
<form class="row g-3" action="insert_query.php" method="post">
<div class="row g-3">
<div class="col">

<input type="text" name="firstName" class="form-control" placeholder="First name" aria-
label="First name">

</div>
<div class="col">

<input type="text" name ="lastName" class="form-control" placeholder="Last name" aria-
label="Last name">

</div>
</div>
<div class="col-md-6">
<label for="inputEmail4" class="form-label">Email(username)</label>
<input type="email" name="email" class="form-control" id="inputEmail4">
</div>
<div class="col-md-6">
<label for="inputPassword4" class="form-label">LoginPassword</label>
<input type="password" name="password" class="form-control" id="inputPassword4">
</div>
<div class="col-12">
<label for="inputAddress" class="form-label">Address</label>

<input type="text" name="address" class="form-control" id="inputAddress"
placeholder="1234 Main St">
</div>
<div class="col-12">
<label for="inputAddress2" class="form-label">Address 2</label>
<input type="text" name="address2" class="form-control" id="inputAddress2"
placeholder="Apartment, studio, or floor">
</div>
<div class="col-md-6">
<label for="inputCity" class="form-label">City</label>
<input type="text" name="city" class="form-control" id="inputCity">
</div>
<div class="col-md-4">
<label for="inputState" class="form-label">State</label>
<select id="inputState" name="state" class="form-select">
<option selected>Andhra Pradesh</option>
</select>
</div>
<div class="col-md-2">
<label for="inputZip" class="form-label">Zip</label>
<input type="text" class="form-control" id="inputZip">
</div>
<div class="col-12">
<div class="form-check">
<input class="form-check-input" type="checkbox" id="gridCheck">
<label class="form-check-label" for="gridCheck">
Check me out
</label>
</div>
</div>
<div class="col-12">

<button type="submit" class="btnbtn-primary">Sign in</button>
</div>
</form>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>insertQuery</title>
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
die("ERROR: Could not connect." . mysqli_connect_error());
}
$sql = "INSERT INTO logintable (name, username, password) VALUES (?, ?, ?)";
if($stmt = mysqli_prepare($conn, $sql)){
//$conn->prepare($sql)

// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "sss", $name, $email, $login_password);
}
$name = $email = $login_password = " ";
$name = $_POST["lastName"];
$email = $_POST["email"];
$login_password = $_POST["password"];
mysqli_stmt_execute($stmt);

echo "<h1>record inserted succfully</h1>";
?>
</body>
</html>