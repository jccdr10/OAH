<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Registration</h2></center>
<!--Once the form is submitted, all the form data is forwarded to insertUser.php -->
<form action="insertUser.php" method="post">
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<td> Enter First Name :</td>
<td> <input type="text" name="firstName" size="48"> </td>
</tr>
<tr>
<td> Enter Last Name :</td>
<td> <input type="text" name="lastName" size="48"> </td>
</tr>
<tr>
<td> Enter Email :</td>
<td> <input type="email" name="email" size="48"> </td>
</tr>
<tr>
<td> Enter password :</td>
<td> <input type="password" name="password" size="48"> </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="Register">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>