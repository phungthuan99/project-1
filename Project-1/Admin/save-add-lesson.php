<?php

require_once 'db.php';
//1. Lấy data từ form gửi sang
$lesson_title = $_POST['lesson_title'];
$lesson_essential = $_POST['lesson_essential'];
$lesson_content = $_POST['lesson_content'];

// câu jquery
$sql = "insert into lessons
            (lesson_title, lesson_essential, lesson_content)
        values 
            ('$lesson_title', '$lesson_essential', '$lesson_content')";

executeQuery($sql);
header('location: lessons.php')

?>