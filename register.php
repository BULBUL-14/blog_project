<?php
include "config.php";

if(isset($_POST['register'])){

$username=$_POST['username'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

$sql="INSERT INTO users(username,password) VALUES('$username','$password')";
$conn->query($sql);

echo "Registration Successful";
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

<div class="row justify-content-center">

<div class="col-md-4">

<div class="card mt-5 shadow">

<div class="card-header text-center">
<h3>Register</h3>
</div>

<div class="card-body">

<form method="POST">

<input type="text" name="username" class="form-control mb-3" placeholder="Username" required>

<input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

<button class="btn btn-success w-100" name="register">Register</button>

</form>

<br>

<a href="login.php">Already have account? Login</a>

</div>

</div>

</div>

</div>

</div>

</body>
</html>