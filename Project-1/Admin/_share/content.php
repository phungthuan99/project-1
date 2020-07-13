<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <?php
                            require_once 'db.php';
                            $sql = "select * from exams";
                            $result = executeQuery($sql, true);
                            ?>
                            <h3>
                                <?php echo count($result) ?>
                            </h3>

                            <p>Đề thi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-bookmark"></i>
                        </div>
                        <a href="exams.php" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <?php
                            require_once 'db.php';
                            $sql = "select * from questions";
                            $result = executeQuery($sql, true);
                            ?>
                            <h3>
                                <?php echo count($result) ?>
                            </h3>

                            <p>Câu Hỏi</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-question"></i>
                        </div>
                        <a href="questions.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <?php
                            require_once 'db.php';
                            $sql = "select * from lessons";
                            $result = executeQuery($sql, true);
                            ?>
                            <h3>
                                <?php echo count($result) ?>
                            </h3>

                            <p>Bài Học</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <a href="lessons.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <?php
                            require_once 'db.php';
                            $sql = "select * from news";
                            $result = executeQuery($sql, true);
                            ?>
                            <h3>
                                <?php echo count($result) ?>
                            </h3>

                            <p>Tin Tức</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <a href="news.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>


                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <?php
                            require_once 'db.php';
                            $sql = "select * from exams";
                            $result = executeQuery($sql, true);
                            ?>
                            <h3>
                                <?php echo count($result) ?>
                            </h3>

                            <p>Bình luận</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-comment"></i>
                        </div>
                        <a href="comments.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>