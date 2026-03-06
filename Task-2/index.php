<?php
include "db.php";

$limit = 5;

if(isset($_GET['page'])){
$page = $_GET['page'];
}else{
$page = 1;
}

$offset = ($page-1) * $limit;

$search = "";

if(isset($_GET['search'])){
$search = $_GET['search'];
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Post Management</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2 class="mb-4">Post Management System</h2>

<!-- Search Bar -->

<form method="GET" class="d-flex mb-3">

<input type="text" name="search" class="form-control me-2" placeholder="Search post">

<button class="btn btn-primary">Search</button>

</form>

<!-- Add Post Button -->

<a href="add.php" class="btn btn-success mb-3">Add Post</a>

<?php

$sql = "SELECT * FROM posts 
WHERE title LIKE '%$search%' OR content LIKE '%$search%' 
LIMIT {$offset},{$limit}";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)){

?>

<div class="card mb-3">

<div class="card-body">

<h5 class="card-title"><?php echo $row['title']; ?></h5>

<p class="card-text"><?php echo $row['content']; ?></p>

<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>

<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>

</div>

</div>

<?php
}
}else{

echo "<p>No posts found</p>";

}
?>

<!-- Pagination -->

<?php

$sql1 = "SELECT * FROM posts";
$result1 = mysqli_query($conn,$sql1);

if(mysqli_num_rows($result1) > 0){

$total_records = mysqli_num_rows($result1);

$total_page = ceil($total_records / $limit);

echo "<nav>";

for($i=1;$i<=$total_page;$i++){

echo "<a class='btn btn-outline-primary btn-sm m-1' href='?page=".$i."'>".$i."</a>";

}

echo "</nav>";

}

?>

</div>

</body>

</html>














