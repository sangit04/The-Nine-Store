<?php
// include("header.php");

?>
<!-- ==================== Breadcumb Start Here ==================== -->
<section class="breadcumb py-120 bg-img" style="background-image: url(assets/images/thumbs/);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h1 class="breadcumb__title"> DANH MỤC SẢN PHẨM</h1>
                    <ul class="breadcumb__list">
                        <li class="breadcumb__item"><a href="index.php" class="breadcumb__link"> <i
                                    class="las la-home"></i> TRANG CHỦ</a> </li>
                        <li class="breadcumb__item"> / </li>
                        <li class="breadcumb__item"> <span class="breadcumb__item-text"> DANH MỤC SẢN PHẨM </span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcumb End Here ==================== -->

<!-- ==================product category two section start here ==============================-->
<div class="product-category-two py-120 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="left-sidebar">

                    <!-- <section class="banner-section pt-60 pb-60">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-3">
            <nav class="category">
                        <span class="close-sidebar d-lg-none d-block"><i class="las la-times"></i></span>
                        <ul class="category-menu"> -->




                    <span class="close-sidebar d-lg-none d-block">
                        <i class="las la-times"></i>
                    </span>
                    <h6 class="sidebar-item__title">
                        Danh mục
                    </h6>
                    <div class="sidebar-item">
                        <?php
                        $i = 0;
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm = "index.php?act=sanpham&id_dm=" . $id_dm;
                            echo ' 
                    <div class="form-check form--check">
                    <input class="form-check-input" type="checkbox" value="" id="cadfood"><label class="form-check-label">
                    <a href=" ' . $linkdm . '">' . $ten_danh_muc . '</a>
                </div></label>';
                            // echo '<li><a href=" ' . $linkdm . '">' . $ten_danh_muc . '</a></li>';
                        

                        }
                        ?>
                    </div>
                    <div class="col-lg-12">
        <div class="box_search">
        <form action="index.php?act=sanpham" method="POST">
            <input type="text" name="" name="kyw" id="" placeholder="Từ khóa tìm kiếm">
            <input type="submit" name="timkiem" value="Tìm kiếm">
        </form>
    </div>
    </div>

                </div>
                <div class="sidebar-item">
                    <h5 class="sidebar-item__title">Lọc theo giá</h5>

                    <div class=" custom--range">
                        <div id="slider-range" class="custom--range__range"></div>
                        <div class="custom--range__content d-flex flex-wrap justify-content-betwwen">
                            <label for="amount" class="custom--range__text">Phạm vi giá:</label>
                            <input type="text" class="custom--range__prices" id="amount" readonly>
                        </div>
                    </div>
                    <div class="sidebar-item__button">
                        <a href="#" class="btn btn--base pill btn--sm">Lọc</a>
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
                </div>
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
                        $hinhpath="../upload/";
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
      



        <div class="col-lg-9">
            <!-- <div class="product-sidebar-filter d-lg-none d-block">
                    <button class="product-sidebar-filter__button">
                        <i class="las la-filter"></i>
                        <span class="text"> Filter </span>
                    </button>
                </div> -->

            <div class="row justify-content-center gy-4">

                <?php
                $i = 0;

                foreach ($listsanpham as $sp) {
                    extract($sp);

                    // $hinhpath="../upload/".$anh_sp;
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
                        <div class="product-item ' . $mr . '">
                            <div class="product-item__thumb">
                                <a href="' . $linksp . '" class="product-item__thumb-link">
                                   <img src="' . $anh_sp . '"  alt="">
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
                              ' . $ten_sp . '
                                </a>
                            </h5>
                           
                            <h6 class="product-item__price">
                                <span class="product-item__price-new"></span>' . $gia_sp . ' VNĐ
                            </h6>
                            <a href="cart.php" class="btn btn--base pill btn--sm">Thêm Vào Giỏ Hàng </a>
                        </div>
                        </div>
                    </div>
                  ';
                    $i += 1;

                }
                ?>
                <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xsm-6">
                        <div class="product-item">
                            <div class="product-item__thumb">
                                <a href="'.$linksp.'" class="product-item__thumb-link">
                                   <img src="' . $anh_sp . '" alt="">
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
                              ' . $ten_sp . '
                                </a>
                            </h5>
                           
                            <h6 class="product-item__price">
                                <span class="product-item__price-new">' . $price . '</span>
                            </h6>
                            <a href="cart.php" class="btn btn--base pill btn--sm">Add to Cart </a>
                        </div>
                        </div>
                    </div>
         -->
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">01</a></li>
                    <li class="page-item "><a class="page-link" href="#">02</a></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i> </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</div>


</div> 

<!-- ==================product category two section end here ==============================-->
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


<!-- ==========================feature setion end here ============================-->
