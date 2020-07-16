<?php

require_once 'db.php';
//1. Lấy data từ form gửi sang
$username = $_POST['username'];
$password = md5($_POST['password']);
$image = $_FILES['avatar'];
$avatar = "";

//upload ảnh
if($image['size'] > 0) {  //kiểm tra kích cỡ ảnh
    $filename = uniqid() . "-" . $image['name'];
    move_uploaded_file($image['tmp_name'], 'uploads/' . $filename);
    $avatar = 'uploads/' . $filename;
}

// câu jquery
$sql = "insert into users
            (username, password, avatar, permission_id)
        values 
            ('$username', '$password', '$avatar', '2')";

executeQuery($sql);
header('location: index.php')

?>