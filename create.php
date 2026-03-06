<?php
session_start();

if(!isset($_SESSION['user'])){
header("location:login.php");
exit();
}

include "config.php";

if(isset($_POST['submit'])){

$title = $_POST['title'];
$content = $_POST['content'];

$stmt = $conn->prepare("INSERT INTO posts(title,content) VALUES(?,?)");
$stmt->bind_param("ss",$title,$content);
$stmt->execute();

header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Add Post</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card mt-5 shadow">

<div class="card-header text-center bg-primary text-white">

<h4>Add New Blog Post</h4>

</div>

<div class="card-body">

<form method="POST">

<label class="form-label">Post Title</label>

<input type="text" name="title" class="form-control mb-3" placeholder="Enter Post Title" required>

<label class="form-label">Post Content</label>

<textarea name="content" class="form-control mb-3" rows="5" placeholder="Write your post here..." required></textarea>

<button type="submit" name="submit" class="btn btn-success w-100">

Add Post

</button>

</form>

</div>

</div>

</div>

</div>

</div>

</body>
</html>