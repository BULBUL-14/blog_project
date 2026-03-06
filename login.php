<?php
session_start();
include "config.php";

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

if(password_verify($password,$user['password'])){
$_SESSION['user']=$username;
header("location:index.php");
}else{
echo "Invalid Login";
}
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

<div class="row justify-content-center">

<div class="col-md-4">

<div class="card mt-5 shadow">

<div class="card-header text-center">
<h3>Login</h3>
</div>

<div class="card-body">

<form method="POST">

<input type="text" name="username" class="form-control mb-3" placeholder="Username" required>

<input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

<button class="btn btn-primary w-100" name="login">Login</button>

</form>

<br>

<a href="register.php">Create Account</a>

</div>

</div>

</div>

</div>

</div>

</body>
</html>