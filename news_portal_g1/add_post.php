<?php
$servername = "localhost";
$database = "news_portal";
$username = "root";
$password = "";


$db = mysqli_connect($servername, $username, $password, $database);
$title = mysqli_real_escape_string($db, $_POST['title']);
$category = mysqli_real_escape_string($db, $_POST['category']);
$content = mysqli_real_escape_string($db, $_POST['content']);
$image_name = $_FILES['image']['name'];
$image_temp = $_FILES['image']['tmp_name'];


$target_dir = "pictures/";
$target_file = $target_dir . basename($image_name);
move_uploaded_file($image_temp, $target_file);


$sql = "INSERT INTO news (title, category, content, image) VALUES ('$title', '$category', '$content', '$target_file')";
mysqli_query($db, $sql);
header('Location: feed_(test).php');




?>