<?php 
function get_news()
{
    $servername = "localhost";
    $database = "news_portal";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    $news = mysqli_query($conn, "SELECT * FROM `news`");
    return mysqli_fetch_all($news, MYSQLI_ASSOC);
}