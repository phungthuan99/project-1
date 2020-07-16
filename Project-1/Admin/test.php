<!DOCTYPE html>
<html>

<?php

require_once 'db.php';
$exam_id = $_GET['exam_id'];
$sql = "select * from exams where exam_id = $exam_id";
$data = executeQuery($sql, false);

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
                                <form action="save-edit-exam.php" enctype="multipart/form-data" method="post">
                                    <input type="hidden" name="exam_id" value="<?php echo $data['exam_id'] ?>">
                                    <div>
                                        <input type="text" name="exam_name" value="<?php echo $data['exam_name'] ?>" placeholder="">
                                    </div>
                                    <div>
                                        <input type="submit" value="Sửa"></input>
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