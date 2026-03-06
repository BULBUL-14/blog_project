<?php
include "db.php";

if(isset($_POST['register'])){

$username=$_POST['username'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

mysqli_query($conn,"INSERT INTO users(username,password) VALUES('$username','$password')");
}
?>

<form method="POST">

Username<br>
<input type="text" name="username"><br>

Password<br>
<input type="password" name="password"><br>

<button name="register">Register</button>

</form>