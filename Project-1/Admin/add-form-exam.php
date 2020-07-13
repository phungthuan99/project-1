<!DOCTYPE html>
<html>
<?php
require_once 'db.php';
$sql = "select * from exams";
$result = executeQuery($sql, true);
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
                            <h1 class="m-0 text-dark">Thêm Đề thi</h1>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 offset-md-3 center">
                                <form action="save-add-exam.php" enctype="multipart/form-data" method="post">
                                    <div class="form-group">
                                        <label for="">Tên đề thi<span class="text-danger">*</span></label>
                                        <input type="text" name="exam_name" class="form-control" placeholder="Nhập tên đề thi">
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