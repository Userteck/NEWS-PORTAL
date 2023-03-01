<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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

        .padding-navbar {
            padding-left: 18rem;
            padding-right: 18rem;
        }
        body{
         background-color: rgb(24, 25, 31);   
        }
        .red{
         background-color: red;   
        }
        .class-navbar{
            height: 65px;
            font-size: 19px;
        }
        .form-control {
         width: 600px;   
         background-color: rgb(47, 47, 56);
         color: rgb(219, 219, 219);
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

    </style>
  </head>
  <body>

    

            <nav class="padding-navbar navbar navbar-expand-lg bg-body-tertiary navbar bg-dark class-navbar" data-bs-theme="dark">
                                  
                <div class="row align-items-start">
                    <div class="col">
                    </div>
                    <div class="col">
                   </div>
                  </div>

                <div class="container-fluid">
                  <a class="navbar-brand g-lg-0ž" href="#">Navbar scroll</a>
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarScroll">
                  </div>
                </div>
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Feed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                      </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Write
                      </a>   
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="index.php">Sign&nbspUp</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link disabled"></a>
                    </li>
                </ul> 
              </nav>


              <div class="container text-center collum-main">
                <div class="row align-items-start">
                  <div class="col">
                    <div class="div1">
                        <div class="container text-center">
                            <div class="row align-items-start">
                              <div class="col">
                                <h2 style="font-family: 'Times New Roman', Times, serif;">Latests News</h2>
                              </div>
                              <div class="col">
                                <div class="article">
                                   <h4>"article name"</h4> 
                                   <a>"article relevance (an hour ago/ a day ago...)"</a>
                                </div>
                                <div class="article">
                                    <h4>"article name"</h4> 
                                    <a>"article relevance (an hour ago/ a day ago...)"</a>
                                 </div>
                              </div>
                              <div class="col">
                                <div class="article">
                                    <h4>"article name"</h4> 
                                    <a>"article relevance (an hour ago/ a day ago...)"</a>
                                 </div>
                                 <div class="article">
                                    <h4>"article name"</h4> 
                                    <a>"article relevance (an hour ago/ a day ago...)"</a>
                                 </div>
                              </div>
                              <a href="#" class="full_news_feed">Full news Feed→</a>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>       


  </body>
</html>

