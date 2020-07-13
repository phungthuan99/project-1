<!DOCTYPE html>
<html>
<?php
require_once 'db.php';
$news_id = $_GET['news_id'];
$sql = "select * from news where news_id = $news_id";
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
                                <form action="save-edit-news.php" enctype="multipart/form-data" method="post">
                                    <input type="hidden" name="news_id" value="<?php echo $data['news_id'] ?>">
                                    <div class="form-group">
                                        <label for="">Ảnh tin tức</label>
                                        <img src="<?php echo $data['news_avatar'] ?>" width="50px" style="margin: 15px 0 0 0">
                                        <input type="file" name="news_avatar" class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tiêu đề tin tức</label>
                                        <input type="text" name="news_title" class="form-control" value="<?php echo $data['news_title'] ?>" placeholder="Tiêu đề tin tức">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Khái quát tin tức</label>
                                        <input type="text" name="news_essential" class="form-control" value="<?php echo $data['news_essential'] ?>" placeholder="Khái quát tin tức">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nội dung tin tức</label>
                                        <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
                                        <textarea name="news_content" class="form-control" value="<?php echo $data['news_content'] ?>" placeholder=""></textarea>
                                        <script>
                                            CKEDITOR.replace('news_content');
                                        </script>
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