<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Login</h2></center>
<br>
<?php
include("dbConnection.php");
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
$query = "select * from user_accounts where email = '$email' AND password = '$password'";
$result = mysqli_query($db,$query);

if(mysqli_num_rows($result)>0)
{
    echo "Successful!";
}
else
{
    echo "User Not Found!" ;
}
?>
</body>
</html>
<br>