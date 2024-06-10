<?php 
// include("header.php");
?>
<!-- \==================== Breadcumb Start Here ==================== -->
<section class="breadcumb py-120 bg-img" style="background-image: url(assets/images/thumbs/15b.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h1 class="breadcumb__title">ĐĂNG KÝ TÀI KHOẢN</h1>
                    <ul class="breadcumb__list">
                        <li class="breadcumb__item"><a href="index.php" class="breadcumb__link"> <i
                                    class="las la-home"></i> Home</a> </li>
                        <li class="breadcumb__item"> / </li>
                        <li class="breadcumb__item"> <span class="breadcumb__item-text">Đăng Ký </span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcumb End Here ==================== -->

<section class="account py-120">
    <div class="account-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="account-thumb">
                        <img src="assets/images/thumbs/login-img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="account-form">
                        <div class="account-form__content mb-4">
                            <h3 class="account-form__title mb-2"> Sign Up Your Account </h3>
                            <p class="account-form__desc"></p>
                        </div>
                        <form action="index.php?act=dangky" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name" class="form--label"> Name</label>
                                        <input type="text" name="ten_nguoidung" class="form--control" id="ten_dangnhap"
                                            placeholder=" Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="sdt" class="form--label">Số điện thoại</label>
                                        <input type="text" class="form--control" name="sdt" id="username" placeholder="Sdt">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="email" class="form--label">Email Address</label>
                                        <input type="text" name="gmail" class="form--control" id="gmail"
                                            placeholder=" Nhập email address...">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="your-password" class="form--label">Password</label>
                                    <div class="form-group">
                                        <input id="your-password" type="password" class="form-control form--control"
                                        placeholder="Nhập password" name="mat_khau">
                                        <div class="password-show-hide fas fa-eye toggle-password fa-eye-slash"
                                            id="#your-password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="confirm-password" class="form--label">Confirm Password</label>
                                    <div class="form-group">
                                        <input id="confirm-password" type="password" class="form-control form--control"
                                        placeholder="Nhập lại password" name="mat_khau">
                                        <div class="password-show-hide fas fa-eye toggle-password fa-eye-slash"
                                            id="#confirm-password"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form--check form-group">
                                        <input class="form-check-input" type="checkbox" value="" id="remember">
                                        <div class="form-check-label">
                                            <label class="" for="remember"> I agree with Licences Info,</label>
                                            <a href="#" class="text--base">Terms of Service</a>
                                            <label class="" for="remember"> , Privacy Policy </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <input type="submit" value="Đăng Ký" name="dangky" class="btn btn--base w-100">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="have-account text-center">
                                        <p class="have-account__text">Already Have An Account? <a href="index.php?act=dangnhap"
                                                class="have-account__link text--base">Login Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <h2 style="color: red;" class="thongbao">
                            <?php

                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }

                            ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
// include("footer.php");
?>