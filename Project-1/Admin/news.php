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
                        $sql = "select * from news";
                        $result = executeQuery($sql, true);
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tiêu đề</th>
                                    <th>Ảnh</th>
                                    <th>Khái quát</th>

                                    <th>Chi tiết</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($result as $u) : ?>
                                    <tr>
                                        <td><?php echo $u['news_id'] ?></td>
                                        <td><?php echo $u['news_title'] ?></td>
                                        <td><img src="<?php echo $u['news_avatar'] ?>" alt="" width="50px"></td>
                                        <td><?php echo $u['news_essential'] ?></td>
                                        <td>
                                            <a class="btn btn-success" href="detail-form-news.php?news_id=<?php echo $u['news_id'] ?>">Chi tiết</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-warning" href="edit-form-news.php?news_id=<?php echo $u['news_id'] ?>" title="">Sửa</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger" href="remove-news.php?news_id=<?php echo $u['news_id'] ?>" title="">Xóa</a>
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