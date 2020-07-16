<?php 
require_once 'db.php';
// 1. Lay data tu form gui sang
$exam_id = $_POST['exam_id'];
$exam_name = $_POST['exam_name'];

$sql = "update exams set 
            exam_name = '$exam_name'";
$sql .=	" where exam_id = $exam_id";
executeQuery($sql);
header('location: exams.php');
 ?>