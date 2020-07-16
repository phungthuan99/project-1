<?php
require_once 'db.php';
if (isset($_GET['lesson_id'])) {
    $lesson_id = $_GET['lesson_id'];
    $sql = "select * from lessons where lesson_id = '$lesson_id'";
    $result = executeQuery($sql, true);
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once './_share/head.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include_once './_share/navbar.php'; ?>
        <div class="content-wrapper">
            <div class="content-header">
                <section class="content">
                    <div class="row text-center">
                        <div class="col text-center">
                            <h3>Danh sách</h3>
                        </div>
                        <?php
                        require_once 'db.php';
                        $sql = "select * from setting";
                        $result = executeQuery($sql, true);
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Footer</th>
                                    <th>Sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($result as $u) : ?>
                                    <tr>
                                        <td><img src="<?php echo $u['logo'] ?>" alt="" width="200px" style="background: lightgray"></td>
                                        <td><?php echo $u['address'] ?></td>
                                        <td><?php echo $u['phone'] ?></td>
                                        <td><?php echo $u['email'] ?></td>
                                        <td><?php echo $u['footer'] ?></td>
                                        <td>
                                            <a class="btn btn-danger" href="edit-form-setting.php?setting_id=<?php echo $u['setting_id'] ?>" title="">Sửa</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
        <?php include_once './_share/footer.php'; ?>
    </div>
</body>
<?php include_once './_share/js.php'; ?>

</html>