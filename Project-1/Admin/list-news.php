<?php
require_once 'db.php';
if (isset($_GET['lesson_id'])) {
    $lesson_id = $_GET['lesson_id'];
    $sql = "select * from lessons where lesson_id = '$lesson_id'";
    $result = executeQuery($sql, true);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết bài học</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main-extra.css">
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
                <!--End .main-nav__logo-->
                <div class="form-search">
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
                                <a href="login.php"><i class="fas fa-user"></i></a>
                                <span><a href="login.php">Đăng nhập</a></span>
                            </div>
                            <!--End .user-log-in-->
                        </div>
                        <!--End .col-->
                        <div class="col">
                            <div class="user-log-out">
                                <a href="registration.php"><i class="fas fa-user-plus"></i></a>
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

    <section class="main-nav-bottom" style="background-color: black">
        <div class="container">
            <ul class="main-nav-bottom__list">
                <li class="main-nav-bottom__item"><a href="index.php" class="main-nav-bottom__link">TRANG CHỦ</a></li>
                <li class="main-nav-bottom__item"><a href="introduce.php" class="main-nav-bottom__link">GIỚI THIỆU</a></li>
                <li class="main-nav-bottom__item"><a href="" class="main-nav-bottom__link">KHÓA HỌC Ô TÔ</a></li>
                <li class="main-nav-bottom__item"><a href="" class="main-nav-bottom__link">ĐỀ THI</a></li>
                <li class="main-nav-bottom__item"><a href="list-news.php" class="main-nav-bottom__link">TIN TỨC</a></li>
                <li class="main-nav-bottom__item"><a href="contact.php" class="main-nav-bottom__link">LIÊN HỆ</a></li>
            </ul>
        </div>
        <!--End .container-->
    </section>

    <section class="learning-theory" style="background-color: red">
        <div class="container">
            <div class="heading">
                <h4 class="heading__title">TIN TỨC</h4>
            </div>
            <!--End .heading-->
            <div class="body">
                <?php
                require_once 'db.php';
                $sql = "select * from news";
                $result = executeQuery($sql, true);
                ?>
                <div class="row">
                    <?php foreach ($result as $u) : ?>
                        <div class="col">
                            <a href="detail-news.php">
                                <img src="<?php echo $u['news_avatar'] ?>" alt="" width="100%">
                            </a>
                        </div>
                        <!--End .col-->
                        <div class="col">
                            <a href="detail-news.php" style="text-decoration: none; color: #000; font-size: 30px">
                                <?php echo $u['news_title'] ?>
                            </a>
                            <p><?php echo $u['news_essential'] ?></p>
                        </div>
                        <!--End .col-->
                    <?php endforeach ?>
                </div>
                <!--End .row-->
            </div>
            <!--End .body-->
        </div>
        <!--End .container-->
    </section>
    <footer style="background-color: red">
        <div class="container" style="background-color: red">
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
                                    <a href="news.html">Điều kiện thi bằng lái xe B2 mới nhất mà bạn nên biết khi thi bằng lái xe ô tô</a>
                                </span>
                            </div>
                            <!--End .content-footer-body__meta-->
                            <div class="content-footer-body__meta">
                                <span><i class="far fa-address-book"></i>
                                    <a href="news.html">Những quy định mới nhất về điều kiện đào tạo lái xe ô tô</a>
                                </span>
                            </div>
                            <!--End .content-footer-body__meta-->
                            <div class="content-footer-body__meta">
                                <span><i class="far fa-address-book"></i>
                                    <a href="news.html">Mẹo lái xe an toàn cho người mới học lái xe ô tô tại Việt Thanh</a>
                                </span>
                            </div>
                            <!--End .content-footer-body__meta-->
                        </div>
                        <!--End .content-footer-body-->
                    </div>
                    <!--End .col-->
                    <div class="col">
                        <div class="content-footer-heading">
                            <h3 class="content-footer-heading__title">HƯỚNG DẪN HỌC</h3>
                        </div>
                        <!--End .content-footer-heading-->

                    </div>
                    <!--End .col-->
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