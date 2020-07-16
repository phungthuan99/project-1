<?php
require_once 'db.php';
// 1. Lay data tu form gui sang
$question_id = $_POST['question_id'];
$question_name = $_POST['question_name'];
$image = $_POST['image'];
$answer_a = $_POST['answer_a'];
$answer_b = $_POST['answer_b'];
$answer_c = $_POST['answer_c'];
$exam_id = $_POST['exam_id'];

$sql = "update questions set 
            question_name = '$question_name',
            image = '$image';
            answer_a = '$answer_a',
            answer_b = '$answer_b',
            answer_c = '$answer_c',
			exam_id = '$exam_id'";
$sql .=    " where question_id = $question_id";
executeQuery($sql);
header('location: questions.php');
