<!DOCTYPE html>
<html>

<?php

require_once 'db.php';
$sql = "select * from exams";
$result = executeQuery($sql, true);

?>
<title>Thêm câu hỏi</title>

<head>
    <?php include_once './_share/head.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include_once './_share/navbar.php'; ?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12 text-center">
                            <h1 class="m-0 text-dark">Thêm Câu hỏi</h1>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 offset-md-3 center">
                                <form action="save-add-question.php" enctype="multipart/form-data" method="post">
                                    <div class="form-group">
                                        <label for="">Câu số</label>
                                        <input type="number" name="number_question" class="form-control" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tên câu hỏi</label>
                                        <input type="text" name="question_name" class="form-control" value="" placeholder="Tên câu hỏi">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ảnh demo</label>
                                        <input type="file" name="image" class="form-control" value="" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Đáp án A</label>
                                        <input type="text" name="answer_a" class="form-control" value="" placeholder="Đáp án A">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Đáp án B</label>
                                        <input type="text" name="answer_b" class="form-control" value="" placeholder="Đáp án B">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Đáp án C</label>
                                        <input type="text" name="answer_c" class="form-control" value="" placeholder="Đáp án C">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Đáp án D</label>
                                        <input type="text" name="answer_c" class="form-control" value="" placeholder="Đáp án D">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Đáp án Đúng</label>
                                        <input type="text" name="answer_d" class="form-control" value="" placeholder="Câu trả lời">
                                    </div>
                                    <div style="margin: 0 0 15px 0">
                                        <label for="">Đề thi</label>
                                        <select name="exam_id" class="form-control">
                                            <?php foreach ($result as $exam) : ?>
                                                <option value="<?php echo $exam['exam_id'] ?>"><?php echo $exam['exam_name'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 offset-md-5 center form-group">
                                        <button type="submit" class="btn btn-success">Tạo</button>&nbsp;
                                        <a href="http://localhost:81/PHP2/Assignment/MVC/category" class="btn btn-danger">Hủy</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php include_once './_share/footer.php'; ?>
    </div>
</body>
<?php include_once './_share/js.php'; ?>

</html>