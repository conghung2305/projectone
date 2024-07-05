<style>
            .rendo_sp {
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
                min-height: 300px;
                padding: 10px; 
            }

            .product_child {
                width: 23%;
                margin-top: 10px;
                box-sizing: border-box; 
            }

                .product-img {
                    position: relative;
                    overflow: hidden;
                }

                .product-img a {
                    display: block;
                }

                .first-img {
                    width: 100%;
                    transition: transform 0.3s ease-in-out;
                }

                .product-content {
                    padding: 10px;
                    text-align: center;
                }

                .product-content h4 {
                    margin-top: 0;
                    font-size: 16px;
                }

                .product-price {
                    margin-top: 10px;
                    font-size: 18px;
                    font-weight: bold;
                }
                .watch {
                    width: 120px;
                    height: 40px;
                    font-size: 20px;
                    line-height: 20px;
                    background-color: cadetblue;
                    color: aliceblue;
                    position: absolute;
                    bottom: 73px;
                    left: 84px;
                    border: none;
                    border-radius: 3px;
                    opacity: 0;
                    visibility: hidden;
                    transition: opacity 0.3s ease-in-out;
                }

                .product_child:hover .watch {
                    opacity: 1;
                    visibility: visible;
                }

                .product_child:hover img.first-img {
                    opacity: 0.75;
                }

    </style>

<body>
    

    <div class="wrapper wrapper-box">
    <header>

<div class="default-header-area header-sticky">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-12">
                <!--Logo Area Start-->
                <div class="logo-area">
                <a href="index.php?act=home"><img src="img/logo/logo.png" alt="logo"></a>
                </div>
                <!--Logo Area End-->
            </div>
            <div class="col-lg-6 col-md-4 d-none d-lg-block col-12">
                <!--Header Menu Area Start-->
                <div class="header-menu-area text-center">
                    <nav>
                    <ul class="main-menu">
                            <li><a href="index.php?act=home">Home <i class="ion-ios7-arrow-down"></i></a>
                                <!--Dropdown Menu Start-->
                                <ul class="dropdown">
                                    <li><a href="index.php?act=home">Home Shop 1</a></li>
                                   
                                </ul>
                                <!--Dropdown Menu End-->
                            </li>
                            <li><a href="">Shop <i class="ion-ios7-arrow-down"></i></a> </li>
                            <li><a href="">Blog <i class="ion-ios7-arrow-down"></i></a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="index.php?act=lienhe">Liên hệ </a></li>
                     
                        </ul>
                    </nav>
                </div>
                <!--Header Menu Area End-->
            </div>
            <div class="col-lg-3 col-md-5 col-12">
                <!--Header Search And Mini Cart Area Start-->
                <div class="header-search-cart-area">
                    <ul>
                        <li><a class="sidebar-trigger-search" href="#"><span class="icon_search"></span></a>
                        </li>
                        <li class="currency-menu"><a href="#"><span class="icon_lock_alt"></span></a>
                            <!--Crunccy dropdown-->
                            <ul class="currency-dropdown">

                                <?php
                                include "boxtaikhoan.php";
                                ?>
                                <!-- <li><a href="my-account.html">My account</a>
                                    <ul  >
                                        <li><a href="index.php?act=login">Login</a></li> 
                                        <li><a href="index.php?act=register">Register</a></li>
                                        <li><a href="my-account.html">My account</a></li>
                                        <li><a href="index.php?act=viewcart">Cart</a></li>
                                       
                                    </ul>
                                </li> -->
                                <!--Account Currency End-->
                            </ul>
                            <!--Crunccy dropdown-->
                        </li>
                        

                        <li class="mini-cart">
                            <?php
                            if (isset($_SESSION['user'])) {

                                $id = $_SESSION['user']['id'];

                                $hinhanh_user = pdo_query_one("select *from user where id= $id");
                                ?>
                                <img src='../admin/upload/<?php echo $_SESSION['user']['anh'] ?>' alt=""
                                    width="30px" height="30px">
                                <?php
                            }

                            ?>

                            <h4>
                                <?php
                                if (isset($_SESSION['user'])) {

                                    echo $_SESSION['user']['ten_nguoidung'];
                                } ?>
                            </h4>

                        </li>
                    </ul>
                </div>
                <!--Header Search And Mini Cart Area End-->
            </div>
        </div>
    </div>
</div>
<!--Default Header Area End-->
</header>
        <!--Header Area Start-->
        <!-- main-search start -->
        <div class="main-search-active">
            <div class="sidebar-search-icon">
                <button class="search-close"><span class="ion-android-close"></span></button>
            </div>
            <div class="sidebar-search-input">
                <form>
                    <div class="form-search">
                        <input id="search" class="input-text" value="" placeholder="Search Entire Store" type="search">
                        <button>
                            <i class="ion-android-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- main-search End -->
        <!--Slider Area Start-->
        <div class="slider-area">
            <div class="hero-slider owl-carousel">

               <!-- slide anh -->
                <div class="single-slider" style="background-image: url(img/slider/slide1.png)">
                    <div class="hero-slider-content">
                        <h1>let’s solve hunger together with monthly Offer</h1>
                        <h2>Tumbler Alarm Clock</h2>
                        <div class="slider-btn">
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                
                <div class="single-slider" style="background-image: url(img/slider/slide3.jpg)">
                    <div class="hero-slider-content">
                        <h1>let’s solve hunger together with monthly Offer</h1>
                        <h2>Perfect Bottle Grinder</h2>
                        <div class="slider-btn">
                            <a href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
                <!--Single Slider End-->
            </div>
        </div>
       
        <div class="feature-area pt-80 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!--Single Feature Area Start-->
                        <div class="single-feature-area mb-30">
                            <div class="feature-content">
                                <h3>free shipping worldwide</h3>
                            </div>
                        </div>
                        <!--Single Feature Area End-->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!--Single Feature Area Start-->
                        <div class="single-feature-area mb-30">
                            <div class="feature-content">
                                <h3>free shipping worldwide</h3>
                            </div>
                        </div>
                        <!--Single Feature Area End-->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!--Single Feature Area Start-->
                        <div class="single-feature-area mb-30">
                            <div class="feature-content">
                                <h3>free shipping worldwide</h3>
                            </div>
                        </div>
                        <!--Single Feature Area End-->
                    </div>
                </div>
            </div>
        </div>
    

            
        <div class="product-area pt-20 pb-35">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!--Section Title 2 Start-->
                        <div class="section-title2">
                            <h2> Sản phẩm theo danh mục</h2>
                            <!-- <h1>Tên danh mục<?=$ten_danhmuc?></h1> -->
                            <!--Product Tab Menu Start-->
                            
                            <!--Product Tab Menu End-->
                        </div>
                        <!--Section Title 2 End-->
                    </div>
                </div>
              
                    <div class="rendo_sp">
                        <?php
                                 foreach($list_sp as $child_sp){
                                   
                                    extract($child_sp);
                                    $hinh=$anh_sp.$anhsp;
                                    // echo'<pre>';
                                    // print_r($child_sp);
                                    echo'
                                        <div class="product_child">
                                            <div class="product-img">
                                                    <a href="index.php?act=chitiet_sp&idsp='.$id.'">
                                                    <img class="first-img" src="'.$hinh.'" alt="">
                                                    </a>
                                                        <span class="sticker">New</span>
                                                    
                                                            <a href="index.php?act=chitiet_sp&idsp=' . $id . '">  <input type="button" class="watch" onclick="" value="Xem chi tiet"> </a>

                                                <div class="product-content">
                                                    <h4><a href="single-product.html">'.$tensp.'</a></h4>
                                                        <div class="product-price">
                                                            <span class="now-price">'.$gia.'</span>
                                                        </div>
                                                </div>
                                            
                                            </div> 
                                    </div>

                                            ';
                                 }
                                
                        ?>
                        
                       
                    </div>
               
            </div>
        </div>
       
        <!-- danh muc -->
               

        <div class="blog-area pt-10 pb-75">
        </div>
        <!--Blog Area End-->
        <!--Footer Area Start-->
        <footer>
            <div class="footer-container">
                <!--Footer Top Area Start-->
                <div class="footer-top-area footer-bg pt-80 pb-40">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                <!--Single Footer Wiedget Start-->
                                <div class="single-footer-wiedget mb-30">
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                                    </div>
                                    <div class="social-link">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="desc-footer">
                                        <p>Mauris interdum magna eu neque convallis, vel laoreet lectus ultrices. Mauris
                                            at ullamcorper orci. Maecenas in nulla erat.</p>
                                    </div>
                                    <div class="address-footer">
                                        <p class="phone"><span>+123.456.789 - +123.456.678</span></p>
                                        <p class="mail"><span>support@devitems.com</span></p>
                                    </div>
                                </div>
                                <!--Single Footer Wiedget End-->
                            </div>
                            <div class="col-xl-2 col-lg-6 col-md-6 col-12">
                                <!--Single Footer Wiedget Start-->
                                <div class="single-footer-wiedget mb-30">
                                    <div class="footer-title">
                                        <h3>Information</h3>
                                    </div>
                                    <ul class="link-widget">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                                <!--Single Footer Wiedget End-->
                            </div>
                            <div class="col-xl-2 col-lg-6 col-md-6 col-12">
                                <!--Single Footer Wiedget Start-->
                                <div class="single-footer-wiedget mb-30">
                                    <div class="footer-title">
                                        <h3>Extras</h3>
                                    </div>
                                    <ul class="link-widget">
                                        <li><a href="#">Brands</a></li>
                                        <li><a href="#">Gift Certificates</a></li>
                                        <li><a href="#">Affiliate</a></li>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="#">Wish List</a></li>
                                    </ul>
                                </div>
                                <!--Single Footer Wiedget End-->
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                <!--Single Footer Wiedget Start-->
                                <div class="single-footer-wiedget mb-30">
                                    <div class="footer-title">
                                        <h3>Send Newsletter</h3>
                                        <p>Sign up for our newsletter &amp; promotions</p>
                                    </div>
                                    <!--Newsletter Area Start-->
                                    <div class="newsletter-area">
                                        <div class="newsletter-form">
                                            <!-- Newsletter Form -->
                                            <form
                                                action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                                method="post" id="mc-embedded-subscribe-form"
                                                name="mc-embedded-subscribe-form" class="popup-subscribe-form validate"
                                                target="_blank" novalidate>
                                                <div id="mc_embed_signup_scroll">
                                                    <div id="mc-form" class="mc-form subscribe-form">
                                                        <input id="mc-email" type="email" autocomplete="off"
                                                            placeholder="Enter your email here" />
                                                        <button id="mc-submit">Subscribe !</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--Newsletter Area End-->
                                    <div class="payment">
                                        <h3>payments</h3>
                                        <img src="img/payment/payment.png" alt="payment">
                                    </div>
                                </div>
                                <!--Single Footer Wiedget End-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--Footer Top Area End-->
                <!--Footer Bottom Area Start-->
                <div class="footer-bottom-area pt-30 pb-20">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-12">
                                <!--Footer Copyright Start-->
                                <div class="footer-copyright">
                                    <p>Copyright &copy; <a href="#">Indecor.</a> All Rights Reserved</p>
                                </div>
                                <!--Footer Copyright End-->
                            </div>
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="custom-link-footer">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Customer Services</a></li>
                                        <li><a href="#">Term & Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Footer Bottom Area End-->
            </div>
        </footer>
        <!--Footer Area End-->
        <!-- Modal Area Strat -->
        <div class="modal fade" id="open-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                                class="fa fa-close"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <!--Modal Img-->
                            <div class="col-md-5">
                                <!--Modal Tab Content Start-->
                                <div class="tab-content product-details-large" id="myTabContent">
                                    <div class="tab-pane fade show active" id="single-slide1" role="tabpanel"
                                        aria-labelledby="single-slide-tab-1">
                                        <!--Single Product Image Start-->
                                        <div class="single-product-img img-full">
                                            <img src="img/single-product/small/single-product1.jpg" alt="">
                                        </div>
                                        <!--Single Product Image End-->
                                    </div>
                                    <div class="tab-pane fade" id="single-slide2" role="tabpanel"
                                        aria-labelledby="single-slide-tab-2">
                                        <!--Single Product Image Start-->
                                        <div class="single-product-img img-full">
                                            <img src="img/single-product/small/single-product2.jpg" alt="">
                                        </div>
                                        <!--Single Product Image End-->
                                    </div>
                                    <div class="tab-pane fade" id="single-slide3" role="tabpanel"
                                        aria-labelledby="single-slide-tab-3">
                                        <!--Single Product Image Start-->
                                        <div class="single-product-img img-full">
                                            <img src="img/single-product/small/single-product3.jpg" alt="">
                                        </div>
                                        <!--Single Product Image End-->
                                    </div>
                                    <div class="tab-pane fade" id="single-slide4" role="tabpanel"
                                        aria-labelledby="single-slide-tab-4">
                                        <!--Single Product Image Start-->
                                        <div class="single-product-img img-full">
                                            <img src="img/single-product/small/single-product4.jpg" alt="">
                                        </div>
                                        <!--Single Product Image End-->
                                    </div>
                                    <div class="tab-pane fade" id="single-slide5" role="tabpanel"
                                        aria-labelledby="single-slide-tab-4">
                                        <!--Single Product Image Start-->
                                        <div class="single-product-img img-full">
                                            <img src="img/single-product/small/single-product5.jpg" alt="">
                                        </div>
                                        <!--Single Product Image End-->
                                    </div>
                                </div>
                                <!--Modal Content End-->
                                <!--Modal Tab Menu Start-->
                                <div class="single-product-menu">
                                    <div class="nav single-slide-menu owl-carousel" role="tablist">
                                        <div class="single-tab-menu img-full">
                                            <a class="active" data-bs-toggle="tab" id="single-slide-tab-1"
                                                href="#single-slide1"><img
                                                    src="img/single-product/small/single-product1.jpg" alt=""></a>
                                        </div>
                                        <div class="single-tab-menu img-full">
                                            <a data-bs-toggle="tab" id="single-slide-tab-2" href="#single-slide2"><img
                                                    src="img/single-product/small/single-product2.jpg" alt=""></a>
                                        </div>
                                        <div class="single-tab-menu img-full">
                                            <a data-bs-toggle="tab" id="single-slide-tab-3" href="#single-slide3"><img
                                                    src="img/single-product/small/single-product3.jpg" alt=""></a>
                                        </div>
                                        <div class="single-tab-menu img-full">
                                            <a data-bs-toggle="tab" id="single-slide-tab-4" href="#single-slide4"><img
                                                    src="img/single-product/small/single-product4.jpg" alt=""></a>
                                        </div>
                                        <div class="single-tab-menu img-full">
                                            <a data-bs-toggle="tab" id="single-slide-tab-5" href="#single-slide5"><img
                                                    src="img/single-product/small/single-product5.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Modal Tab Menu End-->
                            </div>
                            <!--Modal Img-->
                            <!--Modal Content-->
                            <div class="col-md-7">
                                <div class="modal-product-info">
                                    <h1>Sit voluptatem</h1>
                                    <div class="modal-product-price">
                                        <span class="old-price">$74.00</span>
                                        <span class="new-price">$69.00</span>
                                    </div>
                                    <a href="single-product.html" class="see-all">See all features</a>
                                    <div class="add-to-cart quantity">
                                        <form class="add-quantity" action="#">
                                            <div class="modal-quantity">
                                                <input type="number" value="1">
                                            </div>
                                            <div class="add-to-link">
                                                <button class="form-button" data-text="add to cart">add to cart</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="cart-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis
                                            vulputate, tristique ut lectus.</p>
                                    </div>
                                    <div class="social-share">
                                        <h3>Share this product</h3>
                                        <ul class="socil-icon2">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Modal Content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Area End -->
    </div>
    





    <!--All Js Here-->

    <!--Jquery 3.6.0-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!--Popper-->
    <script src="js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="js/bootstrap.min.js"></script>
    <!--Ajax Mail-->
    <script src="js/ajax-mail.js"></script>
    <!--Plugins-->
    <script src="js/plugins.js"></script>
    <!--Main Js-->
    <script src="js/main.js"></script>
