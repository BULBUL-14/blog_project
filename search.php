<?php
session_start();
include "config.php";

$search = $_GET['search'];

$sql = "SELECT * FROM posts WHERE title LIKE '%$search%' OR content LIKE '%$search%'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>

<title>Search Result</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-4">

<h3>Search Results</h3>

<a href="index.php" class="btn btn-secondary mb-3">Back</a>

<?php

while($row=$result->fetch_assoc()){

?>

<div class="card mb-3 shadow">

<div class="card-body">

<h5><?php echo $row['title']; ?></h5>

<p><?php echo $row['content']; ?></p>

<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>

<a href="delete.php?id=<?php echo $row['id']; ?>" 
class="btn btn-danger btn-sm"
onclick="return confirm('Delete this post?')">Delete</a>

</div>

</div>

<?php } ?>

</div>

</body>
</html>