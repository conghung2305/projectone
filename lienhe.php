    <style>
        .box_lh{
          
            width: 80%;
            margin: 0 auto;
        }
        .box{
            margin: 40px 0px;

        }
        .box h2{
            text-align: center;
            font-size: 25px;
            font-weight: 700;
            text-transform: uppercase;
            color: #414141;
        }
        .contai{
            padding: 20px;
            /* border: 1px solid black; */
            background-color: #ffffff;
            box-shadow:  2px 2px 1px 2px whitesmoke;
            border-radius: 5px;
        }
       
        input{
        background-color: #f7f7f7;
        width: 720px;
        border-radius: 3px;
        font-weight: 400;
        font-size: 12px;
        color: black;
        padding: 0 15px;
        height: 40px;

        }
        input [type="submit"]{
            background-color: blue;
            color: #f7f7f7;
        }
        .contact-form-style .gui{
            margin-top: 20px;
            margin-left: 20px;
            padding: 7px 25px;
            background-color: blue;
            border: none;
            border-radius: 3px;
            color: white;
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
                                <ul class="dropdown">
                                    <li><a href="index.php?act=home">Trang chủ 1</a></li>
                                   
                                </ul>
                                <!--Dropdown Menu End-->
                            </li>
                            <li><a href="">Cửa hàng<i class="ion-ios7-arrow-down"></i></a> </li>
                          
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
                                <img style="border-radius:50% ;" src="./admin/admin/upload/<?php echo $_SESSION['user']['anh'] ?>" alt=""
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
		
	
        
		<div class="box">
            <h2>form liên hệ</h2>
        </div>

        <div class="box_lh" >
        <div class="contact-us-area pb-55">
		    <div class="contai">
		        <div class="row">
                <div class="col-lg-3 col-md-4">
		                <div class="store-information">
		                    <div class="store-title">
		                      
		                        <div class="communication-info">
                                
		                            <div class="single-communication">
		                                <div class="communication-icon">
		                                    <i class="fa fa-map-marker"></i>
		                                </div>
		                                <div class="communication-text">
		                                    <span>Vị trí<br> Hà Nội</span>
                                    </div>
		                            </div>
		                           
		                            <div class="single-communication">
		                                <div class="communication-icon">
		                                    <i class="fa fa-phone"></i>
		                                </div>
		                                <div class="communication-text">
		                                    <span>Phone: <br><a href="tel:8001234567">(800) 123 4567</a></span>
		                                </div>
		                            </div>
		                           
		                            <div class="single-communication">
		                                <div class="communication-icon">
		                                    <i class="fa fa-envelope"></i>
		                                </div>
		                                <div class="communication-text">
		                                    <span>Email : <br><a href="mailto:demo@hastech.com">demo@hastech.com</a></span>
		                                </div>
		                            </div>
		                           
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="col-lg-9 col-md-8">
		               
                            <!-- benphai -->
		                   
		                        <div class="contact-form">
                                    <div class="contact-form-title">
                                        <h3>Liên hệ chúng tôi</h3>
                                    </div>
		                            <form id="" action="index.php?act=lienhe&id" method="post">
                                        <!-- <input type="" name="id" value="' . $id_nguoidung . '"> -->
		                                <div class="    ">
		                                    <div class="col-lg-6">
                                                <div class="contact-form-style mb-20">
                                                <input name="ten_lienhe" placeholder="Họ tên" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-form-style mb-20">
                                                    <input name="email" placeholder="Địa chỉ Email" type="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-form-style mb-20">
                                                    <input name="sdt" placeholder="Số điện thoại" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
												<div class="contact-form-style mb-20">
                                                    <input name="diachi" placeholder="Địa chỉ" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="contact-form-style">
                                                    <textarea name="noidung" placeholder="Nội dung"></textarea>
                                                    <button style="backgourd:" class="gui"type="submit" name="send">Gửi</button>
                                                    
                                                </div>
                                            </div>
		                                </div>
		                            </form>
		                            <p class="form-messege"></p>
		                        </div>
		                
		               
		            </div>
		        </div>
		    </div>
		</div>
        </div>
		<!--Contact Us Area End-->
		<!--Footer Area Start-->
		
	
	</div>
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
</body>

<!-- Mirrored from htmldemo.net/indecor/indecor/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2023 02:36:44 GMT -->
</html>