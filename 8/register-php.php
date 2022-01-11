<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistrationForm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <header>
           <a href="index.html" target="_blank"><img src="images/logo-adare-restaurant.png" alt="logo"></a>
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
    <div class="container-fluid">
    <form class="row g-3" action="" method="POST">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="email">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4" name="password">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address"> 
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Address 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address1">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity" name="city">
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" class="form-select" name="state">
            <option selected>Choose...</option>
            <option>Andhra Pradesh</option>
            <option>Madhya Pradesh</option>
            <option>Utter Pradesh</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="text" class="form-control" id="inputZip" name="zip">
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
          <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
        </div>
      </form>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php

$servername="localhost";
$username="root";
$password="";
$dbname="wt";

$con= new mysqli($servername,$username,$password,$dbname);
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$pass=$_POST['password'];
$addr=$_POST['address'];
$addr1=$_POST['address1'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$sql="insert into logintable values('$email','$pass','$addr','$addr1','$city','$state','$zip')  ";
if($con->query($sql)==true)
    echo "Registration successful";
else
    echo "Insert failed";
}else{
$sql="select * from logintable";
$res=$con->query($sql);

if($res->num_rows>0)
{ echo "<table><tr><td>Email</td><td>Password</td></tr>";
  while($row=$res->fetch_assoc())
  {
    echo "<tr><td>".$row['email']."</td><td>".$row['password']."</td></tr>";
  }
  echo "</table>";
}
else{
  echo "<h1>No values</h1>";
}

}
?>