<?php
include_once "header.php";
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

