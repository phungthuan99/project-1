<?php 
require_once 'db.php';
// 1. Lay data tu form gui sang
$news_id = $_POST['news_id'];
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
$sql = "update news set 
            news_title = '$news_title',
            news_essential = '$news_essential',
            news_content = '$news_content'";
if($avatar != ""){
	$sql .= ",
		news_avatar = '$avatar'";
}
$sql .=	" where news_id = $news_id";
executeQuery($sql);
header('location: news.php');
 ?>