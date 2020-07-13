<?php

require_once 'db.php';
$setting_id = $_GET['setting_id'];
$sql = "select * from setting where setting_id = $setting_id";
$data = executeQuery($sql, false);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setting</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="login-form-style">
        <div class="login-form-style-heading">
            <h2 class="login-form-style-heading__title">Sửa setting</h2>
        </div>
        <!--End .login-form-style-heading-->
        <div class="login-form-style-body">
            <form action="save-edit-setting.php" enctype="multipart/form-data" method="post">
                <input type="hidden" name="setting_id" value="<?php echo $data['setting_id'] ?>">
                <div>
                    <label for="">Logo</label>
                    <img src="<?php echo $data['logo'] ?>" width="100%" style="background: lightgray; margin-top: 15px">
                    <input type="file" name="avatar" value="" placeholder=""></input>
                </div>
                <div>
                    <input type="text" name="address" value="<?php echo $data['address'] ?>" placeholder="Địa chỉ"></input>
                </div>
                <div>
                    <input type="text" name="phone" value="<?php echo $data['phone'] ?>" placeholder="Số điện thoại"></input>
                </div>
                <div>
                    <input type="text" name="email" value="<?php echo $data['email'] ?>" placeholder="Email"></input>
                </div>
                <div>
                    <input type="text" name="footer" value="<?php echo $data['footer'] ?>" placeholder="Footer"></input>
                </div>
                <div>
                    <input type="submit" value="Sửa"></input>
                </div>
            </form>
        </div>
        <!--End .login-form-style-body-->
    </div>
    <!--End .login-form-style-->
</body>

</html>