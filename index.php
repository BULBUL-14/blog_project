<?php
session_start();

if(!isset($_SESSION['user'])){
header("location:login.php");
exit();
}
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>

<title>Blog Project</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">
    
<nav class="navbar navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand">Blog System</a>

<div>
<span class="text-white me-3">
Welcome <?php echo $_SESSION['user']; ?>
</span>

<a href="index.php" class="btn btn-light btn-sm">Home</a>

<a href="create.php" class="btn btn-success btn-sm">Add Post</a>

<a href="logout.php" class="btn btn-danger btn-sm">Logout</a>

</div>

</div>
</nav>
<div class="container mt-4">

<h2 class="text-center mb-4">Blog Posts</h2>

<a href="create.php" class="btn btn-primary mb-3">Add Post</a>

<form method="GET" action="search.php" class="mb-4">

<div class="input-group">

<input type="text" name="search" class="form-control" placeholder="Search Post">

<button class="btn btn-success">Search</button>

</div>

</form>

<?php

// pagination limit
$limit = 4;

// current page
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// starting record
$start = ($page - 1) * $limit;

// fetch posts
$sql = "SELECT * FROM posts LIMIT $start,$limit";

$result = $conn->query($sql);

// numbering
$count = $start + 1;

while($row = $result->fetch_assoc()){

?>

<div class="card mb-3 shadow">

<div class="card-body">

<h5><?php echo $count++; ?>. <?php echo $row['title']; ?></h5>

<p><?php echo $row['content']; ?></p>

<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>

<a href="delete.php?id=<?php echo $row['id']; ?>" 
class="btn btn-danger btn-sm"
onclick="return confirm('Are you sure you want to delete this post?')">
Delete
</a>

</div>

</div>

<?php } ?>

<?php

// total posts count
$result1 = $conn->query("SELECT COUNT(id) as total FROM posts");
$row1 = $result1->fetch_assoc();

$total_posts = $row1['total'];

// total pages
$total_pages = ceil($total_posts / $limit);

?>

<nav>

<ul class="pagination justify-content-center">

<?php

for($i = 1; $i <= $total_pages; $i++){

echo "<li class='page-item'><a class='page-link' href='index.php?page=".$i."'>".$i."</a></li>";

}

?>

</ul>

</nav>

</div>

</body>
</html>