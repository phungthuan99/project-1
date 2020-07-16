<?php  
    require_once 'db.php';
    $question_id = $_GET['question_id'];
    $sql = "delete from questions where question_id = $question_id";
    // nạp câu truy vấn vào kết nối
    executeQuery($sql);
    header('location: questions.php');
?>