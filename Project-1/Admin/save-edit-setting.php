<?php 
require_once 'db.php';
// 1. Lay data tu form gui sang
$setting_id = $_POST['setting_id'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$footer = $_POST['footer'];
$image = $_FILES['avatar'];
$avatar = "";

// upload anh 
if($image['size'] > 0){ // kiem tra kich co anh
	$filename = uniqid() . "-" . $image['name'];
	move_uploaded_file($image['tmp_name'], 'uploads/' . $filename);
	$avatar = 'uploads/' . $filename;
}
$sql = "update setting set 
            address = '$address',
            phone = '$phone',
            email = '$email',
			footer = '$footer'";
if($avatar != ""){
	$sql .= ",
		logo = '$avatar'";
}
$sql .=	" where setting_id = $setting_id";
executeQuery($sql);
header('location: setting.php');
 ?>