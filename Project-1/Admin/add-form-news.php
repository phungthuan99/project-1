<!DOCTYPE html>
<html>
<?php
require_once 'db.php';
$sql = "select * from news";
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
                            <h1 class="m-0 text-dark">Thêm tin tức</h1>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 offset-md-3 center">
                                <form action="save-add-news.php" enctype="multipart/form-data" method="post">
                                    <div class="form-group">
                                        <label for="" class="">Ảnh tin tức</label>
                                        <input type="file" name="news_avatar" class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tiêu đề tin tức</label>
                                        <input type="text" name="news_title" class="form-control" value="" placeholder="Tiêu đề tin tức">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Khái quát tin tức</label>
                                        <input type="text" name="news_essential" class="form-control" value="" placeholder="Khái quát tin tức">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nội dung tin tức</label>
                                        <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
                                        <textarea name="news_content" class="form-control" value="" placeholder=""></textarea>
                                        <script>
                                            CKEDITOR.replace('news_content');
                                        </script>
                                    </div>
                                    <div class="form-group offset-md-4 center">
                                        <button type="submit" class="btn btn-success col-md-3 text-center">Thêm</button>
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