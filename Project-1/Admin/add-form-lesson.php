<!DOCTYPE html>
<html>
<?php
require_once 'db.php';
$sql = "select * from lessons";
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
                            <h1 class="m-0 text-dark">Thêm Bài học</h1>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 offset-md-3 center">
                                <form action="save-add-lesson.php" enctype="multipart/form-data" method="post">
                                    <div>
                                        <label for="">Tên bài học<span class="text-danger">*</span></label>
                                        <input type="text" name="lesson_title" value="" class="form-control" placeholder="Tiêu đề bài học">
                                    </div>
                                    <div>
                                        <label for="">Khái quát bài học</label>
                                        <input type="text" name="lesson_essential" class="form-control" placeholder="Khái quát bài học">
                                    </div>
                                    <div style="margin: 0 0 15px 0">
                                        <label for="">Nội dung</label>
                                        <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
                                        <textarea name="lesson_content"></textarea>
                                        <script>
                                            CKEDITOR.replace('lesson_content');
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success col-md-2 text-center">Thêm</button>
                                        <a href="http://localhost:81/PHP2/Assignment/MVC/category" class="btn btn-danger col-md-2">Hủy</a>
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