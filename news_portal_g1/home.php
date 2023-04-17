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
    </style>
  </head>
  <body>


              <div class="container text-center collum-main">
                <div class="row align-items-start">
                  <div class="col">
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
          <a href="#" class="btn btn-primary my-2 shadow">Write news post</a>
          <a href="#" class="btn btn-secondary my-2 shadow-sm">Update news post</a>
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
          <img src="<?= $newsItem["n_img"]?>" width="399px" height="200px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
            <div class="card-body ">
            <p class="card-text"><?= $newsItem["n_title"]?>,<br> Category:<?=$newsItem["n_category"]?>,<br> Content: <?=$newsItem["n_content"]  ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="?cart=add&id=<?=$newsItem["n_id"]?>"class="btn btn-secondary btn-block add-to-cart" data-id="<?=$newsItem["n_id"]?>">Read</a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Read</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>






        <?php if(!empty($news)): ?>
      <?php foreach ($news as $newsItem): ?>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?= $newsItem["n_img"]?>" width="399px" height="200px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
            <div class="card-body ">
            <p class="card-text"><?= $newsItem["n_title"]?>,<br> Category:<?=$newsItem["n_category"]?>,<br> Content: <?=$newsItem["n_content"]  ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="?cart=add&id=<?=$newsItem["n_id"]?>"class="btn btn-secondary btn-block add-to-cart" data-id="<?=$newsItem["n_id"]?>">Read</a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Read</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>

        <?php if(!empty($news)): ?>
      <?php foreach ($news as $newsItem): ?>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?= $newsItem["n_img"]?>" width="399px" height="200px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
            <div class="card-body ">
            <p class="card-text"><?= $newsItem["n_title"]?>,<br> Category:<?=$newsItem["n_category"]?>,<br> Content: <?=$newsItem["n_content"]  ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="?cart=add&id=<?=$newsItem["n_id"]?>"class="btn btn-secondary btn-block add-to-cart" data-id="<?=$newsItem["n_id"]?>">Read</a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Read</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>


        <?php if(!empty($news)): ?>
      <?php foreach ($news as $newsItem): ?>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?= $newsItem["n_img"]?>" width="399px" height="200px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
            <div class="card-body ">
            <p class="card-text"><?= $newsItem["n_title"]?>,<br> Category:<?=$newsItem["n_category"]?>,<br> Content: <?=$newsItem["n_content"]  ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="?cart=add&id=<?=$newsItem["n_id"]?>"class="btn btn-secondary btn-block add-to-cart" data-id="<?=$newsItem["n_id"]?>">Read</a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Read</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>

        <?php if(!empty($news)): ?>
      <?php foreach ($news as $newsItem): ?>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?= $newsItem["n_img"]?>" width="399px" height="200px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
            <div class="card-body ">
            <p class="card-text"><?= $newsItem["n_title"]?>,<br> Category:<?=$newsItem["n_category"]?>,<br> Content: <?=$newsItem["n_content"]  ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="?cart=add&id=<?=$newsItem["n_id"]?>"class="btn btn-secondary btn-block add-to-cart" data-id="<?=$newsItem["n_id"]?>">Read</a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Read</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>


 <?php if(!empty($news)): ?>
      <?php foreach ($news as $newsItem): ?>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?= $newsItem["n_img"]?>" width="399px" height="200px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
            <div class="card-body ">
            <p class="card-text"><?= $newsItem["n_title"]?>,<br> Category:<?=$newsItem["n_category"]?>,<br> Content: <?=$newsItem["n_content"]  ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="?cart=add&id=<?=$newsItem["n_id"]?>"class="btn btn-secondary btn-block add-to-cart" data-id="<?=$newsItem["n_id"]?>">Read</a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Read</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary"><?php  $currentDate = date('Y-m-d'); echo $currentDate; ?></small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>

        <?php if(!empty($news)): ?>
      <?php foreach ($news as $newsItem): ?>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?= $newsItem["n_img"]?>" width="399px" height="200px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
            <div class="card-body ">
            <p class="card-text"><?= $newsItem["n_title"]?>,<br> Category:<?=$newsItem["n_category"]?>,<br> Content: <?=$newsItem["n_content"]  ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="?cart=add&id=<?=$newsItem["n_id"]?>"class="btn btn-secondary btn-block add-to-cart" data-id="<?=$newsItem["n_id"]?>">Read</a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Read</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>

        <?php if(!empty($news)): ?>
      <?php foreach ($news as $newsItem): ?>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?= $newsItem["n_img"]?>" width="399px" height="200px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text>
            <div class="card-body ">
            <p class="card-text"><?= $newsItem["n_title"]?>,<br> Category:<?=$newsItem["n_category"]?>,<br> Content: <?=$newsItem["n_content"]  ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="?cart=add&id=<?=$newsItem["n_id"]?>"class="btn btn-secondary btn-block add-to-cart" data-id="<?=$newsItem["n_id"]?>">Read</a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Read</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-body-secondary">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
         
              
              


  </body>
</html>