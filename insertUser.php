<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Registration</h2></center>
<br>
<?php
include("dbConnection.php");
$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$email=$_POST["email"];
$password=$_POST["password"];

$query = "insert into user_accounts(firstName,lastName,email,password) values('$firstName','$lastName','$email','$password')"; //Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);
?>
<h3> User information is inserted successfully </h3>
<a href="login.php"> Login </a>
</body>
</html>