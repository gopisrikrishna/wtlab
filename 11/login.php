<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>loginpage</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous">
<link rel="stylesheet" href="main.css">

</head>
<body>
<header>

<a class="logo-img" href="#" target="_blank"><imgsrc="images/logo-adare-restaurant.png"
alt="logo"></a>
<h1>Login Here</h1>
</header>
<main>
<div class="container align-items-center">
<form action="" action="" method="POST">
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Email address</label>

<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-
describedby="emailHelp">

<div id="emailHelp" class="form-text">We'll never share your email with anyone
else.</div>
</div>
<div class="mb-3">
<label for="exampleInputPassword1" class="form-label">Password</label>
<input type="password" name="password" class="form-control"
id="exampleInputPassword1">
</div>
<div class="mb-3 form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck1">
<label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
<button type="submit" name="submit" class="btnbtn-primary">Submit</button>
</form>
</div>
</main>
</body>
</html>

<?php

if(isset($_POST['submit']))
{

$servername="localhost";
$username="root";
$password="";
$dbname="wt";

$con=new mysqli($servername,$username,$password,$dbname);
$e=$_POST['email'];
$p=$_POST['password'];
$sql="select * from logintable where email='$e' and password='$p' ";
$res=$con->query($sql);

if($res->num_rows>=1)
{
    echo "<h1>correct u/p</h1>";
    header("Location: home.html");
}
else{
echo "<h1>Incorrect u/p</h1>";
}

}
?>