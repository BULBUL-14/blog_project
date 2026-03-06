<?php
session_start();
include "db.php";

if(isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

$result=mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");
$row=mysqli_fetch_assoc($result);

if(password_verify($password,$row['password'])){
$_SESSION['user']=$username;
header("Location:index.php");
}
}
?>

<form method="POST">

Username<br>
<input type="text" name="username"><br>

Password<br>
<input type="password" name="password"><br>

<button name="login">Login</button>

</form>