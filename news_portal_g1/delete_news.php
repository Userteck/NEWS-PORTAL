<?php
$servername = "localhost";
$database = "news_portal";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$n_id=$_POST['n_id'];
mysqli_query($conn,"DELETE FROM `news` WHERE `n_id` = '$n_id'");
header("Location:admin_news.php");
