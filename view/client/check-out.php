

<!-- ==================== Breadcumb Start Here ==================== -->
<section class="breadcumb py-120 bg-img" style="background-image: url(assets/images/thumbs/breadcumb-img.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h1 class="breadcumb__title"> THANH TOÁN </h1>
                    <ul class="breadcumb__list">
                        <li class="breadcumb__item"><a href="index.php" class="breadcumb__link"> <i class="las la-home"></i> Home</a> </li>
                        <li class="breadcumb__item"> / </li>
                        <li class="breadcumb__item"> <span class="breadcumb__item-text"> THANH TOÁN  </span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcumb End Here ==================== -->

<!-- =================check out section start here ===================-->

<div class="checkout-section py-120">
    <form action="index.php?act=pay" method="post" class="container">
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="billing-details">
                    <h5 class="billing-details__title">CHI TIẾT THANH TOÁN </h5>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                            <!-- <div class="form-group">
                                <label for="country" class="form--label">Country / Region<span class="required">*</span></label>
                                <input required type="text" name="country" class="form--control" id="country" >
                            </div> -->
                                <label for="country" class="form--label"> QUỐC GIA / KHU VỰC<span class="required">*</span></label>
                                <select class="select" name="country" aria-label="Default select example" id="country">
                                    <option selected>CHỌN QUỐC GIA</option>
                                    <option value="1">Việt Nam </option>
                                    <option value="2"> Khác </option>
                                    <!-- <option value="3">   </option> -->
                                  </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="first-name" class="form--label">TÊN<span class="required">*</span></label>
                                <input required type="text" name="firt_name" class="form--control" id="first-name" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="last-name" class="form--label">HỌ<span class="required">*</span></label>
                                <input required type="text" name="last_name" class="form--control" id="last-name">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="address" class="form--label"> ĐỊA CHỈ<span class="required">*</span></label>
                                <input required type="text" name="address" class="form--control" placeholder="House number and street name" id="address" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="city" class="form--label"> THÀNH PHỐ </label>
                                <select class="select" name="city" aria-label="Default select example" id="city">
                                    <option selected>CHỌN THÀNH PHỐ </option>
                                    <option value="1">Nam Định</option>
                                    <option value="2">Hà Nội</option>
                                    <option value="3">TP.HCM</option>
                                    <option value="4">Quảng Ninh</option>
                                    <option value="5">Thanh Hóa</option>
                                    <option value="6">Hưng Yên</option>
                                    <option value="6">Khác...</option>
                                  </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="number" class="form--label">MÃ BƯU ĐIỆN </label>
                                <input required type="number" name="pos_code" class="form--control" placeholder="Ex 123" id="number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tel" class="form--label"> SỐ ĐIỆN THOẠI </label>
                                <input required type="tel" name="tel" class="form--control" id="tel">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email" class="form--label">ĐỊA CHỈ EMAIL </label>
                                <input required type="email" name="email" class="form--control" id="email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group form--check">
                                <input class="form-check-input" type="checkbox" value="" id="ship" checked>
                                <label class="form-check-label" for="ship">
                                  GỬI ĐẾN MỘT ĐỊA CHỈ KHÁC ?
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="ordernote" class="form--label"> GHI CHÚ ĐƠN HÀNG </label>
                                <textarea class="form--control" id="ordernote" name="note" rows="3" placeholder="Type your note"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="billing-details__button d-flex flex-wrap justify-content-between align-items-center">
                                <a href="product-category.php" class="btn btn--base pill billing-details__button-margin">TIẾP TỤC MUA SẮM</a>
                                <a href="index.php?act=view_cart" class="color-style">QUAY LẠI GIỎ HÀNG</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="your-order">
                    <h6 class="your-order__title">Đơn Hàng Của Bạn</h6>
                    <?php
                        $tong = 0;
                        foreach($listgiohang as $sp){
                            extract($sp);
                            $tong_gia = $gia_sp * $so_luong;
                            $tong += $tong_gia;
                            echo '
                            <div class="order d-flex justify-content-between align-items-center">
                                <ul class="order-title">
                                    <li class="order-title__one">'.$ten_sp.'</li>
                                    <li class="order-title__one">X '.$so_luong.'</li>
                                </ul>
                                <span class="order__number">'.$tong_gia.'$</span>
                            </div>
                            ';
                        }
                    ?>
                    
                    
                    <div class="order d-flex justify-content-between align-items-center">
                        <ul class="order-title">
                            <li class="order-title__one">Tổng phụ</li>
                        </ul>
                        <span class="order__number"><?=$tong?>$</span>
                    </div>
                    <div class="order d-flex justify-content-between align-items-center">
                        <ul class="order-title">
                            <li class="order-title__one">Giao Hàng </li>
                        </ul>
                        <div class="order-radio">
                             
                              <div class="form--radio mb-2 style-two">
                                <label class="form-check-label" for="shipping">
                                  Nhận hàng tại cửa hàng
                                </label>
                                <input class="form-check-input" type="radio" name="flexRadioDefault2" id="shipping" checked>
                              </div>
                              <div class="form--radio style-two">
                                <label class="form-check-label" for="pickup">
                                    Nhận hàng tận nơi
                                </label>
                                <input class="form-check-input" type="radio" name="flexRadioDefault2" id="pickup" checked>
                              </div>
                        </div>
                    </div>
                    <div class="order d-flex justify-content-between align-items-center">
                        <ul class="order-title">
                            <li class="order-title__one"> Tổng cộng </li>
                        </ul>
                        <span class="order__number"><?=$tong?>$</span>
                        <input type="hidden" name="total" value="<?=$tong?>">
                    </div>
                    <div class="order-system">
                        <div class="form--radio mb-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="transfer" checked>
                            <label class="form-check-label" for="transfer">
                            Chuyển khoản trực tiếp
                            </label>
                          </div>
                          <div class="form--radio mb-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="payments" checked>
                            <label class="form-check-label" for="payments">
                            Kiểm tra thanh toán
                            </label>
                          </div>
                          <p class="order-system__text mb-2">
                          Vui lòng gửi séc đến Tên cửa hàng, Đường cửa hàng, Thị trấn cửa hàng, Tiểu bang / Quận của cửa hàng, Mã bưu điện của cửa hàng.
                          </p>
                          <div class="form--radio">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="delivery" checked>
                            <label class="form-check-label" for="delivery">
                            Thanh toán khi giao hàng
                            </label>
                          </div>
                    </div>
                    <p class="your-order__desc">
                    Dữ liệu cá nhân của bạn sẽ được sử dụng để xử lý đơn đặt hàng, hỗ trợ trải nghiệm của bạn trên trang web này và cho các mục đích khác được mô tả trong phần của chúng tôi.
                    </p>
                    <a href="index.php" class="your-order__desc-link">Chính sách bảo mật.</a>
                    <div class="form--check">
                        <input class="form-check-input" type="checkbox" value="" id="condition" checked>
                        <label class="form-check-label" for="condition">
                        Tôi đã đọc và đồng ý với <a href="index.php" class="order-system__link">  các điều khoản và điều kiện của trang web </a>
                        </label>
                    </div>
                    <div class="place-order">
                        <input type="submit" value="ĐẶT HÀNG NGAY " name="submit"  class="btn btn--base pill w-100">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- =================checkout section end here===================== -->
<!--============================feature section start here =======================-->
<div class="feature-section bg-img py-60" style="background-image: url(assets/images/thumbs/feature/feature-img.png);">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-3 col-sm-6 col-xxsm-6">
                <div class="feature-item">
                    <div class="feature-item__thumb">
                        <img src="assets/images/thumbs/feature/f04.png" alt="">
                    </div>
                    <div class="feature-item__info">
                        <h5 class="feature-item__title">
                            FREE SHIPPING
                        </h5>
                        <span class="feature-item__payment"> For All Order Over $99 </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xxsm-6">
                <div class="feature-item">
                    <div class="feature-item__thumb">
                        <img src="assets/images/thumbs/feature/f03.png" alt="">
                    </div>
                    <div class="feature-item__info">
                        <h5 class="feature-item__title">
                            FRIENDLY SUPPORT
                        </h5>
                        <span class="feature-item__payment"> 24/7 Customer Support </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xxsm-6">
                <div class="feature-item">
                    <div class="feature-item__thumb">
                        <img src="assets/images/thumbs/feature/f02.png" alt="">
                    </div>
                    <div class="feature-item__info">
                        <h5 class="feature-item__title">
                            SECURE PAYMENT
                        </h5>
                        <span class="feature-item__payment">100%  Secure Payment</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xxsm-6">
                <div class="feature-item">
                    <div class="feature-item__thumb">
                        <img src="assets/images/thumbs/feature/f01.png" alt="">
                    </div>
                    <div class="feature-item__info">
                        <h5 class="feature-item__title">
                            SHIPPING & RETURN
                        </h5>
                        <span class="feature-item__payment"> within 30days For Refund </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ==========================feature setion end here ============================-->



