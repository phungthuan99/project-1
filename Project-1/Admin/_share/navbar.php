<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../Front-End/index.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dự án 1 - Tin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="./index.php" class="d-block">Project 1 - Group 11</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item has-treeview">
                    <a href="./exams.php" class="nav-link">
                        <i class="fas fa-bookmark">&nbsp;</i>
                        <p>
                            Đề Thi
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="exams.php" class="nav-link">
                                <i class="fas fa-list nav-icon">&nbsp;</i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./add-form-exam.php" class="nav-link">
                                <i class="fas fa-plus-circle">&nbsp;</i>
                                <p>Thêm </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--  -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-question">&nbsp;</i>
                        <p>
                            Câu Hỏi
                            <i class="fas fa-angle-left right">&nbsp;</i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./questions.php" class="nav-link">
                                <i class="fas fa-list nav-icon">&nbsp;</i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./add-form-question.php" class="nav-link">
                                <i class="fas fa-plus-circle">&nbsp;</i>
                                <p>Thêm </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!--  -->
                <li class="nav-item has-treeview">
                    <a href="./questions.php" class="nav-link">
                        <i class="fas fa-book-open">&nbsp;</i>
                        <p>
                            Bài Học
                            <i class="fas fa-angle-left right">&nbsp;</i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./lessons.php" class="nav-link">
                                <i class="fas fa-list nav-icon">&nbsp;</i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="add-form-lesson.php" class="nav-link">
                                <i class="fas fa-plus-circle">&nbsp;</i>
                                <p>Thêm </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="news.php" class="nav-link">
                        <i class="	fas fa-newspaper">&nbsp;</i>
                        <p>
                            Tin Tức
                            <i class="fas fa-angle-left right">&nbsp;</i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="news.php" class="nav-link">
                                <i class="fas fa-list nav-icon">&nbsp;</i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="add-form-news.php" class="nav-link">
                                <i class="fas fa-plus-circle">&nbsp;</i>
                                <p>Thêm </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="fa fa-comment">&nbsp;</i>
                        <p>
                            Bình Luận
                            <i class="fas fa-angle-left right">&nbsp;</i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="comment.php" class="nav-link">
                                <i class="fas fa-list nav-icon">&nbsp;</i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fas fa-plus-circle">&nbsp;</i>
                                <p>Thêm </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-cog">&nbsp;</i>
                        <p>
                            Cài Đặt Chung
                            <i class="fas fa-angle-left right">&nbsp;</i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="setting.php" class="nav-link">
                                <i class="fas fa-list nav-icon">&nbsp;</i>
                                <p>Danh sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fas fa-plus-circle">&nbsp;</i>
                                <p>Thêm </p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</nav>