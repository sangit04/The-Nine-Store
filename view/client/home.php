
<!-- ==================== Bottom Header End Here ==================== -->
<div class="overlay-search-box position-relative">
    <form action="index.php?act=sanpham" method="">
    <div class="modal fade" id="search-box" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="search-overlay-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="las la-times"></i></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="search-box">
                                    <div class="input--group">
                                        <input type="text" class="form--control style-two" name="kyw" placeholder="Search....">
                                        <input type="submit"  name="timkiem"  value="Tìm kiếm">  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

<!--========================== Search Modal End ==========================-->
<!-- ========================== Banner Section Start ==========================-->

<!--========================== Banner Section End ========================== -->

<!--==============================offer-section start  here=============================-->


<!-- ======================product sections start here ================= -->
<div class="offer-section pt-60 pb-60">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6">
                <a href="product-category.php" class="offer">
                    <img src="assets/images/thumbs/banner_1.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-6">
                <a href="product-category.php" class="offer">
                    <img src="assets/images/thumbs/banner_2.png" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- ====================deal section start here ====================-->
<div class="product-section py-60">

    <div class="container">

        <div class="row">

            <div class="col-12">
                <div class="section-heading">

                    <h4 class="section-heading__subtitle">Sản Phẩm Đặc Biệt</h4>
                    <h3 class="section-heading__title style-two">Sản Phẩm Thịnh Hành<span
                            class="section-heading__bars"></span></h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center gy-4">
            <?php
            $i = 0;

            foreach ($spnew as $sp) {
                extract($sp);
                $hinhpath="../upload/";
                // if (is_file($hinhpath)) {
                //     $anh_sp="<img src='".$hinhpath."'height='80'>";
                // }
                // else {
                //     $anh_sp="no photo";
                // }
                $anh_sp = $hinhpath . $anh_sp;
                $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;

                if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '
                <div class="col-lg-4 col-md-6 col-sm-6 col-xsm-6">
                <form action="index.php?act=add_to_cart" method="post">
                        <div class="product-item ' . $mr . '">
                            <div class="product-item__thumb">
                                <a href="' . $linksp . '" class="product-item__thumb-link">
                                   <img src="' . $anh_sp . '"  alt="">
                                </a>
                               
                               
                            </div>
                         <div class="product-item__content">   
                            <h5 class="product-item__title">
                                <a href="product-two-details.php" class="product-item__title-link">
                              ' . $ten_sp . '
                                </a>
                            </h5>
                           
                            <h6 class="product-item__price">
                                <span class="product-item__price-new"></span>' . $gia_sp . ' VNĐ
                            </h6>
                            <input type="submit" value="THÊM VÀO GIỎ HÀNG" name="buy" class="btn btn--base pill product-info__link">
                            <input type="hidden" name="ten_sp" value="'.$ten_sp.'">
                            <input type="hidden" name="gia_sp" value="'.$gia_sp.'">
                            <input type="hidden" name="anh_sp" value="'.$anh_sp.'">
                            <input type="hidden" name="id" value="'.$id_sp.'">
                        </div>
                        </div>
                        </form>
                    </div>
                  ';
                $i += 1;

            }
            ?>
            <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
                <div class="product-item text-center">
                    <div class="product-item__thumb">
                        <a href="product-two-details.php" class="product-item__thumb-link">
                            <img src="assets/images/thumbs/product/anh1.jpg" alt="">
                        </a>
                        <button class="product-item__icon">
                            <span class="product-item__icon-style">
                                <i class="las la-heart"></i>
                            </span>
                        </button>
                        <div class="product-item__badge">
                            <span class="badge badge--base">Sale</span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <h5 class="product-item__title">
                            <a href="product-two-details.php" class="product-item__title-link">
                                Iphone 13
                            </a>
                        </h5>
                        <ul class="product-info__rating justify-content-center align-items-center">
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star-half-alt"></i>
                            </li>
                            <li class="product-info__number">
                                4.8
                            </li>
                        </ul>
                        <h6 class="product-item__price">
                            <span class="product-item__price-new">$200</span> $180
                        </h6>
                        <a href="cart.php" class="btn btn--base pill btn--sm">Add to Cart </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
                <div class="product-item">
                    <div class="product-item__thumb">
                        <a href="product-two-details.php" class="product-item__thumb-link">
                            <img src="assets/images/thumbs/product/anh4.jpg" alt="">
                        </a>
                        <button class="product-item__icon">
                            <span class="product-item__icon-style">
                                <i class="las la-heart"></i>
                            </span>
                        </button>
                    </div>
                    <div class="product-item__content">
                        <h5 class="product-item__title">
                            <a href="product-two-details.php" class="product-item__title-link">
                                Moderna Scoop & Sift
                            </a>
                        </h5>
                        <ul class="product-info__rating justify-content-center">
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star-half-alt"></i>
                            </li>
                            <li class="product-info__number">
                                4.8
                            </li>
                        </ul>
                        <h6 class="product-item__price">
                            <span class="product-item__price-new">$360</span> $310
                        </h6>
                        <a href="cart.php" class="btn btn--base pill btn--sm">Add to Cart </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
                <div class="product-item">
                    <div class="product-item__thumb">
                        <a href="product-two-details.php" class="product-item__thumb-link">
                            <img src="assets/images/thumbs/product/anh5.jpg" alt="">
                        </a>
                        <button class="product-item__icon">
                            <span class="product-item__icon-style">
                                <i class="las la-heart"></i>
                            </span>
                        </button>
                        <div class="product-item__badge">
                            <span class="badge badge--base">Sale</span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <h5 class="product-item__title">
                            <a href="product-two-details.php" class="product-item__title-link">
                                BonaCibo Kitten Pouch
                            </a>
                        </h5>
                        <ul class="product-info__rating justify-content-center">
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__number">
                                5.0
                            </li>
                        </ul>
                        <h6 class="product-item__price">
                            <span class="product-item__price-new">$200</span> $180
                        </h6>
                        <a href="cart.php" class="btn btn--base pill btn--sm">Add to Cart </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
                <div class="product-item">
                    <div class="product-item__thumb">
                        <a href="product-two-details.php" class="product-item__thumb-link">
                            <img src="assets/images/thumbs/product/anh6.jpg" alt="">
                        </a>
                        <button class="product-item__icon">
                            <span class="product-item__icon-style">
                                <i class="las la-heart"></i>
                            </span>
                        </button>
                    </div>
                    <div class="product-item__content">
                        <h5 class="product-item__title">
                            <a href="product-two-details.php" class="product-item__title-link">
                                Oropharma
                            </a>
                        </h5>
                        <ul class="product-info__rating justify-content-center">
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__number">
                                5.0
                            </li>
                        </ul>
                        <h6 class="product-item__price">
                            <span class="product-item__price-new">$150</span> $330
                        </h6>
                        <a href="cart.php" class="btn btn--base pill btn--sm">Add to Cart </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
                <div class="product-item">
                    <div class="product-item__thumb">
                        <a href="product-two-details.php" class="product-item__thumb-link">
                            <img src="assets/images/thumbs/product/anh2.jpeg" alt="">
                        </a>
                        <button class="product-item__icon">
                            <span class="product-item__icon-style">
                                <i class="las la-heart"></i>
                            </span>
                        </button>
                        <div class="product-item__badge">
                            <span class="badge badge--base">-30%</span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <h5 class="product-item__title">
                            <a href="product-two-details.php" class="product-item__title-link">
                                Coco Kat Kitten Milk
                            </a>
                        </h5>
                        <ul class="product-info__rating justify-content-center">
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__number">
                                5.0
                            </li>
                        </ul>
                        <h6 class="product-item__price">
                            <span class="product-item__price-new">$290</span> $280
                        </h6>
                        <a href="cart.php" class="btn btn--base pill btn--sm">Add to Cart </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
                <div class="product-item">
                    <div class="product-item__thumb">
                        <a href="product-two-details.php" class="product-item__thumb-link">
                            <img src="assets/images/thumbs/product/anh3.jpg" alt="">
                        </a>
                        <button class="product-item__icon">
                            <span class="product-item__icon-style">
                                <i class="las la-heart"></i>
                            </span>
                        </button>
                    </div>
                    <div class="product-item__content">
                        <h5 class="product-item__title">
                            <a href="product-two-details.php" class="product-item__title-link">
                                Cat Food Chicke
                            </a>
                        </h5>
                        <ul class="product-info__rating justify-content-center">
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__number">
                                5.0
                            </li>
                        </ul>
                        <h6 class="product-item__price">
                            <span class="product-item__price-new">$490</span> $480
                        </h6>
                        <a href="cart.php" class="btn btn--base pill btn--sm">Add to Cart </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
                <div class="product-item">
                    <div class="product-item__thumb">
                        <a href="product-two-details.php" class="product-item__thumb-link">
                            <img src="assets/images/thumbs/product/anh10.jpg" alt="">
                        </a>
                        <button class="product-item__icon">
                            <span class="product-item__icon-style">
                                <i class="las la-heart"></i>
                            </span>
                        </button>
                        <div class="product-item__badge">
                            <span class="badge badge--base">Sale</span>
                        </div>
                    </div>
                    <div class="product-item__content">
                        <h5 class="product-item__title">
                            <a href="product-two-details.php" class="product-item__title-link">
                                Naughty Cat Bentonite
                            </a>
                        </h5>
                        <ul class="product-info__rating justify-content-center">
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__number">
                                5.0
                            </li>
                        </ul>
                        <h6 class="product-item__price">
                            <span class="product-item__price-new">$760</span> $630
                        </h6>
                        <a href="cart.php" class="btn btn--base pill btn--sm">Add to Cart </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
                <div class="product-item">
                    <div class="product-item__thumb">
                        <a href="product-two-details.php" class="product-item__thumb-link">
                            <img src="assets/images/thumbs/product/anh11.jpeg" alt="">
                        </a>
                        <button class="product-item__icon">
                            <span class="product-item__icon-style">
                                <i class="las la-heart"></i>
                            </span>
                        </button>
                    </div>
                    <div class="product-item__content">
                        <h5 class="product-item__title">
                            <a href="product-two-details.php" class="product-item__title-link">
                                Moderna Trendy Story
                            </a>
                        </h5>
                        <ul class="product-info__rating justify-content-center">
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__rating-item">
                                <i class="fas fa-star"></i>
                            </li>
                            <li class="product-info__number">
                                4.8
                            </li>
                        </ul>
                        <h6 class="product-item__price">
                            <span class="product-item__price-new">$620</span> $520
                        </h6>
                        <a href="cart.php" class="btn btn--base pill btn--sm">Add to Cart </a>
                    </div>
                </div>
            </div> -->
        </div>

    </div>
</div>
<div class="new-arrival-section py-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h4 class="section-heading__subtitle">DANH MỤC</h4>
                    <h3 class="section-heading__title style-two">Sản phẩm danh mục <strong>
                            <? ?>
                        </strong><span class="section-heading__bars"></span></h3>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="filter">



                <?php
                $i = 0;
                foreach ($dsdm as $dm) {
                    extract($dm);
                    $linkdm = "index.php?act=sanpham&id_dm=" . $id_dm;
                    echo '  <button type="button"   > <a href=" ' . $linkdm . '">' . $ten_danh_muc . '</a></button>';
                    // echo '<li><a href=" ' . $linkdm . '">' . $ten_danh_muc . '</a></li>';
                

                }
                ?>

            </div>
        </div>
        <!-- <div class="col-lg-12">
        <div class="box_search">
        <form action="index.php?act=sanpham" method="POST">
            <input type="text" name="" name="kyw" id="" placeholder="Từ khóa tìm kiếm">
            <input type="submit" name="timkiem" value="Tìm kiếm">
        </form>
    </div>
    </div> -->


    </div>
</div>
<!-- ====================deal section start here ====================-->
<div class="best-deals-section py-60">
    <div class="container-fluid p-0">
        <div class="row gx-0 justify-content-center flex-wrap-reverse">
            <div class="col-lg-3">

                <!-- <div class="sidebar-item">
                    <h5 class="sidebar-item__title">Lọc theo giá</h5>

                    <div class=" custom--range">
                        <div id="slider-range" class="custom--range__range"></div>
                        <div class="custom--range__content d-flex flex-wrap justify-content-betwwen">
                            <label for="amount" class="custom--range__text">Phạm vi giá:</label>
                            <input type="text" class="custom--range__prices" id="amount" readonly>
                        </div>
                    </div>
                    <div class="sidebar-item__button">
                        <a href="product-category.php" class="btn btn--base pill btn--sm">Lọc</a>
                    </div>
                </div>
                <div class="sidebar-item">
                    <h6 class="sidebar-item__title">
                        Màu sắc
                    </h6>
                    <div class="form-check form--check">
                        <input class="form-check-input" type="checkbox" value="" id="red">
                        <label class="form-check-label" for="red">
                            Red (50)
                        </label>
                    </div>
                    <div class="form-check form--check">
                        <input class="form-check-input" type="checkbox" value="" id="green">
                        <label class="form-check-label" for="green">
                            Green (85)
                        </label>
                    </div>
                    <div class="form-check form--check">
                        <input class="form-check-input" type="checkbox" value="" id="violet">
                        <label class="form-check-label" for="violet">
                            Violet (10)
                        </label>
                    </div>
                    <div class="form-check form--check">
                        <input class="form-check-input" type="checkbox" value="" id="blue">
                        <label class="form-check-label" for="blue">
                            Blue (29)
                        </label>
                    </div>
                    <div class="form-check form--check">
                        <input class="form-check-input" type="checkbox" value="" id="black">
                        <label class="form-check-label" for="black">
                            Black (58)
                        </label>
                    </div>
                </div> -->
                <div class="sidebar-item">
                    <h6 class="sidebar-item__title">
                        Top 5 Sản Phẩm Yêu Thích
                    </h6>
                    <!-- <div class="box_title">TOP 10 YÊU THÍCH</div>
                    <div class="box_content"> -->
                    <?php
                    $i = 0;
                    foreach ($dstop5 as $sp) {
                        extract($sp);
                        $anh_sp = $hinhpath . $anh_sp;
                        $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                        //         echo '<div class="selling_products" style="width:100%;">
                        //     <a href="' . $linksp . '"><img src="' . $anh_sp . '" alt="anh"></a>
                        //     <a href="' . $linksp . '">' . $ten_sp . '</a>
                        // </div>';
                        echo '<a href="' . $linksp . '" class="seller-item__thumb">
                    <img src="' . $anh_sp . '" alt="">
                </a>
                <div class="seller-item__title">
                    <a href="' . $linksp . 'p" class="seller-item__link">' . $ten_sp . '</a>
                  
                </div>'
                        ;


                    }
                    ?>

                </div>
            </div>
            <div class="col-xl-8">
                <div class="deal-counter py-1200">
                    <div class="section-heading style-three">
                        <h4 class="section-heading__subtitle">Sản phẩm tốt nhất</h4>
                        <h3 class="section-heading__title">Ưu đãi tốt nhất trong năm!</h3>
                    </div>
                    <div id="countdown-container"></div>
                    <div class="deal-counter__footer text-center">
                        <?php
                        $i = 0;
                        foreach ($dstop1 as $sp) {
                            extract($sp);
                            $anh_sp = $hinhpath . $anh_sp;
                            $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                            //         echo '<div class="selling_products" style="width:100%;">
                            //     <a href="' . $linksp . '"><img src="' . $anh_sp . '" alt="anh"></a>
                            //     <a href="' . $linksp . '">' . $ten_sp . '</a>
                            // </div>';
                            echo '<a href="' . $linksp . '" >
                    <img src="' . $anh_sp . '" alt="">
                </a>
                <div class="seller-item__title">
                    <a href="' . $linksp . '">' . $ten_sp . '</a>
                  
                </div
                <div class="text-center">
                <a href="' . $linksp . '" class="btn btn--base pill">MUA NGAY</a>
            </div>>
                '
                            ;


                        }
                        ?>
                    </div>
                    <!-- <div class="text-center">
                        <a href="product-category.php" class="btn btn--base pill">SHOP NOW</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--===================== deal section end Here ====================-->
<!--==========================new arrival section start here======================-->

<!-- ==================new offer section start here==================-->
<div class="new-offer-section py-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="product-category.php" class="new-offer-content">
                    <img src="assets/images/thumbs/sua-chua-iphone-banner-01.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</div>



<!-- ===================new offer section end here =====================-->
<!-- ==========================testimonial section start here=======================-->
<div class="testimonial-section py-60">
    <div class="container">
        <div class="row align-items-center flex-wrap">
            <div class="col-lg-6">
                <div class="testimonials-thumb-slider">
                    <div class="testimonial-thumb">
                        <img src="assets/images/thumbs/baner-vuong1.jpg" alt="">
                    </div>
                    <div class="testimonial-thumb">
                        <img src="assets/images/thumbs/banner-vuong2.jpg" alt="">
                    </div>
                    <div class="testimonial-thumb">
                        <img src="assets/images/thumbs/banner-vuong3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testimonial-slick-slider">
                    <div class="testimonial-slider">
                        <div class="testimonial-slider__icon">
                            <img src="assets/images/icons/testimonial-icon.png" alt="">
                        </div>
                        <p class="testimonial-slider__desc">
                        Cơm không ăn thì gạo còn đó. Thấy khuyến mãi mà không ngó thì đêm về khó ngủ yên.
                        </p>
                        <div class="testimonial-slider__details">
                            <h4 class="testimonial-slider__name">Dianne Russell</h4>
                            <span class="testimonial-slider__designation">Khách hàng </span>
                        </div>
                    </div>
                    <div class="testimonial-slider">
                        <div class="testimonial-slider__icon">
                            <img src="assets/images/icons/testimonial-icon.png" alt="">
                        </div>
                        <p class="testimonial-slider__desc">
                        “Điện thoại báo “Pin yếu”, tim báo thiếu “Yêu thương”.
                        </p>
                        <div class="testimonial-slider__details">
                            <h4 class="testimonial-slider__name"> Walton </h4>
                            <span class="testimonial-slider__designation">Khách hàng </span>
                        </div>
                    </div>
                    <div class="testimonial-slider">
                        <div class="testimonial-slider__icon">
                            <img src="assets/images/icons/testimonial-icon.png" alt="">
                        </div>
                        <p class="testimonial-slider__desc">
                        “Mua 2 tặng 1” khuyến khích khách hàng mua điện thoại số lượng lớn hơn – đẩy nhanh hàng hóa còn số lượng lớn, sắp hết hạn, qua trend".
                        </p>
                        <div class="testimonial-slider__details">
                            <h4 class="testimonial-slider__name">Andre Russell</h4>
                            <span class="testimonial-slider__designation">Khách hàng </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- =========================testimonial section end here ==========================-->
<!--========================== Coverage Section Start ==========================-->
<div class="client pb-120 pt-60">
    <div class="container">
        <div class="client-logos client-slider">
            <img src="assets/images/2__brands/8.png" alt="">
            <img src="assets/images/2__brands/2.jpg" alt="">
            <img src="assets/images/2__brands/9.jpg" alt="">
            <img src="assets/images/2__brands/4.png" alt="">
            <img src="assets/images/2__brands/5.png" alt="">
            <img src="assets/images/2__brands/6.png" alt="">
            <img src="assets/images/2__brands/7.png" alt="">
        </div>
    </div>
</div>
<!--========================== Coverage Section End ==========================-->
<!-- ==================== Blog Start Here ==================== -->
<!-- <section class="blog py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="section-heading__subtitle">Blog Post</h2>
                    <h3 class="section-heading__title style-two"> Latest news post <span
                            class="section-heading__bars"></span> </h3>
                </div>
            </div>
        </div>
        <div class="row gy-4 justify-content-center align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xsm-6">
                <div class="blog-item">
                    <div class="blog-item__thumb">
                        <a href="blog-details.php" class="blog-item__thumb-link">
                            <img src="assets/images/thumbs/blog/blog03.png" alt="">
                        </a>
                    </div>
                    <div class="blog-item__date">
                        <span class="blog-item__month">18</span>
                        <span class="blog-item__month">May</span>
                    </div>
                    <div class="blog-item__content">
                        <h4 class="blog-item__title"><a href="blog-details.php" class="blog-item__title-link">Amet
                                Occumsan Fringilla Molestie Urna Hendrerit </a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xsm-6">
                <div class="blog-item">
                    <div class="blog-item__thumb">
                        <a href="blog-details.php" class="blog-item__thumb-link">
                            <img src="assets/images/thumbs/blog/blog01.png" alt="">
                        </a>
                    </div>
                    <div class="blog-item__date">
                        <span class="blog-item__month">22</span>
                        <span class="blog-item__month">May</span>
                    </div>
                    <div class="blog-item__content">
                        <h4 class="blog-item__title"><a href="blog-details.php" class="blog-item__title-link">Maecenas
                                Sed Facilisis Ipsum. Duis Scelerisque Mi
                                Magna </a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xsm-6 d-block d-lg-none">
                <div class="blog-item">
                    <div class="blog-item__thumb">
                        <a href="blog-details.php" class="blog-item__thumb-link">
                            <img src="assets/images/thumbs/blog/blog01.png" alt="">
                        </a>
                    </div>
                    <div class="blog-item__date">
                        <span class="blog-item__month">22</span>
                        <span class="blog-item__month">May</span>
                    </div>
                    <div class="blog-item__content">
                        <h4 class="blog-item__title"><a href="blog-details.php" class="blog-item__title-link">Maecenas
                                Sed Facilisis Ipsum. Duis Scelerisque Mi
                                Magna </a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xsm-6">
                <div class="blog-item">
                    <div class="blog-item__thumb">
                        <a href="blog-details.php" class="blog-item__thumb-link">
                            <img src="assets/images/thumbs/blog/blog02.png" alt="">
                        </a>
                    </div>
                    <div class="blog-item__date">
                        <span class="blog-item__month">29</span>
                        <span class="blog-item__month">May</span>
                    </div>
                    <div class="blog-item__content">
                        <h4 class="blog-item__title"><a href="blog-details.php" class="blog-item__title-link">Wenean
                                Vitae Porttitor Ante Tempor Posuere Nisl. </a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ==================== Blog End Here ==================== -->
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