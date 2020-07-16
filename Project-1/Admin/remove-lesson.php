<?php  
    require_once 'db.php';
    $lesson_id = $_GET['lesson_id'];
    $sql = "delete from lessons where lesson_id = $lesson_id";
    // nạp câu truy vấn vào kết nối
    executeQuery($sql);
    header('location: lessons.php');
?>