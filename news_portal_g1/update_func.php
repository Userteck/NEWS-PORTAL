<?php
$servername = "localhost";
$database = "news_portal";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$users_id=$_POST['id'];
$username=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$active=$_POST['active'];
mysqli_query($conn,"UPDATE `users` SET `username`='$username',`email`='$email',`password`='$password',`active`='$active' WHERE users_id='$users_id'");
header('Location:admin_user.php');