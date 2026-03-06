<?php
include 'db.php';

$result = $conn->query("SELECT * FROM posts");
?>

<h2>My Blog</h2>

<a href="add_post.php">Add New Post</a>

<?php
while($row = $result->fetch_assoc()){
?>

<h3><?php echo $row['title']; ?></h3>
<p><?php echo $row['content']; ?></p>
<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
<hr>

<?php } ?>