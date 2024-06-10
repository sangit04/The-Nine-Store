<!-- ==================== Breadcumb Start Here ==================== -->
<section class="breadcumb py-120 bg-img" style="background-image: url(assets/images/thumbs/breadcumb-img.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h1 class="breadcumb__title"> Giỏ Hàng Của Bạn</h1>
                    <ul class="breadcumb__list">
                        <li class="breadcumb__item"><a href="index.php" class="breadcumb__link"> <i
                                    class="las la-home"></i>Trang chủ</a> </li>
                        <li class="breadcumb__item"> / </li>
                        <li class="breadcumb__item"> <span class="breadcumb__item-text"> Giỏ Hàng Của Bạn </span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcumb End Here ==================== -->

<!-- ================cart-section start here================ -->
<div class="cart-section py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h3 class="section-heading__title style-two">Các sản phẩm trong giỏ hàng của bạn<span
                            class="section-heading__bars"></span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <form method="post" action="#" class="col-lg-12">

                <?php
                if (isset($listgiohang)) {
                    if (is_array($listgiohang) && $listgiohang != null) {
                        echo '
                            <table class="table table--responsive--lg cart-table">
                                <thead>
                                    <tr>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Tổng giá</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                            ';
                        $tong = 0;
                        $hinhpath = "../upload/";
                        foreach ($listgiohang as $sp) {
                            extract($sp);
                            $tong_gia = $gia_sp * $so_luong;
                            $tong += $tong_gia;
                            $anh_sp = $hinhpath . $anh_sp;
                            echo '
                                    <tr>
                                    <td data-label="Product Name">
                                        <div class="customer">
                                            <div class="customer__thumb">
                                                <img src="' . $anh_sp . '" alt="">
                                            </div>
                                            <div class="customer__content">
                                                <h6 class="customer__name">' . $ten_sp . '</h6>
                                            </div>
                                        </div>
                                    </td>
                                <td data-label="Until Price">' . $gia_sp . '$</td>
                                    <td data-label="Qty">
                                        <div class="qty-cart d-flex style-two">
                                            <div class="product-qty">
                                                <h6 class="customer__name">' . $so_luong . '</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Subtotal">' . $tong_gia . '$</td>
                                    <td data-label="Delete">               
                                        <a href="index.php?act=delete_one_cart&id=' . $id . '" class="delete-icon text-center" style="cursor:pointer;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"> <i class="las la-trash-alt "></i> </a>                
                                    </td>
                                </tr>
                            <tr>
                            ';
                        }
                        echo '
                        </tbody>
                        </table>
                            </form>
                        </div>
                        <div class="cart-btn-area d-flex justify-content-between flex-wrap">
                            <div class="shopping-cart mb-0">
                                <a href="index.php" class="btn btn--base pill shopping-cart__pr mb-3">TIẾP TỤC MUA SẮM</a>
                            </div>
                            <div class="clear-cart">
                                <a href="index.php?act=clear_cart" class="btn pill btn--white">XÓA GIỎ HÀNG</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="order-summery ms-auto">
                                    <div class="order-summery__one d-flex justify-content-between">
                                        <h6 class="order-summery__title"> Tổng phụ : </h6>
                                        <span class="order-summery__number">'.$tong.'$</span>
                                    </div>
                                    <div class="order-summery__two d-flex justify-content-between">
                                        <h6 class="order-summery__title-two"> Tổng chính : </h6>
                                        <span class="order-summery__number-two">'.$tong.'$</span>
                                    </div>
                                    <div class="checkout">
                                    <a href="index.php?act=check_out" class="btn btn--base pill">TIẾN HÀNH THANH TOÁN</a>
                                    
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        ';
                    }else{
                        echo '<h6 class="text-center p-30">Không có sản phẩm trong giỏ hàng</h6>';
                    }
                }

                ?>

        </div>
    </div>

    <!-- ===============cart section end here ==================-->



    <!--============================feature section start here =======================-->
    <div class="feature-section bg-img py-60"
        style="background-image: url(assets/images/thumbs/feature/feature-img.png);">
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
                            <span class="feature-item__payment">100% Secure Payment</span>
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