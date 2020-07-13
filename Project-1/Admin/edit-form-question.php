<!DOCTYPE html>
<html>

<?php
require_once 'db.php';
$question_id = $_GET['question_id'];
$sql = "select * from questions where question_id = $question_id";
$data = executeQuery($sql, false);
$sqlExam = "select * from exams";
$examArr = executeQuery($sqlExam, true);
?>

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
                            <h1 class="m-0 text-dark">Sửa bài học</h1>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 offset-md-3 center">
                                <form action="save-edit-question.php" enctype="multipart/form-data" method="post">
                                    <input type="hidden" name="question_id" value="<?php echo $data['question_id'] ?>">
                                    <div class="form-group">
                                        <label for="">Câu hỏi</label>
                                        <input type="text" name="question_name" class="form-control" value="<?php echo $data['question_name'] ?>" placeholder="Tên câu hỏi">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Đáp án A</label>
                                        <input type="text" name="answer_a" class="form-control" value="<?php echo $data['answer_a'] ?>" placeholder="Đáp án A">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Đáp án B</label>
                                        <input type="text" name="answer_b" class="form-control" value="<?php echo $data['answer_b'] ?>" placeholder="Đáp án B">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Đáp án C</label>
                                        <input type="text" name="answer_c" class="form-control" value="<?php echo $data['answer_c'] ?>" placeholder="Đáp án C">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Đáp án D</label>
                                        <input type="text" name="answer_d" class="form-control" value="<?php echo $data['answer_d'] ?>" placeholder="Đáp án C">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Đáp án Đúng</label>
                                        <input type="text" name="correct_answer" class="form-control" value="<?php echo $data['correct_answer'] ?>" placeholder="Câu trả lời">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Đề thi</label>
                                        <select name="exam_id" class="form-control">
                                            <?php foreach ($examArr as $exam) : ?>
                                                <option <?php if ($data['exam_id'] == $exam['exam_id']) : ?> selected <?php endif ?> class="form-control" value="<?php echo $exam['exam_id'] ?>"><?php echo $exam['exam_name'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group offset-md-4 center">
                                        <button type="submit" class="btn btn-success col-md-3 text-center">Sửa</button>
                                        <a href="http://localhost:81/PHP2/Assignment/MVC/category" class="btn btn-danger col-md-3">Hủy</a>
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