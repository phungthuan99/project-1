<?php 
require_once 'db.php';
// 1. Lay data tu form gui sang
$lesson_id = $_POST['lesson_id'];
$lesson_title = $_POST['lesson_title'];
$lesson_essential = $_POST['lesson_essential'];
$lesson_content = $_POST['lesson_content'];

$sql = "update lessons set 
            lesson_title = '$lesson_title',
            lesson_essential = '$lesson_essential',
            lesson_content = '$lesson_content'";
$sql .=	" where lesson_id = $lesson_id";
executeQuery($sql);
header('location: lessons.php');
 ?>