<?php
include 'config.php'; //menghubungkan pangkalan data
$error='';
session_start();
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
if(empty($_POST['username']) || empty($_POST['password'])){
$error = "Username or Password is Invalid";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
$query = mysqli_query($connect, "SELECT * FROM pengguna WHERE password='$password' AND username='$username'");//ralat nama jadual (user -> pengguna)
$rows = mysqli_num_rows($query);
if($rows == 1){
header("Location:maklumatkomputer.php");//nama fail salah
}
else
{
$error = "Username of Password is Invalid";
}
}
}
?>
<body bgcolor="#ddd">
<br><br>
<div style="border: 1px solid black; border-radius: 10px; width: 40%;
margin: 0 auto; background-color: white;">
<center>
<h2>Login</h2>
<form action="" method= "post">
<hr>
<style type="text/css">
td {
padding: 10px;
}
</style>
<table style="margin: 0 auto;">
<tr>
<td>Username</td>
<td>:</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td colspan="3" style="text-align: center;"><input
type="submit" name="submit" value="submit"></td>
</tr>
</table>
</form>
</center>
<br>
</div>
</body>
