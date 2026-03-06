<?php

include "config.php";

$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id=$id";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

if(isset($_POST['update'])){

$title = $_POST['title'];

$content = $_POST['content'];

$update = "UPDATE posts SET title='$title', content='$content' WHERE id=$id";

$conn->query($update);

header("location:index.php");

}

?>

<div class="container mt-5">

<h3>Edit Post</h3>

<form method="POST">

<input type="text" name="title" class="form-control mb-3" value="<?php echo $row['title']; ?>">

<textarea name="content" class="form-control mb-3"><?php echo $row['content']; ?></textarea>

<button class="btn btn-warning">Update Post</button>

</form>

</div>