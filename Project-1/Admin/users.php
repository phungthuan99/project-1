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
                        $sql = "select  u.*, 
                                            d.permission_name as permission_name 
                                    from users u 
                                    join permissions d 
                                        on u.permission_id = d.permission_id";
                        $result = executeQuery($sql, true);
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên tài khoản</th>
                                    <th>Ảnh đại diện</th>
                                    <th>Quyền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($result as $u) : ?>
                                    <tr>
                                        <td><?php echo $u['id'] ?></td>
                                        <td><?php echo $u['username'] ?></td>
                                        <td><img src="<?php echo $u['avatar'] ?>" alt="" width="200px"></td>
                                        <td><?php echo $u['permission_name'] ?></td>
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