<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel ="stylesheet" href="style.css">
    <title>Bootstrap demo</title>
    <style>
      
    </style>
  </head>
  <body>


<div class="container">
    <form class="form-signin" method="POST">
        <h2>Login</h2>

        
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <input type="password" name="password" class="form-control" placeholder="password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <a href="index.php" class="btn btn-lg btn-primary btn-block">Registration</a>
    </from>
</div>


<?php
session_start();
require('connect.php');

  if (isset($_POST['username']) and isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE username='$username' and password='$password'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION['username'] = $username;
        }else {
            $fsmsg = "error";
        }
  }

  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Hello " . $username . "! ";
    echo "You entered"; 
    echo "<a href='logout.php' class='btn btn-lg btn-primary'> Logout </a>";
  }

 ?>

 

  </body>
</html>