<?php
include("header.php");
?>

<!-- ==================== Breadcumb Start Here ==================== -->
<section class="breadcumb py-120 bg-img" style="background-image: url(assets/images/thumbs/breadcumb-img.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h1 class="breadcumb__title">  Wishlist </h1>
                    <ul class="breadcumb__list">
                        <li class="breadcumb__item"><a href="index.php" class="breadcumb__link"> <i class="las la-home"></i> Home</a> </li>
                        <li class="breadcumb__item"> / </li>
                        <li class="breadcumb__item"> <span class="breadcumb__item-text">  Wishlist  </span> </li>
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
                    <h3 class="section-heading__title style-two"> Wishlist <span class="section-heading__bars"></span></h3>
                 </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table--responsive--lg cart-table">
                  <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Until Price</th>
                        <th>Delete</th>
                        <th> Add to Cart</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Product Name">
                            <div class="customer">
                                <div class="customer__thumb">
                                    <img src="assets/images/thumbs/product/product02.png" alt="">
                                </div>
                                <div class="customer__content">
                                    <h6 class="customer__name"> Coco Kat Kitten Milk </h6>
                                </div>
                            </div>
                        </td>
                        <td data-label="Until Price "> $260 </td>
                        <td data-label="Delete">               
                            <button type="button" class="delete-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"> <i class="las la-trash-alt"></i> </button>                
                        </td>
                        <td data-label="Cart"> 
                            <a href="cart.php" class="btn btn--base">Add to Cart</a>
                        </td>
                        </tr>
                      <tr>
                        <td data-label="Product Name">
                            <div class="customer">
                                <div class="customer__thumb">
                                    <img src="assets/images/thumbs/product/product03.png" alt="">
                                </div>
                                <div class="customer__content">
                                    <h6 class="customer__name"> Moderna Trendy Story </h6>
                                </div>
                            </div>
                        </td>
                        <td data-label="Until Price">$350</td>
                        <td data-label="Delete">
                            <button type="button" class="delete-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"> <i class="las la-trash-alt"></i> </button>
                        </td>
                        <td data-label="Cart"> 
                            <a href="cart.php" class="btn btn--base">Add to Cart</a>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Product Name">
                            <div class="customer">
                                <div class="customer__thumb">
                                    <img src="assets/images/thumbs/product/product04.png" alt="">
                                </div>
                                <div class="customer__content">
                                    <h6 class="customer__name"> Naughty Cat Bentonite </h6>
                                </div>
                            </div>
                        </td>
                        <td data-label="Until Price"> $180 </td>
                        <td data-label="Delete">
                             <button type="button" class="delete-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"> <i class="las la-trash-alt"></i> </button>
                        </td>
                        <td data-label="Cart"> 
                            <a href="cart.php" class="btn btn--base">Add to Cart</a>
                        </td>
                      </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div class="cart-btn-area d-flex justify-content-between flex-wrap">
            <div class="shopping-cart mb-0">
                <a href="index.php" class="btn btn--base pill shopping-cart__pr mb-3">CONTINUE SHOPPING</a>
                <a href="cart.php" class="btn btn--white pill shopping-cart mb-3">UPDATE SHOPPING CART</a>
            </div>
            <div class="clear-cart">
                <a href="cart.php" class="btn pill btn--white">Clear Shopping cart</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="order-summery ms-auto">
                   <div class="order-summery__one d-flex justify-content-between">
                     <h6 class="order-summery__title"> Subtotal </h6>
                     <span class="order-summery__number">$24000.00</span>
                   </div>
                   <div class="order-summery__two d-flex justify-content-between">
                     <h6 class="order-summery__title-two"> Grand Total : </h6>
                     <span class="order-summery__number-two">$24000.00</span>
                  </div>
                  <div class="checkout">
                    <a href="check-out.php" class="btn btn--base pill">PROCEED TO CHECKOUT</a>
                    <p class="checkout__desc">Checkout With Multiple Addresses</p>
                  </div>
                 
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===============cart section end here ==================-->

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

<?php
include("footer.php");
?>