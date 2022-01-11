<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_COOKIE['uname'])) {
  echo "Cookie named uname and upwd is set!";
  echo "<br>Value of cookie uname  : " . $_COOKIE['uname'];
  echo "<br>Value of cookie pwd  : " . $_COOKIE['upwd'];
} else {
  echo "Cookie is not set!<br><h1>Login here</h1>";
  

?>

    <h1 align="center">Login</h1>
    <form action="" method="POST">
        <table align="center" border=1>
            <tr>
                <td>Username</td>
                <td><input type="text" name="uname"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="upwd"></td>
            </tr>
            <tr>
                <td colspan=2 align="center"><input type="submit" value="submit" name="submit"></td>
            </tr>
        </table>
    </form>  
</body>
</html>
<!-- 
Create a database named "wt"
Create a table named userdball with two coloumns 'name' and 'pass'
-->
<?php
    $server="localhost";
    $user="root";
    $password="";
    $dname="wt";
    $con=new mysqli($server,$user,$password,$dname);
        if (isset($_POST['submit'])) {
        $uname=$_POST["uname"];
        $upwd=$_POST["upwd"];
        $sql="SELECT name,pass from login ";
        $res=$con->query($sql);
        if($res->num_rows>0)
        {
            $flag=0;
            while($row=$res->fetch_assoc())
            {
                if($uname==$row["name"] && $upwd==$row["pass"] )
                {
                    echo "<h1>Login Done</h1>";
                    //$_SESSION["uname"] = $uname;
                    $flag=1;
                    setcookie("uname", $uname, time() + 3600, '/');
                    setcookie("upwd", $upwd, time() + 3600, '/');

                }
            }
        }
        if($flag==0)
        {
            echo "<h1>Invalid Username or Password</h1>";
        }

    }
    $con->close();
}
    ?>