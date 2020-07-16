<?php 
require_once 'db.php';
// 1. Lay data tu form gui sang
$exam_name = $_POST['exam_name'];

// câu query
$sql = "insert into exams
			(exam_name)
		values 
			('$exam_name')";
executeQuery($sql);
header('location: exams.php');
 ?>