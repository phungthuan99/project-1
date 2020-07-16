<!DOCTYPE html>
<html>
<title>Danh sách câu hỏi</title>

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
                        $sql = "select  u.*, d.exam_name as exam_name 
                                    from questions u 
                                    join exams d 
                                        on u.exam_id = d.exam_id";
                        $result = executeQuery($sql, true);
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Câu hỏi</th>
                                    <!-- <th>Đáp án A</th>
                                    <th>Đáp án B</th>
                                    <th>Đáp án C</th>
                                    <th>Đề thi</th> -->
                                    <th>Chi tiết</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($result as $u) : ?>
                                    <tr>
                                        <td><?php echo $u['question_name'] ?></td>
                                        <td>
                                            <a class="btn btn-success" href="detail-form-question.php?question_id=<?php echo $u['question_id'] ?>">Chi tiết</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-warning" href="edit-form-question.php?question_id=<?php echo $u['question_id'] ?>" title="">Sửa</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger" href="remove-question.php?question_id=<?php echo $u['question_id'] ?>" title="">Xóa</a>
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