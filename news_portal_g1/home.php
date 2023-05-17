<?php
include_once "header.php";
require_once 'func.php';
$news= get_news();

?>
<style>

        body{
         background-color: rgb(24, 25, 31);   
        }
        .red{
         background-color: red;   
        }

        .div1{
         background-color: #fff;   
         border-radius: 10px;
         margin-top: 20px;
         padding: 10px;
         color:black;
         font-family:Arial, Helvetica, sans-serif
        }
        .full_news_feed{
         text-decoration: none;
         text-align: right;
         margin-top: 10px;   
        }
        .article{
        margin: 30px;
        }

        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }

      .card-parameters{
        width:400px;
      }
      .card{
        width:400px;
      }


      h5.news {
    line-height: 1.5;
   }



      /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;

  margin: 10% auto; /* 15% from the top and centered */
  padding: 15px;
  border: 1px solid #888;
  width: 67%; /* Could be more or less, depending on screen size */
  height: auto;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-content img {
  display: block;
  width:100%;
  margin: auto;
  text-align: center;
  vertical-align: middle;
}


/* Style the image */
.modal-content img {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
}


.margin-news{

  padding: 0px;

}


/* Style the input fields */
input[type=text], textarea, input[type=file] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 16px;
  font-size: 16px;
}

/* Style the submit button */
button[type=submitt] {
  background-color: #0989eb;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

.album-try{
  border-radius: 10px;
  margin-top: 10px;
  padding-left: 40px;
  padding-right: 30px;
  padding-bottom: 5px;
  padding-top: 15px;
  text-decoration: none;


  background-color: #fff;
  color: black;
  font-family: Arial, Helvetica, sans-serif;
  display: block;
}

.color-main{
  background-color: #18191f;
}
.no-decoration{
  text-decoration: none;
  color: #3e435c;
}

    </style>
  </head>
  <body>


              <div class="container  collum-main color-main">


                <div class="row align-items-start">
                  <div class="col">


                <div class="album-try">
                <h5><a href="about_us.php" class="no-decoration">About "NewsPortal"</a></h5>
                </div>

                    
                    <div class="div1">
                        <div class="container text-center">
                            <div class="row align-items-start">
                              <div class="col">
                              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                              <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
       

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>

</header>



<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">News Feed</h1>
        <p class="lead text-body-secondary">"Text"</p><br>
        
        <p>      

         <button id="myBtn2" class="btn btn-primary my-2 shadow btn-lg">Write news post</button>



        <div id="myModal2" class="modal">
          <div class="modal-content">
                  <h1>Write news post</h1>

              <form action="add_post.php" method="post" enctype="multipart/form-data">
                  <label for="n_title">Title:</label><br><br>
                  <input type="text" name="n_title">
                  <br>
                  <label for="category">Category:</label><br><br>
                  <input type="text" name="n_category">

                  <label for="content">Content:</label><br><br>
                  <input type="text" name="n_content">

                  <label for="n_img">Add Image:</label><br><br>
                  <input type="file" name="n_img">&nbsp&nbsp&nbsp

                  <br><br><button type="submit">Submit</button><br><br>
              </form>
          </div>
        </div>





          <a href="#" class="btn btn-secondary my-2 shadow-sm">Update news post</a>
     </div>
  </div>
        </p>
      </div>
    </div>

    
  </section>



  
  <div class="album py-5 bg-body-tertiary">
    <div class="container">


      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php if(!empty($news)): ?>
      <?php foreach ($news as $newsItem): ?>
        <div class="col">
          <div class="card shadow-sm"shadow-sm>
          <img src="<?= $newsItem["n_img"]?>" width="399px" height="200px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" 
          preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef"
           dy=".3em"></text>
            <div class="card-body ">
            <p class="card-text"><b><?= $newsItem["n_title"]?></b>,<br><br> <i>Category:</i> <?=$newsItem["n_category"]?><br></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                <a href="?cart=add&id=<?=$newsItem["n_id"]?>"class="btn btn-secondary"   data-id="<?=$newsItem["n_id"]?>">Edit</a>

                  <button type="button" id="myBtn" class="btn btn-sm btn-outline-secondary">Read</button>

                      <!-- The Modal -->
                      <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="close">&times;</span>
                          <img src="<?= $newsItem["n_img"]?>" width="70%" height="70% " xmlns="http://www.w3.org/2000/svg" role="img">
                          
                          <p class="news"><h1 class="card-text"><?= $newsItem["n_title"]?></h1><br><br> <i><h3><?=$newsItem["n_category"]?></h3>
                        </i><br> <h5 class="news"><?=$newsItem["n_content"]?></h5></p>
                        </div>
                      </div>

                </div>
                <small class="text-body-secondary">2 min</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>


        <?php if(!empty($news)): ?>
      <?php foreach ($news as $newsItem): ?>
        <div class="col">
          <div class="card shadow-sm"shadow-sm>
          <img src="<?= $newsItem["n_img"]?>" width="399px" height="200px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" 
          preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef"
           dy=".3em"></text>
            <div class="card-body ">
            <p class="card-text"><b><?= $newsItem["n_title"]?></b>,<br><br> <i>Category:</i> <?=$newsItem["n_category"]?><br></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                <a href="?cart=add&id=<?=$newsItem["n_id"]?>"class="btn btn-secondary"   data-id="<?=$newsItem["n_id"]?>">Edit</a>

                  <button type="button" id="myBtn" class="btn btn-sm btn-outline-secondary">Read</button>

                      <!-- The Modal -->
                      <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="close">&times;</span>
                          <img src="<?= $newsItem["n_img"]?>" width="70%" height="70% " xmlns="http://www.w3.org/2000/svg" role="img">
                          
                          <p class="news"><h1 class="card-text"><?= $newsItem["n_title"]?></h1><br><br> <i><h3><?=$newsItem["n_category"]?></h3>
                        </i><br> <h5 class="news"><?=$newsItem["n_content"]?></h5></p>
                        </div>
                      </div>

                </div>
                <small class="text-body-secondary">1 min</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>

        <?php if(!empty($news)): ?>
      <?php foreach ($news as $newsItem): ?>
        <div class="col">
          <div class="card shadow-sm"shadow-sm>
          <img src="<?= $newsItem["n_img"]?>" width="399px" height="200px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" 
          preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef"
           dy=".3em"></text>
            <div class="card-body ">
            <p class="card-text"><b><?= $newsItem["n_title"]?></b>,<br><br> <i>Category:</i> <?=$newsItem["n_category"]?><br></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                <a href="?cart=add&id=<?=$newsItem["n_id"]?>"class="btn btn-secondary"   data-id="<?=$newsItem["n_id"]?>">Edit</a>

                  <button type="button" id="myBtn" class="btn btn-sm btn-outline-secondary">Read</button>

                      <!-- The Modal -->
                      <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="close">&times;</span>
                          <img src="<?= $newsItem["n_img"]?>" width="70%" height="70% " xmlns="http://www.w3.org/2000/svg" role="img">
                          
                          <p class="news"><h1 class="card-text"><?= $newsItem["n_title"]?></h1><br><br> <i><h3><?=$newsItem["n_category"]?></h3>
                        </i><br> <h5 class="news"><?=$newsItem["n_content"]?></h5></p>
                        </div>
                      </div>

                </div>
                <small class="text-body-secondary">2 min</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>

        <?php if(!empty($news)): ?>
      <?php foreach ($news as $newsItem): ?>
        <div class="col">
          <div class="card shadow-sm"shadow-sm>
          <img src="<?= $newsItem["n_img"]?>" width="399px" height="200px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" 
          preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef"
           dy=".3em"></text>
            <div class="card-body ">
            <p class="card-text"><b><?= $newsItem["n_title"]?></b>,<br><br> <i>Category:</i> <?=$newsItem["n_category"]?><br></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                <a href="?cart=add&id=<?=$newsItem["n_id"]?>"class="btn btn-secondary"   data-id="<?=$newsItem["n_id"]?>">Edit</a>

                  <button type="button" id="myBtn" class="btn btn-sm btn-outline-secondary">Read</button>

                      <!-- The Modal -->
                      <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="close">&times;</span>
                          <img src="<?= $newsItem["n_img"]?>" width="70%" height="70% " xmlns="http://www.w3.org/2000/svg" role="img">
                          
                          <p class="news"><h1 class="card-text"><?= $newsItem["n_title"]?></h1><br><br> <i><h3><?=$newsItem["n_category"]?></h3>
                        </i><br> <h5 class="news"><?=$newsItem["n_content"]?></h5></p>
                        </div>
                      </div>

                </div>
                <small class="text-body-secondary">1 min</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>

        <?php if(!empty($news)): ?>
      <?php foreach ($news as $newsItem): ?>
        <div class="col">
          <div class="card shadow-sm"shadow-sm>
          <img src="<?= $newsItem["n_img"]?>" width="399px" height="200px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" 
          preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef"
           dy=".3em"></text>
            <div class="card-body ">
            <p class="card-text"><b><?= $newsItem["n_title"]?></b>,<br><br> <i>Category:</i> <?=$newsItem["n_category"]?><br></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                <a href="?cart=add&id=<?=$newsItem["n_id"]?>"class="btn btn-secondary"   data-id="<?=$newsItem["n_id"]?>">Edit</a>

                  <button type="button" id="myBtn" class="btn btn-sm btn-outline-secondary">Read</button>

                      <!-- The Modal -->
                      <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="close">&times;</span>
                          <img src="<?= $newsItem["n_img"]?>" width="70%" height="70% " xmlns="http://www.w3.org/2000/svg" role="img">
                          
                          <p class="news"><h1 class="card-text"><?= $newsItem["n_title"]?></h1><br><br> <i><h3><?=$newsItem["n_category"]?></h3>
                        </i><br> <h5 class="news"><?=$newsItem["n_content"]?></h5></p>
                        </div>
                      </div>

                </div>
                <small class="text-body-secondary">1 min</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>


        <?php if(!empty($news)): ?>
      <?php foreach ($news as $newsItem): ?>
        <div class="col">
          <div class="card shadow-sm"shadow-sm>
          <img src="<?= $newsItem["n_img"]?>" width="399px" height="200px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" 
          preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef"
           dy=".3em"></text>
            <div class="card-body ">
            <p class="card-text"><b><?= $newsItem["n_title"]?></b>,<br><br> <i>Category:</i> <?=$newsItem["n_category"]?><br></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">

                <a href="?cart=add&id=<?=$newsItem["n_id"]?>"class="btn btn-secondary"   data-id="<?=$newsItem["n_id"]?>">Edit</a>

                  <button type="button" id="myBtn" class="btn btn-sm btn-outline-secondary">Read</button>

                      <!-- The Modal -->
                      <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                          <span class="close">&times;</span>
                          <img src="<?= $newsItem["n_img"]?>" width="70%" height="70% " xmlns="http://www.w3.org/2000/svg" role="img">
                          
                          <p class="news"><h1 class="card-text"><?= $newsItem["n_title"]?></h1><br><br> <i><h3><?=$newsItem["n_category"]?></h3>
                        </i><br> <h5 class="news"><?=$newsItem["n_content"]?></h5></p>
                        </div>
                      </div>

                </div>
                <small class="text-body-secondary">1 min</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>




      </div>
         
              
              
<script>



  // Get the modal
var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



// Get the second modal
var modal2 = document.getElementById("myModal2");

var btn2 = document.getElementById("myBtn2");

btn2.onclick = function() {
  modal2.style.display = "block";
}


window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}

  </script>


  </body>
</html>