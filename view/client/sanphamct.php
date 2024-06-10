<!--  -->
<!-- ==================== Breadcumb Start Here ==================== -->
<section class="breadcumb py-120 bg-img" style="background-image: url(assets/images/tets.jpg);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="breadcumb__wrapper">
          <h1 class="breadcumb__title"> </h1>
          <ul class="breadcumb__list">
            <li class="breadcumb__item"><a href="index.php" class="breadcumb__link"> <i class="las la-home"></i>
                Trang chủ</a> </li>
            <!-- <li class="breadcumb__item"> / </li> -->
            <li class="breadcumb__item"> <span class="breadcumb__item-text">  </span> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ==================== Breadcumb End Here ==================== -->

<!-- ======================product details two section start here ====================-->
<div class="product-details-section py-120">
  <?php
  extract($onesp);
  ?>
  <!-- <div class="box_title">
    <?= $name ?>
  </div>
  <div class="box_content"> -->
  <?php
  extract($onesp);
  $hinhpath="../upload/";
  $anh_sp = $hinhpath . $anh_sp;
  echo ' <form action="index.php?act=add_to_cart" method="post" class="container">
    <div class="row align-items-center gy-4">

      <div class="col-lg-7 pe-lg-5">
        <div class="row align-items-center">

          <div class="col-lg-9 order-lg-2"> <a href="#" class="product-details__image">
              <img src="' . $anh_sp . '" alt="">
            </a>
            <!-- <div class="product-details__thumb">
                   
                    <a href="product-two-details.php" class="product-details__image">
                      <img src="assets/images/thumbs/product/product05.png" alt="">
                    </a>
                    <a href="product-two-details.php" class="product-details__image">
                      <img src="assets/images/thumbs/product/product04.png" alt="">
                    </a>
                    <a href="product-two-details.php" class="product-details__image">
                      <img src="assets/images/thumbs/product/product06.png" alt="">
                    </a>
                  </div> -->
          </div>

          <!-- <div class="col-lg-3 order-lg-1">
                  <ul class="product-details-gallery">
                    <li class="product-details-gallery__image">
                       <img src="assets/images/thumbs/pd-img01.png" alt="">
                    </li>
                    <li class="product-details-gallery__image">
                        <img src="assets/images/thumbs/product/product05.png" alt="">
                    </li>
                    <li class="product-details-gallery__image">
                      <img src="assets/images/thumbs/product/product04.png" alt="">
                   </li>
                   <li class="product-details-gallery__image">
                      <img src="assets/images/thumbs/product/product06.png" alt="">
                   </li>

                  </ul>
              </div> -->

        </div>
      </div>

      <div class="col-lg-5">
        <div class="product-info">

          <h3 class="product-info__title">
          ' . $ten_sp . '
          </h3>
          
          <h6 class="product-info__price">Giá : ' . $gia_sp . ' VNĐ
            <span class="product-info__price-new"></span> 
          </h6>
          <p class="product-info__desc">' . $thong_tin_sp . '...</p>
          <div class="product-style">
            <span class="product-style__title">Bộ nhớ : </span>
            <span class="product-style__size">' . $bo_nho . '</span>
          </div>
          <div class="product-variation product-style">
            <span class="product-style__title">Màu :</span>
            <div class="product-color__variant-wrapper">
              <ul class="color-variant-list">
                <li class="color-variant-list__item one">
                  <span class="color"></span>
                </li>
                <li class="color-variant-list__item two">
                  <span class="color"></span>
                </li>
                <li class="color-variant-list__item three">
                  <span class="color"></span>
                </li>
                <li class="color-variant-list__item four">
                  <span class="color"></span>
                </li>
              </ul>
            </div>
          </div>
          <div class="product-style">
            <span class="product-style__title">Bảo hành :</span>
            <span class="product-style__size">' . $bao_hanh . '</span>
          </div>
         
          <div class="qty-cart d-flex product-style">
            <span class="product-style__title">Số lượng :</span>
            <div class="product-qty">
              <button type="button" class="product-qty__decrement"><i class="las la-angle-down"></i></button>
              <input type="number" name="so_luong" class="product-qty__value" value="1">
              <button type="button" class="product-qty__increment"><i class="las la-angle-up"></i> </button>
            </div>
          </div>
          <div class="product-info__button">
            <input type="submit" value="BY NOW" name="buy" class="btn btn--base pill product-info__link">
            <a href="wishlist.php" class="product-info__heart product-info__link"><i class="fas fa-heart"></i></a>
            <a href="cart.php" class="product-info__cart product-info__link"><i class="fas fa-shopping-cart"></i></a>
            <input type="hidden" name="ten_sp" value="'.$ten_sp.'">
            <input type="hidden" name="gia_sp" value="'.$gia_sp.'">
            <input type="hidden" name="anh_sp" value="'.$anh_sp.'">
            <input type="hidden" name="id" value="'.$id_sp.'">
            
          </div>
          <div class="product-info__share">
            <h6 class="product-info__share-text">Share :</h6>
            <ul class="social-list style-four">
              <li class="social-list__item"><a href="https://www.facebook.com/" class="social-list__link"><i
                    class="fab fa-facebook-f"></i></a> </li>
              <li class="social-list__item"><a href="https://www.twitter.com/" class="social-list__link"> <i
                    class="fab fa-twitter"></i></a></li>
              <li class="social-list__item"><a href="https://www.linkedin.com/" class="social-list__link"> <i
                    class="fab fa-linkedin-in"></i></a></li>
              <li class="social-list__item"><a href="https://www.pinterest.com/" class="social-list__link"> <i
                    class="fab fa-pinterest-p"></i></a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </form>';

  ?>
  <!-- <div class="container">
      <div class="row align-items-center gy-4">

        <div class="col-lg-7 pe-lg-5">
          <div class="row align-items-center">

            <div class="col-lg-9 order-lg-2"> <a href="#" class="product-details__image">
                <img src="assets/images/thumbs/pd-img01.png" alt="">
              </a>
            
            </div>

          

          </div>
        </div>

        <div class="col-lg-5">
          <div class="product-info">

            <h3 class="product-info__title">
              Coco Kat Kitten Milk
            </h3>
            <ul class="product-info__rating mb-3">
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
            <h6 class="product-info__price">
              <span class="product-info__price-new">$260</span> $230
            </h6>
            <p class="product-info__desc">Aliquam ante augue, placerat ut massa id, fermentum facilisis nisi. Nunc
              mollis
              augue at mollis posuere. Morbi id lorem</p>
            <div class="product-style">
              <span class="product-style__title">Size :</span>
              <span class="product-style__size">3Kg</span>
            </div>
            <div class="product-variation product-style">
              <span class="product-style__title">Color :</span>
              <div class="product-color__variant-wrapper">
                <ul class="color-variant-list">
                  <li class="color-variant-list__item one">
                    <span class="color"></span>
                  </li>
                  <li class="color-variant-list__item two">
                    <span class="color"></span>
                  </li>
                  <li class="color-variant-list__item three">
                    <span class="color"></span>
                  </li>
                  <li class="color-variant-list__item four">
                    <span class="color"></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="product-style">
              <span class="product-style__title">vendor :</span>
              <span class="product-style__size">Pet Point</span>
            </div>
            <div class="product-style">
              <span class="product-style__title">Type :</span>
              <span class="product-style__size">Dog Food</span>
            </div>
            <div class="qty-cart d-flex product-style">
              <span class="product-style__title">QTY :</span>
              <div class="product-qty">
                <button type="button" class="product-qty__decrement"><i class="las la-angle-down"></i></button>
                <input type="number" class="product-qty__value" value="00">
                <button type="button" class="product-qty__increment"><i class="las la-angle-up"></i> </button>
              </div>
            </div>
            <div class="product-info__button">
              <a href="index.php" class="btn btn--base pill product-info__link">BUY NOW</a>
              <a href="wishlist.php" class="product-info__heart product-info__link"><i class="fas fa-heart"></i></a>
              <a href="cart.php" class="product-info__cart product-info__link"><i class="fas fa-shopping-cart"></i></a>
            </div>
            <div class="product-info__share">
              <h6 class="product-info__share-text">Share :</h6>
              <ul class="social-list style-four">
                <li class="social-list__item"><a href="https://www.facebook.com/" class="social-list__link"><i
                      class="fab fa-facebook-f"></i></a> </li>
                <li class="social-list__item"><a href="https://www.twitter.com/" class="social-list__link"> <i
                      class="fab fa-twitter"></i></a></li>
                <li class="social-list__item"><a href="https://www.linkedin.com/" class="social-list__link"> <i
                      class="fab fa-linkedin-in"></i></a></li>
                <li class="social-list__item"><a href="https://www.pinterest.com/" class="social-list__link"> <i
                      class="fab fa-pinterest-p"></i></a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div> -->
</div>

<!-- ======================product details two section end here ====================-->

<!-- =====================tab section start here ========================-->
<div class="tab-section pb-120">
  <div class="container">
    <ul class="nav nav-pills mb-3 custom--tab" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
          type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
          type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Review</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
          type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Comment</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-change-tab" data-bs-toggle="pill" data-bs-target="#pills-change"
          type="button" role="tab" aria-controls="pills-change" aria-selected="false">Faq</button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
        tabindex="0">
        <p class="tab-desc">
          none.
        </p>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
        <p class="tab-desc">
          none.
        </p>
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
        <p class="tab-desc">
        <div class="mb">
          <div class="box_title">BÌNH LUẬN</div>
          <div class="box_content">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script>
              $(document).ready(function () {
                $("#binhluan").load("binhluanform.php", {
                  id_pro: <?php echo $id_sp ?>
                });
              });
            </script>
            <div class="row" id="binhluan">

            </div>
          </div>
        </div>
        </p>
      </div>
      <div class="tab-pane fade" id="pills-change" role="tabpanel" aria-labelledby="pills-change-tab" tabindex="0">
        <p class="tab-desc">
          none.
        </p>
      </div>
    </div>

  </div>
</div>
<div class="tab-section pb-120">
<div class="section-heading style-two">
          <h4 class="section-heading__title style-two">Sản phẩm cùng loại<span
              class="section-heading__bars style-two"></span></h4>
        </div>
            <div class="box_content">
            <div class="row gy-4">
                <?php
                 $i = 0;
                foreach ($sp_cungloai as $sp_cungloai) {
                    extract($sp_cungloai);
                    $anh_sp = $hinhpath . $anh_sp;
                    $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                    if (($i == 2) || ($i == 5) ) {
                      $mr = "";
                  } else {
                      $mr = "mr";
                  }
                    echo '
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xsm-6">
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
                        <a href="cart.php" class="btn btn--base pill btn--sm">THÊM VÀO GIỎ HÀNG </a>
                    </div>
                    </div>
                </div>
               
              ';
                }
                ?>
            </div>
            </div>
  </div>

<!-- ==============tab section end here ==============-->

<!-- ==============related product section start here =========-->
<!-- <div class="pb-120">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading style-two">
          <h4 class="section-heading__title style-two">Related Products<span
              class="section-heading__bars style-two"></span></h4>
        </div>
      </div>
    </div>
    <div class="row gy-4">
      <div class="col-lg-3 col-md-6 col-sm-6 col-xsm-6">
        <div class="product-item">
          <div class="product-item__thumb">
            <a href="product-two-details.php" class="product-item__thumb-link">
              <img src="assets/images/thumbs/product/product01.png" alt="">
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
      <div class="col-lg-3 col-md-6 col-sm-6 col-xsm-6">
        <div class="product-item">
          <div class="product-item__thumb">
            <a href="product-two-details.php" class="product-item__thumb-link">
              <img src="assets/images/thumbs/product/product02.png" alt="">
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
                <i class="fas fa-star"></i>
              </li>
              <li class="product-info__number">
                5.0
              </li>
            </ul>
            <h6 class="product-item__price">
              <span class="product-item__price-new">$299</span> $199
            </h6>
            <a href="cart.php" class="btn btn--base pill btn--sm">Add to Cart </a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xsm-6">
        <div class="product-item">
          <div class="product-item__thumb">
            <a href="product-two-details.php" class="product-item__thumb-link">
              <img src="assets/images/thumbs/product/product03.png" alt="">
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
      <div class="col-lg-3 col-md-6 col-sm-6 col-xsm-6">
        <div class="product-item">
          <div class="product-item__thumb">
            <a href="product-two-details.php" class="product-item__thumb-link">
              <img src="assets/images/thumbs/product/product04.png" alt="">
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
              <span class="product-item__price-new">$190</span> $170
            </h6>
            <a href="cart.php" class="btn btn--base pill btn--sm">Add to Cart </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="pb-120">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading style-two">
          <h4 class="section-heading__title style-two"> You may also like <span
              class="section-heading__bars style-two"></span></h4>
        </div>
      </div>
    </div>
    <div class="row gy-4">
      <div class="col-lg-3 col-md-6 col-sm-6 col-xsm-6">
        <div class="product-item">
          <div class="product-item__thumb">
            <a href="product-two-details.php" class="product-item__thumb-link">
              <img src="assets/images/thumbs/product/product05.png" alt="">
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
      <div class="col-lg-3 col-md-6 col-sm-6 col-xsm-6">
        <div class="product-item">
          <div class="product-item__thumb">
            <a href="product-two-details.php" class="product-item__thumb-link">
              <img src="assets/images/thumbs/product/product06.png" alt="">
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
              <span class="product-item__price-new">$360</span> $310
            </h6>
            <a href="cart.php" class="btn btn--base pill btn--sm">Add to Cart </a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xsm-6">
        <div class="product-item">
          <div class="product-item__thumb">
            <a href="product-two-details.php" class="product-item__thumb-link">
              <img src="assets/images/thumbs/product/product01.png" alt="">
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
              <span class="product-item__price-new">$360</span> $310
            </h6>
            <a href="cart.php" class="btn btn--base pill btn--sm">Add to Cart </a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xsm-6">
        <div class="product-item">
          <div class="product-item__thumb">
            <a href="product-two-details.php" class="product-item__thumb-link">
              <img src="assets/images/thumbs/product/product08.png" alt="">
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
                5.0
              </li>
            </ul>
            <h6 class="product-item__price">
              <span class="product-item__price-new">$360</span> $310
            </h6>
            <a href="cart.php" class="btn btn--base pill btn--sm">Add to Cart </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->


<!-- ===============related section two end here ===================-->





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
<!-- 
-->