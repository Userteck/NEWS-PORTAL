<?php
$servername = "localhost";
$database = "news_portal";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$users_id=$_POST['id'];
mysqli_query($conn,"DELETE FROM `users` WHERE users_id='$users_id'");
header("Location:admin_user.php");
