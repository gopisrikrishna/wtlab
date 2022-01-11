<html>
<head>
</head>
<title>Set Cookie</title>
<body>
<?php
$user = $_POST['user'];
$pwd = $_POST['pwd'];
setcookie("user",$user,time()+3600*2);
setcookie("pwd",$pwd,time()+3600*2);
echo "<h3>The Cookie Added...</h3>";
?>
</body>
</html>