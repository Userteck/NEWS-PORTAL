
<?php
$servername = "localhost";
$database = "news_portal";
$username = "root";
$password = "";

$db = mysqli_connect($servername, $username, $password, $database);
$title = mysqli_real_escape_string($db, $_POST['n_title']);
$category = mysqli_real_escape_string($db, $_POST['n_category']);
$content = mysqli_real_escape_string($db, $_POST['n_content']);
$image_name = $_FILES['n_img']['n_img'];
$image_temp = $_FILES['n_img']['tmp_name'];


$target_dir = "pictures/";
$target_file = $target_dir . basename($image_name);
move_uploaded_file($image_temp, $target_file);


$sql = "INSERT INTO news (n_title, n_category, n_content, n_img) VALUES ('$title', '$category', '$content', '$target_file')";
mysqli_query($db, $sql);

header('Location:admin_news.php');