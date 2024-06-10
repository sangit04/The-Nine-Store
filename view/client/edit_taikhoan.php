<?php
// if (is_array($listtaikhoan)) {
//    extract(($listtaikhoan));
// }
?>
<section class="breadcumb py-120 bg-img" style="background-image: url(assets/images/thumbs/15b.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h1 class="breadcumb__title">CẬP NHẬT TÀI KHOẢN</h1>
                    <ul class="breadcumb__list">
                        <li class="breadcumb__item"><a href="index.php" class="breadcumb__link"> <i
                                    class="las la-home"></i> Home</a> </li>
                        <li class="breadcumb__item"> / </li>
                        <li class="breadcumb__item"> <span class="breadcumb__item-text">Cập Nhật Tài Khoản</span> </li>
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
                            <h3 class="account-form__title mb-2">Cập nhật tài khoản </h3>
                            <p class="account-form__desc"></p>
                        </div>
                        <?php
                if (isset($_SESSION['ten_nguoidung']) && (is_array($_SESSION['ten_nguoidung']))) {
                    extract($_SESSION['ten_nguoidung']);
                }
                ?>
                        <form action="index.php?act=edit_taikhoan" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name" class="form--label">Họ tên</label>
                                        <input type="text" name="name" class="form--control" id="name"
                                            placeholder="họ & tên...." value="<?= $name ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="gioi_tinh" class="form--label">Giới tính</label>
                                        <select id="" name="gioi_tinh">
                                            <div class="form-control">
                                                <option value="Nam">Nam</option>
                                                <option value="Nữ">Nữ</option>
                                            </div>
                                            <!-- <input type="text" class="form-control" name="trang_thai" placeholder="nhập trạng thái..."> -->
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="ten_nguoidung" class="form--label"> Tên đăng nhập</label>
                                        <input type="text" name="ten_nguoidung" class="form--control" id="ten_nguoidung"
                                            placeholder=" tên đăng nhập..." value="<?= $ten_nguoidung ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="mat_khau" class="form--label">Mật khẩu</label>
                                        <input type="text" name="mat_khau" class="form--control" id="mat_khau"
                                            placeholder=" mật khẩu..."  value="<?= $mat_khau ?>">
                                    </div>
                                </div>
                                
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="gmail" class="form--label"> Gmail</label>
                                        <input type="text" name="gmail" class="form--control" id="gmail"
                                            placeholder="gmail..." value="<?= $gmail ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="sdt" class="form--label"> Số điện thoại</label>
                                        <input type="text" name="sdt" class="form--control" id="sdt"
                                            placeholder="sđt..." value="<?= $sdt ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="ngay_sinh" class="form--label"> Ngày sinh</label>
                                        <input type="text" name="ngay_sinh" class="form--control" id="ngay_sinh"
                                            placeholder="ngày sinh..." value="<?= $ngay_sinh?>">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="dia_chi" class="form--label"> Địa chỉ</label>
                                        <input type="text" name="dia_chi" class="form--control" id="dia_chi"
                                            placeholder="địa chỉ..." value="<?= $dia_chi ?>">
                                    </div>
                                </div>

                               
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="role" class="form--label">Role</label>
                                        <select id="" name="role">
                                            <div class="form-control">
                                                <option value="0">Khách</option>
                                                <option value="1">Admin</option>
                                            </div>
                                            <!-- <input type="text" class="form-control" name="trang_thai" placeholder="nhập trạng thái..."> -->
                                        </select>
                                        <!-- <input type="text" name="role" class="form--control" id="role"
                                            placeholder="role..."> -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="trang_thai" class="form--label">Trạng thái</label>
                                        <select id="" name="trang_thai"  value="<?= $trang_thai ?>">
                                            <div class="form-control"  value="<?= $trang_thai ?>" >
                                                <option  value="<?= $trang_thai ?>">Hoạt động</option>
                                                <option  value="<?= $trang_thai ?>">Ngưng hoạt động</option>
                                            </div>
                                            <!-- <input type="text" class="form-control" name="trang_thai" placeholder="nhập trạng thái..."> -->
                                        </select>
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
                                    <input type="hidden" name="id_nguoidung" value="<?php if (isset($id_nguoidung)&&($id_nguoidung>0)) echo $id_nguoidung;?>" >
                                        <input type="submit" value="Cập nhật" name="capnhat" class="btn btn--base w-100">
                                    </div>
                                </div>
                                <!-- <div class="col-sm-12">
                                    <div class="have-account text-center">
                                        <p class="have-account__text">Already Have An Account? <a
                                                href="index.php?act=dangnhap"
                                                class="have-account__link text--base">Login Now</a></p>
                                    </div>
                                </div> -->
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