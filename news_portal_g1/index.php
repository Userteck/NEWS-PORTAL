<?php
include_once "header.php";
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport">
  <title>index</title>
</head>

<style>
      .margin_class {
        padding: 12px;
        border-radius: 50px;
        width: 40rem;
        background-color:#f2f2f2;
        border-radius: 18px;
  box-shadow: 3px 3px 18px -6px rgba(0, 0, 0, 0.3);
      }
  </style>
<body>

  <?php
  require('connect.php');
  
  if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email','$password')";
    $result = mysqli_query($connection, $query);

    if($result){
      $smsg = "Registration completed";
    } else {
      $fsmsg = "Error";
    }
  }
  

  ?>
<br>

<div class="container margin_class">
<div class="container">
    <form class="form-signin" method="POST">
        <h2>Registration</h2>
        <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php }?>
        <?php if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?> </div><?php }?>   
        
        <input type="text" name="username" class="form-control" placeholder="Username" required><br>
        <input type="email" name="email" class="form-control" placeholder="email" required><br>
        <input type="password" name="password" class="form-control" placeholder="password" required><br>
        <button class="btn btn-lg btn-primary btn-block" name="s" type="submit">Register</button>
        <a href="login.php" class="btn btn-lg btn-primary btn-block">Login</a>

    </from>
</div>
</div>

  </body>
</html>
