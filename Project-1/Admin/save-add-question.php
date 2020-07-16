<?php
require_once 'db.php';
// 1. Lay data tu form gui sang
$question_name = $_POST['question_name'];
$image = $_POST['image'];
$answer_a = $_POST['answer_a'];
$answer_b = $_POST['answer_b'];
$answer_c = $_POST['answer_c'];
$exam_id = $_POST['exam_id'];
$avatar = "";

// upload anh 
if ($image['size'] > 0) { // kiem tra kich co anh
	$filename = uniqid() . "-" . $image['name'];
	move_uploaded_file($image['tmp_name'], 'uploads/' . $filename);
	$avatar = 'uploads/' . $filename;
}
// câu query
$sql = "insert into questions
			(question_name,image, answer_a, answer_b, answer_c, exam_id)
		values 
			('$question_name','$image', '$answer_a', '$answer_b', '$answer_c', '$exam_id')";
executeQuery($sql);
header('location: questions.php');
