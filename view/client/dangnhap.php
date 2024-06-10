<!-- ==================== Breadcumb Start Here ==================== -->
<section class="breadcumb py-120 bg-img" style="background-image: url(assets/images/thumbs/15b.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h1 class="breadcumb__title"> Login</h1>
                    <ul class="breadcumb__list">
                        <li class="breadcumb__item"><a href="index.php" class="breadcumb__link"> <i
                                    class="las la-home"></i> Home</a> </li>
                        <li class="breadcumb__item"> / </li>
                        <li class="breadcumb__item"> <span class="breadcumb__item-text"> Login </span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcumb End Here ==================== -->

<!-- =============account section start here ====================-->
<section class="account py-120">
    <div class="account-inner">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="account-thumb">
                        <img src="assets/images/thumbs/login-img.png" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="account-form">
                        <div class="account-form__content mb-4">
                            <?php
                            if (isset($_SESSION['ten_nguoidung'])) {
                                extract($_SESSION['ten_nguoidung']);
                                ?>
                                <div class="account-form__content mb-4">
                                    Xin chào: <br>
                                    <h3 class="account-form__title mb-2"> "
                                        <?= $ten_nguoidung ?>"
                                    </h3>
                                </div>

                                <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>

                                <li class="form_li"><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                                <?php if ($role == 1) { ?>
                                    <li class="form_li"><a href="../admin/index.php">Đăng nhập ADMIN</a></li>
                                <?php } ?>
                                <?php if ($role == 1) { ?>
                                    <li class="form_li"><a href="index.php?act=listhd">Xem đơn hàng</a></li>
                                <?php }if ($role == 0) { ?>
                                    <li class="form_li"><a href="index.php?act=listhd">Xem đơn hàng</a></li>
                                <?php } ?>

                                <li class="form_li"><a href="index.php?act=thoat">Thoát</a></li>

                                <?php
                            } else {

                                ?>
                                <h3 class="account-form__title mb-2"> Sign In Your Account </h3>
                                <p class="account-form__desc"></p>
                            </div>

                            <form action="index.php?act=dangnhap" method="POST">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email" class="form--label">Tên Đăng Nhập</label>
                                            <input type="text" class="form--control" name="ten_nguoidung" id="ten_nguoidung"
                                                placeholder="Tên đăng nhập...">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="your-password" class="form--label">Password</label>
                                        <div class="form-group">
                                            <input id="your-password" type="password" name="mat_khau"
                                                class="form-control form--control" placeholder="Password">
                                            <div class="password-show-hide fas fa-eye toggle-password fa-eye-slash"
                                                id="#your-password"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="d-flex flex-wrap justify-content-between">
                                            <div class="form--check form-group">
                                                <input class="form-check-input" type="checkbox" value="" id="remember">
                                                <label class="form-check-label" for="remember">Remember me </label>
                                            </div>
                                            <a href="index.php?act=quenmk" class="forgot-password text--base">Forgot Your
                                                Password?</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="submit" value="Đăng nhập" name="dangnhap"
                                                class="btn btn--base w-100">

                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="have-account text-center">
                                            <p class="have-account__text">Don't Have An Account? <a
                                                    href="index.php?act=dangky" class="have-account__link text--base">Create
                                                    Account</a></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================account section end here ========================-->