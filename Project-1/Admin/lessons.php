<!DOCTYPE html>
<html>
<title>Danh sách bài học</title>

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
                        $sql = "select * from lessons";
                        $result = executeQuery($sql, true);
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên đề thi</th>
                                    <th>Chi tiết</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($result as $u) : ?>
                                    <tr>
                                        <td><?php echo $u['lesson_title'] ?></td>
                                        <td><?php echo $u['lesson_essential'] ?></td>
                                        <td>
                                            <a class="btn btn-success" href="edit-form-lesson.php?lesson_id=<?php echo $u['lesson_id'] ?>" title="">Chi tiết</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-warning" href="edit-form-lesson.php?lesson_id=<?php echo $u['lesson_id'] ?>" title="">Sửa</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger" href="remove-lesson.php?lesson_id=<?php echo $u['lesson_id'] ?>" title="">Xóa</a>
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