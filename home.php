        <style>
            .rendo_sp {
                /* border: 1px solid black; */
                display: flex;
                /* justify-content: space-around; */
                gap: 27px;
                flex-wrap: wrap;
                min-height: 300px;
                padding: 10px;
               
              
               
            }

            .product_child {
                border-radius: 3px;
                width: 18%;
                box-shadow: 0 2px 2px gray;
                /* border: 1px solid black; */
                margin-top: 20px;
                box-sizing: border-box;
            }

            .product-img {
                position: relative;
                overflow: hidden;
                margin: 0 auto;
            }

            .product-img a {
                display: block;
            }

            .first-img {
                left: 3%;
                width: 94%;
                height:200px;
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
             
                width: 140px;
                height: 40px;
                font-size: 20px;
                line-height: 20px;
                color: black;
                position: absolute;
                bottom: 73px;
                left: 33px;
                border: none;
                border-radius: 3px;
                opacity: 0;
                visibility: hidden;
                transition: opacity 0.3s ease-in-out;
            }

            .product_child:hover .watch {
                opacity: 1;
                visibility: visible;
                background: #ff7a5f;
                border-color: #ff7a5f;
                color: #fff;
            }

            .product_child:hover img.first-img {
                opacity: 0.75;
            }
            .menu1{
                margin-top: 4px;
                font-size: 14px;
                font-style: normal;
                font-weight: 500;
                position: relative;
            }
            .menu1 :hover .cap2-1 a{
                color: #ff7a5f;
            }
            .cap2 {
            display: none;
            list-style: none;
            box-shadow: 0 1px 1px 1px ;
            position: absolute;
            top: 100%; 
            left: 0;
            z-index: 1;
            }

            .menu1:hover .cap2 {
                display: block;
            }

            .cap2-1 {
                width: 100px;
                background-color: white;
                margin: 3px 0;
                min-height:15px;
            }

            .cap2-1 a {
                display: block;
                padding: 10px;
                text-decoration: none;
                color: black;
            }
            .slide{
            background-color: wazure ;
            border: 0.5px solid white;
            border-radius: 5px;
            margin: 0 auto;
            width:90% ;
            height: 500px;
            margin-top:8px;
            position: relative;
            }
            .slide img{
                border-radius: 5px;
                width: 100%;
                height: 100%; 
            }
            .slide .button_slide{
                position: absolute;
                display: flex;
                top: 220px;
                left: 0px;
                right: 0px;
                justify-content: space-between;
            }
            .slide .button_slide button{
                border:none;
                background-color:transparent ;
                /* background-color: rgba(255, 255, 255, 0.5); */
            }
            .slide .button_slide button i {
                font-size: 40px;
            padding: 5px;
            color: (210,255,255);
            }
            .mini-cart img{
                
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
                                        <li><a href="index.php?act=home">Trang chủ <i class="ion-ios7-arrow-down"></i></a>
                                            <!--Dropdown Menu Start-->
                                            
                                            <!--Dropdown Menu End-->
                                        </li>
                                        <li><a href="">Điên thoại<i class="ion-ios7-arrow-down"></i></a>
                                            <ul class="dropdown">
                                            <?php
                                                $new_dm = loadall_danhmuc();
                                                foreach ($new_dm as $dm) {
                                                    $link = "index.php?act=dm_sanpham&iddm=" . $dm['id']; // Thay đổi $id thành $dm['id']
                                                    extract($dm);
                                                    // echo '<pre>';
                                                    // print_r($dm);
                                                
                                                    echo '
                                                        <li><a class="" href="' . $link . '">' . $ten_danhmuc . '</a></li>
                                                    ';
                                                }
                                                ?>
                                                  
                                                </ul>    
                                         </li>
                    
                                        <li><a href="">Giới thiệu </a></li>
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
                                    

                                    <li class="mini-cart" align="left">
                                        <?php
                                        if (isset($_SESSION['user'])) {
                                            $id = $_SESSION['user']['id'];
                                            $hinhanh_user = pdo_query_one("select *from user where id= $id");
                                            ?>
                                            <img style="border-radius:50% ;" src="admin/upload/<?php echo $_SESSION['user']['anh'] ?>" alt=""
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
   
        <!-- main-search start tim kiem  -->
        <div class="main-search-active">
            <div class="sidebar-search-icon">
                <button class="z-close"><span class="ion-android-close"></span></button>
            </div>
            <div class="sidebar-search-input">
                
                <form method="post" action="index.php?act=tk_sanpham">
                    <div class="form-search">
                        <input id="search" name="keyword" class="input-text" value="" placeholder="Nhập từ khóa"
                            type="search">
                        <button type="submit" name="check_tk">
                            <i class="ion-android-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
      
        <!--Slider Area Start-->
        <div class="slide">
                 <img id="anh" onclick="slide()" src="view/img/slide6.webp" alt="">
                <div class="button_slide">
                    <button  onclick="prew()"><i class="fa-solid fa-chevron-left"></i></button>
                    <button   onclick="next()"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>

       

           <!-- danh muc san pham       -->
        <div class="product-area pt-20 pb-35">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!--Section Title 2 Start-->
                        <div class="section-title2">
                            <h2>Sản phẩm </h2>
                         
                        </div>
                        <!--Section Title 2 End-->
                    </div>
                </div>

                <div class="rendo_sp">
                    <?php

                    $new_sp = loadall_sanpham_home();
                    foreach ($new_sp as $sp) {
                        extract($sp);
                        $hinh = $anh_sp . $anhsp;
                        echo '
                                <div class="product_child">
                                    <div class="product-img">
                                            <a href="index.php?act=chitiet_sp&idsp=' . $id . '">
                                            <img class="first-img" src="' . $hinh . '" alt="">
                                            </a>
                                                <span class="sticker">New</span>
                                              
                                                    <a href="index.php?act=chitiet_sp&idsp=' . $id . '">  <input type="button" class="watch" onclick="" value="Xem chi tiet"> </a>

                                        <div class="product-content">
                                            <h4><a href="single-product.html">' . $tensp . '</a></h4>

                                                <div class="product-price">
                                                    <span class="now-price">' . number_format($gia) . 'VND</span>
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
              <!-- san pham cùng benner       -->
        <div class="deal-product-area deal-bg">
            <?php
            $dem = 0;
            foreach ($new_sp as $sp) {
                if ($dem < 1) {
                    extract($sp);
                    $hinh = $anh_sp . $anhsp;
                    echo '
                            <div class="single-deal-product">
                                <div class="deal-product-img img-full">
                                <a href="index.php?act=chitiet_sp"><img src="' . $hinh . '" alt=""></a>
                                    
                                </div>
                                <div class="deal-product-content">
                                    <div class="section-title">
                                     
                                    </div>
                                    <h3><a href="">' . $tensp . '</a></h3>
                                    <p ' . $mota . '</p>
                                    <div class="product-price deal-price">
                                        <span class="now-price">' .  number_format($gia) . 'VND</span>
                                      
                                    </div>
                                    <div class="product-countdown">
                                        <div class="pro-countdown" data-countdown="2020/09/04"></div>
                                    </div>
                                </div>
                            </div>
                        ';
                    $dem++;
                } else {
                    break;
                }
            }
            ?>



        </div>
        
            <!-- thêm sản phâm -->

        <div class="list-product-area pt-80 pb-30">
            <div class="container">
                <div class="row">
                    <!-- san pham moi -->
                    <div class="col-lg-4 col-md-12">
                        <!-- cot san pham mới -->
                        <div class="row">
                            <div class="col-12">

                                <div class="list-product-section-title mb-30">
                                    <h2>Sản phẩm mới</h2>
                                </div>

                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-12">
                                <div class="list-product-slider owl-carousel">
                                    <div class="list-slider-group">
                                        <!-- sản phâm 01-->
                                        <?php
                                        $dem = 0;
                                        foreach ($new_sp as $sp) {
                                            if ($dem < 3) {
                                                extract($sp);
                                                $hinh = $anh_sp . $anhsp;
                                                echo '
                                                        <div class="single-list-product mb-50">
                                                                <div class="product-img img-full">
                                                                    <a href="index.php?act=chitiet_sp&idsp=' . $id . '"><img src="' . $hinh . '"
                                                                            alt=""></a>
                                                                </div>
                                                                    <div class="product-content">
                                                                        <h4><a href="">' . $tensp . '</a></h4>
                                                                        <div class="product-price">
                                                                            <span class="now-price">' .  number_format($gia) . 'VND</span>
                                                                           
                                                                        </div>
                                                                        <a class="add-cart-btn" href="index.php?act=chitiet_sp&idsp=' . $id . '">Xem chi tiết </a>
                                                                    </div>
                                                        </div>
                                                    ';
                                                $dem++;
                                            } else {
                                                break;
                                            }
                                        }
                                        ?>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                          <!-- san pham mua  nhieu nhat    -->
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <!--List Product Section Title Start-->
                                <div class="list-product-section-title mb-30">
                                    <h2>Sản phẩm mua nhiều</h2>
                                </div>
                                <!--List Product Section Title End-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="list-product-slider owl-carousel">
                                    <div class="list-slider-group">
                                        <!-- san pham 02-->
                                        <!--  -->

                                        <?php
                                        $dem = 0;
                                        usort($new_sp, function ($a, $b) {
                                            return $b['luot_mua'] - $a['luot_mua'];
                                        });

                                        $top_mua = array_slice($new_sp, 0, 3);

                                        foreach ($top_mua as $sp) {
                                            if ($dem < 3) {  // Hiển thị 4 sản phẩm
                                                extract($sp);
                                                $hinh = $anh_sp . $anhsp;
                                                echo '
                                                        <form class="single-list-product mb-50">
                                                            <div class="product-img img-full">
                                                                <a href="index.php?act=chitiet_sp&idsp=' . $id . '"><img src="' . $hinh . '" alt=""></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <h4><a href="index.php?act=chitiet_sp&idsp=' . $id . '">' . $tensp . '</a></h4>
                                                                <div class="product-price">
                                                                    <span class="now-price">' .  number_format($gia) . 'VND</span>
                                                                </div>
                                                                <a class="add-cart-btn" href="index.php?act=chitiet_sp&idsp=' . $id . '">Xem chi tiết </a>
                                                            </div>
                                                        </form>
                                                    ';
                                                $dem++;
                                            } else {
                                                break;
                                            }
                                        }
                                        ?>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                            <!-- san pham xem nhiều nhât -->
                    <div class="col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <!--List Product Section Title Start-->
                                <div class="list-product-section-title mb-30">
                                    <h2>Sản phẩm xem nhiều nhất </h2>
                                </div>
                                <!--List Product Section Title End-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="list-product-slider owl-carousel">
                                    <div class="list-slider-group">
                                        <!--Single List Product Start-->
                                        <?php
                                        $dem = 0;
                                        usort($new_sp, function ($a, $b) {
                                            return $b['luot_xem'] - $a['luot_xem'];
                                        });

                                        $top_lx = array_slice($new_sp, 0, 3);

                                        foreach ($top_lx as $sp) {
                                            if ($dem < 3) {  // Hiển thị 4 sản phẩm
                                                extract($sp);
                                                $hinh = $anh_sp . $anhsp;
                                                echo '
                                                        <div class="single-list-product mb-50">
                                                            <div class="product-img img-full">
                                                                <a href="index.php?act=chitiet_sp&idsp' . $id . '"><img src="' . $hinh . '" alt=""></a>
                                                            </div>
                                                            <div class="product-content">
                                                                <h4><a href="index.php?act=chitiet_sp&idsp=' . $id . '">' . $tensp . '</a></h4>
                                                                <div class="product-price">
                                                                    <span class="now-price">' .  number_format($gia) . 'VND</span>
                                                                   
                                                                </div>
                                                                <a class="add-cart-btn" href="index.php?act=chitiet_sp&idsp=' . $id . '">Xem chi tiết </a>
                                                            </div>
                                                        </div>
                                                    ';
                                                $dem++;
                                            } else {
                                                break;
                                            }
                                        }
                                        ?>


                                        <!-- <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="index.php?act=chitiet_sp"><img src="img/product/product7.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="index.php?act=chitiet_sp">Samsung Galaxy Tab A</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$241.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Xem chi tiết </a>
                                            </div>
                                        </div>
                                      
                                        <div class="single-list-product mb-50">
                                            <div class="product-img img-full">
                                                <a href="index.php?act=chitiet_sp"><img src="img/product/product8.jpg"
                                                        alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <h4><a href="single-product.html">Lenovo Ideacentre 300</a></h4>
                                                <div class="product-price">
                                                    <span class="now-price">$116.00</span>
                                                </div>
                                                <a class="add-cart-btn" href="cart.html">Xem chi tiết </a>
                                            </div>
                                        </div> -->


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                            <h3>Thông tin</h3>
                                        </div>
                                        <ul class="link-widget">
                                            <li><a href="#">Giới thiệu</a></li>
                                            <li><a href="#">Mổ ta</a></li>
                                            
                                        </ul>
                                    </div>
                                    <!--Single Footer Wiedget End-->
                                </div>
                                <div class="col-xl-2 col-lg-6 col-md-6 col-12">
                                    <!--Single Footer Wiedget Start-->
                                    <div class="single-footer-wiedget mb-30">
                                        <div class="footer-title">
                                            <h3>Bổ sung</h3>
                                        </div>
                                        <ul class="link-widget">
                                            <li><a href="#">Hãng</a></li>
                                            <li><a href="#">Phiếu quà tặng</a></li>
                                            <li><a href="#">Liên kết</a></li>
                                            
                                           
                                        </ul>
                                    </div>
                                    <!--Single Footer Wiedget End-->
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                    <!--Single Footer Wiedget Start-->
                                    <div class="single-footer-wiedget mb-30">
                                        <div class="footer-title">
                                            <h3>Gửi bản tin</h3>
                                            <p>Đăng ký nhận bản tin</p>
                                        </div>
                                        <!--Newsletter Area Start-->
                                        <div class="newsletter-area">
                                            <div class="newsletter-form">
                                                <!-- Newsletter Form -->
                                                <form
                                                    action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef"
                                                    method="post" id="mc-embedded-subscribe-form"
                                                    name="mc-embedded-subscribe-form"
                                                    class="popup-subscribe-form validate" target="_blank" novalidate>
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
                                            <h3>Thanh toán</h3>
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

                                    <!--Modal Content End-->
                                    <!--Modal Tab Menu Start-->
                                   
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
                                                    <button class="form-button" data-text="add to cart">add to
                                                        cart</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="cart-description">
                                            <p>"Cuộc sống nhộn nhịp, điện thoại ngắn gọn là người bạn đồng hành, kết nối tình cảm, giữ kỷ niệm và làm đẹp khoảnh khắc</p>
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
        <script>
            var index = 0;
        var array = [

            'view/img/slide7.jpg',
             'view/img/slide8.jpg',
             'view/img/slide6.webp',
            
        ];
        function next() {
            // Truy cập hình ảnh hiện tại
            index++; // Tăng index lên 1
            // document.getElementById('anh').src = array[index];?
            if (index === array.length) { // Kiểm tra nếu đã qua hết hình ảnh cuối cùng
                index = 0; // Trở lại hình ảnh đầu tiên
            }
            document.getElementById('anh').src = array[index];
        }
        function prew(){
            index--;
            if(index<0){
                index= array.length-1
            }
            document.getElementById('anh').src = array[index];
        }
            setInterval(next,2000);

        </script>