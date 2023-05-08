<?php
$servername = "localhost";
$database = "news_portal";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$n_id=$_POST['id'];
$n_title=$_POST['title'];
$n_category=$_POST['category'];
$n_content=$_POST['content'];
$n_img=$_POST['img'];
mysqli_query($conn,"UPDATE `news` SET `title`='$n_title',`category`='$n_category',`content`='$n_content',`img`='$n_img' WHERE n_id='$n_id'");
header('Location:admin_news.php');