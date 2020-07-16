<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header style="background-color: red">
        <div class="container">
            <div class="main-nav">
                <div class="main-nav__logo">
                    <?php
                    require_once 'db.php';
                    $sql = "select * from setting";
                    $result = executeQuery($sql, true);
                    ?>
                    <a href="index.php">
                        <?php foreach ($result as $u) : ?>
                            <img src="<?php echo $u['logo'] ?>" alt="" width="100px">
                        <?php endforeach ?>
                    </a>
                </div>
                <!--End .main-nav__logo--> <img src="images/233232233232.png" style="height: 50px">
                <div class="form-search" style="margin: 0px;
    padding-left: 320px;">
                    <form action="">
                        <input type="text" placeholder="Nhập từ khóa tìm kiếm ..." class="form-search__input">
                        <button class="form-search__btn"><i class="fas fa-search"></i></button>
                    </form>

                </div>
                <!--End .form-search-->
                <div class="user">
                    <div class="row">
                        <div class="col">
                            <div class="user-log-in">
                                <a href="login.php"></a>
                                <span><a href="login.php">Đăng nhập</a></span>
                            </div>
                            <!--End .user-log-in-->
                        </div>
                        <!--End .col-->
                        <div class="col">
                            <div class="user-log-out">
                                <a href="registration.php"></a>
                                <span><a href="registration.php">Đăng ký</a></span>
                            </div>
                            <!--End .user-log-out-->
                        </div>
                        <!--End .col-->
                    </div>
                    <!--End .row-->
                </div>
                <!--End .user-->
            </div>
            <!--End .main-nav-->
        </div>
        <!--End .container-->
    </header>

    <section class="main-nav-bottom" style="background-color:#000;">
        <div class="container">
            <ul class="main-nav-bottom__list">
                <li class="main-nav-bottom__item"><a href="index.php" class="main-nav-bottom__link">TRANG CHỦ</a></li>
                <li class="main-nav-bottom__item"><a href="introduce.php" class="main-nav-bottom__link">GIỚI THIỆU</a></li>
                <li class="main-nav-bottom__item"><a href="" class="main-nav-bottom__link">KHÓA HỌC Ô TÔ</a></li>
                <li class="main-nav-bottom__item"><a href="mock-test.php" class="main-nav-bottom__link">ĐỀ THI</a></li>

                <li class="main-nav-bottom__item"><a href="contact.php" class="main-nav-bottom__link">LIÊN HỆ</a></li>
            </ul>
        </div>
        <!--End .container-->
    </section>

    <section class="banner">
        <img src="images/anh.jpg" alt="" class="banner__img" style="height: 500px;" width="400px;">
    </section>

    <section class="learning-theory" style="background-color: #fff">
        <div class="container">
            <div class="learning-theory-heading" style="color: #000">
                <h4 class="learning-theory-heading__title"> Bài Học</h4>
            </div>
            <hr>
            <!--End .learning-theory-heading-->
            <div class="learning-theory-body">
                <?php
                require_once 'db.php';
                $sql = "select * from lessons";
                $result = executeQuery($sql, true);
                ?>
                <div class="row">
                    <?php foreach ($result as $u) : ?>
                        <div class="col">
                            <h3 class="learning-theory-body__title"><?php echo $u['lesson_title'] ?></h3>
                            <p style="text-align: justify"><?php echo $u['lesson_essential'] ?></p>
                            <button class="learning-theory-body__btn"><a href="detail-lesson.php?lesson_id=<?php echo $u['lesson_id'] ?>" style="text-decoration: none; color: #000">Tìm hiểu thêm</a></button>
                        </div>
                        <!--End .col-->
                    <?php endforeach ?>
                </div>
                <!--End .row-->
            </div>
            <!--End .learning-theory-body-->
        </div>
        <!--End .container-->
    </section>

    <section class="news">
        <div class="container">
            <div class="news-heading">
                <h4 class="news-heading__title">TIN TỨC</h4>
            </div>
            <!--End .news-heading-->
            <div class="news-body">
                <?php
                require_once 'db.php';
                $sql = "select * from news";
                $result = executeQuery($sql, true);
                ?>
                <div class="row">
                    <?php foreach ($result as $u) : ?>
                        <div class="col">
                            <img src="<?php echo $u['news_avatar'] ?>" alt="" class="news-body__img">
                            <h5 class="news-body-title"><?php echo $u['news_title'] ?></h5>
                            <p class="news-body-content"><?php echo $u['news_essential'] ?></p>
                            <button class="news-body-btn">
                                <a href="detail-news.php">Đọc thêm</a>
                            </button>
                        </div>
                        <!--End .col-->
                    <?php endforeach ?>
                </div>
                <!--End .row-->
            </div>
            <!--End .news-body-->
        </div>
        <!--End .container-->
    </section>

    <section class="video" style="background-color:#000">
        <div class="container">
            <div class="video-heading">
                <h4 class="video-heading-title">Quy Trình Học</h4>
            </div>
            <!--End .video-heading-->
            <div class="video-body">
                <div class="row">
                    <!--End .col-->
                    <div class="col">
                        <h4 style="margin: 0">Đăng ký học lái xe online</h4>
                        <p style="font-size: 15px">Đăng ký học lái xe ô tô Online tại from đăng ký, trong vòng 30 phút tư vấn viên của trung tâm sẽ
                            liên hệ tư vấn và giải đáp thắc mắc trước khi bạn chính thức đăng ký.</p>
                        <h4 style="margin: 0">Hoàn thiện thời gian</h4>
                        <p style="font-size: 15px">Sau khi được tư vấn chi tiết bạn chỉ cần mang chứng minh thư đến trung tâm để hoàn thiện hồ sơ và
                            nộp lệ phí học lái xe ô tô.</p>
                        <h4 style="margin: 0">Thi chứng chỉ và cấp bằng</h4>
                        <p style="font-size: 15px">Sau khoảng 3 tháng học lái xe, các bạn sẽ được xếp lịch đi thi cấp bằng lái xe ô tô của Sở GTVT
                            thành phố Hà Nội.</p>
                        <h4 style="margin: 0">Chọn lịch học ngay</h4>
                        <p style="font-size: 15px">Sau khi hoàn thiện hồ sơ, trung tâm sẽ sắp xếp lịch học phù hợp với thời gian của bạn, bạn cũng
                            có thể học ngay tại sân tập của Trung Tâm.</p>
                    </div>
                    <!--End .col-->
                </div>
                <!--End .row-->
            </div>
            <!--End .video-body-->
        </div>
        <!--End .container-->
    </section>

    <footer style="background-color: red">
        <div class="container">
            <div class="content-footer">
                <div class="row">
                    <div class="col">
                        <div class="content-footer-heading">
                            <h3 class="content-footer-heading__title">TIN TỨC MỚI NHẤT</h3>
                        </div>
                        <!--End .content-footer-heading-->
                        <div class="content-footer-body">
                            <div class="content-footer-body__meta">
                                <span><i class="far fa-address-book"></i>
                                    <a href="detail-news.php">Điều kiện thi bằng lái xe B2 mới nhất mà bạn nên biết khi thi bằng lái xe ô tô</a>
                                </span>
                            </div>
                            <!--End .content-footer-body__meta-->
                            <div class="content-footer-body__meta">
                                <span><i class="far fa-address-book"></i>
                                    <a href="detail-news.php">Những quy định mới nhất về điều kiện đào tạo lái xe ô tô</a>
                                </span>
                            </div>
                            <!--End .content-footer-body__meta-->
                            <div class="content-footer-body__meta">
                                <span><i class="far fa-address-book"></i>
                                    <a href="detail-news.php">Mẹo lái xe an toàn cho người mới học lái xe ô tô tại Việt Thanh</a>
                                </span>
                            </div>
                            <!--End .content-footer-body__meta-->
                        </div>
                        <!--End .content-footer-body-->
                    </div>
                    <div class="col">
                        <div class="content-footer-heading">
                            <h3 class="content-footer-heading__title">HƯỚNG DẪN HỌC</h3>
                        </div>
                        <!--End .content-footer-heading-->

                        <!--End .content-footer-body-->
                    </div>
                    <div class="col">
                        <div class="content-footer-heading">
                            <h3 class="content-footer-heading__title">THÔNG TIN LIÊN HỆ</h3>
                        </div>
                        <!--End .content-footer-heading-->
                        <div class="content-footer-body">
                            <?php
                            require_once 'db.php';
                            $sql = "select * from setting";
                            $result = executeQuery($sql, true);
                            ?>
                            <div class="content-footer-body__meta">
                                <span><i class="fas fa-map-marker-alt"></i>
                                    <?php foreach ($result as $u) : ?>
                                        Trụ sở: <?php echo $u['address'] ?>
                                    <?php endforeach ?>
                                </span>
                            </div>
                            <!--End .content-footer-body__meta-->
                            <div class="content-footer-body__meta">
                                <span><i class="fas fa-phone"></i>
                                    Hotline: 1900.0186
                                </span>
                            </div>
                            <!--End .content-footer-body__meta-->
                            <div class="content-footer-body__meta">
                                <span><i class="fas fa-mobile-alt"></i>
                                    <?php foreach ($result as $u) : ?>
                                        Số điện thoại: <?php echo $u['phone'] ?>
                                    <?php endforeach ?>
                                </span>
                            </div>
                            <!--End .content-footer-body__meta-->
                            <div class="content-footer-body__meta">
                                <span><i class="far fa-envelope"></i>
                                    <?php foreach ($result as $u) : ?>
                                        Email: <?php echo $u['email'] ?>
                                    <?php endforeach ?>
                                </span>
                            </div>
                            <!--End .content-footer-body__meta-->
                        </div>
                        <!--End .content-footer-body-->
                    </div>
                    <!--End .col-->
                </div>
                <!--End .row-->
            </div>
            <!--End .content-footer-->
        </div>
        <!--End .container-->
    </footer>

    <section class="footer-bottom">
        <?php
        require_once 'db.php';
        $sql = "select * from setting";
        $result = executeQuery($sql, true);
        ?>
        <div class="footer-bottom__meta">
            <?php foreach ($result as $u) : ?>
                <span><?php echo $u['footer'] ?></span>
            <?php endforeach ?>
        </div>
        <!--End .footer-bottom__meta-->
    </section>
</body>

</html>