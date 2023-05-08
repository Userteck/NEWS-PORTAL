<?php
$user_id=$_GET['k_id'];
$servername = "localhost";
$database = "news_portal";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
$user=mysqli_query($conn,"SELECT `users_id`, `username`, `email`, `password`, `active` FROM `users` WHERE users_id='$user_id'");
$user=mysqli_fetch_assoc($user);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .form_update_user{
            width: 50%;
    float:;
    padding: 30px;
    border: 1px solid;
    border-radius:50px;
        }
        input {
  width: 70%;
  height: 40px;
}
    </style>
</head>
<body>
    <center>
    <div class="form_update_news">
<form action="update_func_news.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$user['n_id'] ?>">
    <p>title</p>
    <input type="text" name="title" value="<?=$user['title'] ?>"><br><br>
    <p>category</p>
    <input type="email" name="category" value="<?=$user['category'] ?>"><br><br>
    <p>content</p>
    <input type="text" name="content" value="<?=$user['content'] ?>"><br><br>
    <p>image</p>
    <input type="text" name="img" value="<?=$user['img'] ?>"><br><br>

    <button type="submit" class="btn btn-primary">Update</button><br><br>
    <a href="admin_news.php" class="btn btn-secondary">&nbsp&nbspBack&nbsp&nbsp</a>
    </div>
    </center>
</form>
</body>
</html>