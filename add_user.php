
<?php
$servername = "localhost";
$database = "news_portal";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$username=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$active=$_POST['active'];
mysqli_query($conn,"INSERT INTO `users` (`users_id`, `username`, `email`, `password`, `active`) VALUES (NULL, '$username', '$email', '$password', '$active' )");
header('Location:admin_user.php');