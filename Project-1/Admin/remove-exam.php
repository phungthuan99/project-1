<?php  

require_once 'db.php';
$exam_id = $_GET['exam_id'];
$sql = "delete from exams where exam_id = $exam_id";
// nạp câu truy vấn vào kết nối
executeQuery($sql);
header('location: exams.php');

?>