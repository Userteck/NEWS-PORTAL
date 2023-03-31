<?php
include_once "header.php";
?>

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

<br>
<div class="container margin_class">
    <form class="form-signin" method="POST">
        <h2>Login</h2>

        
        <input type="text" name="username" class="form-control" placeholder="Username" required><br>
        <input type="password" name="password" class="form-control" placeholder="password" required><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <a href="index.php" class="btn btn-lg btn-light btn-primary btn-block">Registration</a><br><br>
    </from>
</div><br>


<?php
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
    echo "<center>Hello " . $username . "! ";
    echo "You entered"; 
    echo "<center><a href='logout.php' class='btn btn-lg btn-danger'> Logout </a><br><br>"; 
    echo "Visit homepage";
    echo "<center><a href='home.php' class='btn btn-lg btn-primary'> Home </a></center>";
  }

 ?>

 

  </body>
</html>