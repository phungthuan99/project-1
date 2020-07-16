<?php 
require_once 'db.php';
// 1. Lay data tu form gui sang
$news_title = $_POST['news_title'];
$news_essential = $_POST['news_essential'];
$news_content = $_POST['news_content'];
$image = $_FILES['news_avatar'];
$avatar = "";

// upload anh 
if($image['size'] > 0){ // kiem tra kich co anh
	$filename = uniqid() . "-" . $image['name'];
	move_uploaded_file($image['tmp_name'], 'uploads/' . $filename);
	$avatar = 'uploads/' . $filename;
}
// câu query
$sql = "insert into news
			(news_avatar, news_title, news_essential, news_content)
		values 
			('$avatar', '$news_title', '$news_essential', '$news_content')";
executeQuery($sql);
header('location: news.php');
 ?>