<?php
    session_start();
    require('connect.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel ="stylesheet" href="style.css">
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <title>Bootstrap demo</title>
    <style>


/* width */
::-webkit-scrollbar {
    width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
    background: rgb(24, 25, 31); 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #808080; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}

        .css-test{
            background-color:;
            text-align:center;
            width:6rem;
            color:white;
        }
        .css-test:hover{
            background-color:#e6e4e3;
            color:#363534;
        }

        li{
            margin:3px;
        }

        .padding-navbar {
            padding-left: 8rem;
            padding-right: 8rem;
        }

        .red{
         background-color: red;   
        }
        .class-navbar{
            height: 65px;
            font-size: 19px;
        }
        .form-control-header {
         width: 500px;  
         border-radius: 10px; 
         background-color: rgb(47, 47, 56);
         color: rgb(219, 219, 219);
         border-width: 1px;
         border-style:solid;

         border-color: gray;
        }
        .collum-main{
         height: 100%;
         padding-bottom: 10px;   
         background-color: #2e2c2c;
         color: #fff;
        }
        .btn-outline-success{
         background-color: rgb(66, 66, 255);  
         border: none;
         color:#fff; 
         border-radius: 6px;
        }

        .border-radiuss-1{
            radius:50px;    /*doesnt work*/
        }
    </style>

    </style>
  </head>
  <body>

    <nav class="padding-navbar navbar navbar-expand-lg bg-body-tertiary navbar bg-dark class-navbar" data-bs-theme="dark">



    <div class="container-fluid">
    <a href="home.php"><img class="navbar-brand" src="/news_portal_g1/pictures/ap-logo.png" width="100px" alt=""></a>
        <a class="navbar-brand g-lg-0ž" href="#">           </a>
        <form class="d-flex" role="search">
        <input class="form-control-header me-2" type="search" placeholder="   Search" aria-label="Search">
        <button class=" btn btn-lg btn-primary border-radiuss-10" type="submit">Search</button>
        </form>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
        </div>
    </div>
    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="feed_(test).php">Feed</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">News</a>
            </li>
        <li class="nav-item dropdown">
            <a class="btn btn-primary nav-link dropdown-toggle" href="#" role="button"
             data-bs-toggle="dropdown" aria-expanded="false">
            Write
            </a>   
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Write article</a></li>
            <li><a class="dropdown-item" href="#">Review article</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Moderate articles</a></li>
            </ul>
        </li>

    <li class="menu-member">
        <?php
            if(isset($_SESSION["username"]))
            {
        ?>
            <li><a href="profile.php" class=" border nav-link border border-white rounded  css-test" href="index.php"><?php echo $_SESSION['username']; ?></a></li>
            <li><a href="logout.php" class="nav-link">Logout</a></li>

        <?php
            }
            else
            {
        ?>
            <li><a href="index.php" class="nav-link active">&nbspRegister</a></li>
            <li><a href="login.php" class="nav-link active">Login</a></li>
        <?php
            }
        ?>
    </li>
        </ul>
            
    </nav>