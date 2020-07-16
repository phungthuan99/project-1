<?php  
    require_once 'db.php';
    $news_id = $_GET['news_id'];
    $sql = "delete from news where news_id = $news_id";
    // nạp câu truy vấn vào kết nối
    executeQuery($sql);
    header('location: news.php');
?>