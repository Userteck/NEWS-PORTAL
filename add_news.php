
<?php
$servername = "localhost";
$database = "news_portal";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$n_title=$_POST['title'];
$n_category=$_POST['category'];
$n_content=$_POST['content'];
$n_img=$_POST['img'];
var_dump($_FILES); die;
mysqli_query($conn,"INSERT INTO `news` (`n_id`, `title`, `category`, `content`, `img`) VALUES (NULL, '$n_title', '$n_category', '$n_content', '$n_img' )");
header('Location:admin_news.php');