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

.no-decoration-second{
  text-decoration:;
  text-decoration-color: #a38331;
  color: black;
}

.padding-top{
    padding-top:60px;

    color: #505c96;
    text-align:center;
}

.padding-text{
    padding-left:300px;
    padding-right:300px;
}
.alert{
color:black;
font-family: Monospace;
}
.font-style-1{
font-family: Serif;
font-size: 20px;
}
.font-style-2{
font-family: Serif;
font-size: 20px;
}

    </style>
  </head>
  <body>


    <div class="container  collum-main color-main">
        <div class="row align-items-start">
            <div class="col">






                <div class="div1">
                <center><h3 class="padding-top">NewsPortal</h3></center>
                <center><h3 class=><b>About "NewsPortal"</b></h3></center><br><br>
                    <div class="padding-text">
                        <h3><b>NewsPortal Project SIA</b></h3><br>
                        <h5><b>«NewsPortal» -  international English publishing house</b></h5><br>

                        <h5 style="font-family:serif">Media registration certificate number: 0012343567 (January 10, 2023)<br><br>
                        Adress: A.k. 42, Pasta centrs Sakta, Riga, LV-1057, Latvia</h5><br>
                        
                        <p class="alert alert-warning">You can make a regular payment to NewsPortal <a href="#" class="no-decoration-second">here</a>.</p>

                        <br><h2><b>Contact us</b></h2><br>
                        <h5><b>If you have an idea for a material</b></h5>
                        <a href="#"class="no-decoration-second font-style-1">editorial@newsportal.io</a><br><br><br>

                        <h5><b>If something does not work on the site or in the application</b></h5>
                        <a href="#"class="no-decoration-second font-style-1">service@newsportal.io</a><br><br><br>
                        
                        <h5><b>If you would like to advertise with us</b></h5>
                        <a href="#"class="no-decoration-second font-style-1">ad@newsportal.io</a><br><br><br>

                        <h5><b>If you have any other question</b></h5>
                        <a href="#"class="no-decoration-second font-style-1">reports@newsportal.io</a><br><br><br>
                        
                        <hr color="#a38331" size="4px">

                        <h4><b>NewsPortal CEO</b></h4>
                        <p class="font-style-2">Publisher and CEO <b>Platon Martynov</b></p>

                        <hr color="#a38331" size="4px">
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>



<main>
</main>





  




         
              
              
<script>
  </script>


  </body>
</html>