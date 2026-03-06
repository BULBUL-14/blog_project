<?php
include 'db.php';

if(isset($_POST['submit'])){
$title = $_POST['title'];
$content = $_POST['content'];

$sql = "INSERT INTO posts (title,content) VALUES ('$title','$content')";
$conn->query($sql);

header("Location: index.php");
}
?>

<form method="POST">
Title:<br>
<input type="text" name="title"><br><br>

Content:<br>
<textarea name="content"></textarea><br><br>

<button type="submit" name="submit">Add Post</button>
</form>