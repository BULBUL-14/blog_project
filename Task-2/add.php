<?php
include "db.php";

if(isset($_POST['submit'])){

$title=$_POST['title'];
$content=$_POST['content'];

mysqli_query($conn,"INSERT INTO posts(title,content) VALUES('$title','$content')");
}
?>

<form method="POST">

Title<br>
<input type="text" name="title"><br>

Content<br>
<textarea name="content"></textarea><br>

<button name="submit">Add Post</button>

</form>