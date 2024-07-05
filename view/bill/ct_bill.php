<style>
    body {
        font-family: Arial, sans-serif;
    }

    .list_ct {
        margin-top: 0px;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        /* background-color: #f5f5f5; */
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }

    th {
        /* background-color: #4CAF50; */
        color: black;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    h2 {
        text-align: center;
        color: #333;
    }
    input{
        margin-top: 20px;
        padding: 10px;
        background-color: orange;
        border: none;
        color: white;
    }
    /* header{
    background: white;
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1000;
} */
</style>

<header>

            <div class="default-header-area header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-12">
                            <!--Logo Area Start-->
                            <div class="logo-area">
                                <a href="index.html"><img src="img/logo/logo.png" alt="logo"></a>
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
                                    

                                    <li class="mini-cart">
                                        <?php
                                        if (isset($_SESSION['user'])) {
                                            $id = $_SESSION['user']['id'];
                                            $hinhanh_user = pdo_query_one("select *from user where id= $id");
                                            ?>
                                            <img src='/admin/admin/upload/<?php echo $_SESSION['user']['anh'] ?>' alt=""
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
<form class="list_ct" method="post" action="index.php?act=home">

    <h2 style="text-align: center">Chi tiết đơn hàng </h2>
    <!-- <input type="text" name="keyword" id="">
    <input type="submit" name="check_tk" value="tim kiem"> -->





    <table>
        <?php
        foreach ($list_ct_dh as $bill_dh) {
            $trangThai = ($bill_dh['trangthai'] == 0) ? 'Đang chờ xử lý' : '';
            if ($bill_dh['bill_pttt'] == 1) {
                $pttt = 'Thanh toán trực tiếp';
            }
            extract($bill_dh);
            // echo'<pre>';
            // print_r($bill_dh);
            echo '
						<tr>
					 <th>Mã đơn hàng</th>
					 <th>
						' . $id . '
					 </th>
				 </tr>    
				 <tr>
					 <th>Tên khách hàng </th>
					 <th>
						' . $ten_nguoinhan . '
					 </th>
				 </tr>  
				 <tr>
					 <th>Ngày đặt hàng</th>
					 <th>
					 ' . $ngay_dh . '
					 </th>
				 </tr>    
                 <tr>
					 <th>Tổng đơn hàng </th>
					 <th>
					 ' . number_format($tong_donhang) . ' VND
					 </th>
				 </tr>    
				 <tr>
					 <th>Phương thức thanh toán</th>
					 <th>' . $pttt . '</th>
				 </tr>  
				
				 <tr>
					 <th>Địa chỉ</th>
					 <th>
					 ' . $diachi_nguoinhan . '
					 </th>
				 </tr>  
				
				 <tr>
					 <th>Số điện thoại</th>
					 <th>' . $sdt_nguoinhan . '</th>
				 </tr>  
				 <tr>
					 <th>Tình trạng đơn hàng</th>
					 <th>' . $trangThai . '</th>
				 </tr>  

						';
        }
        ?>

    </table>
    <table>
        <tr>
            <th>STT </th>
            <th>Tên sản phẩm </th>
            <th>Ảnh sản phẩm </th>
            <th> Số lượng </th>
            <th>Giá</th>
            <th>Thanh tiền </th>

        </tr>
        <?php
        $stt = 1;
        foreach ($ct_bill as $bill_sp) {
            extract($bill_sp);
                // echo '<pre>';
                // print_r($bill_sp);
            $hinhpath = "admin/admin/upload/" . $anh_sp;
            if (is_file($hinhpath)) {
                $hinh = "<img src='" . $hinhpath . "' height='80'>";
            } else {
                $hinh = "no photo"; 
            }

            echo '
                                <tr>
                                     <td>' . $stt . '</td>
                                    <td>' . $bill_sp['ten_sp'] . '</td>
                                    <td>' . $hinh. '</td>
                                    <td>x' . $bill_sp['soluong'], '</td>
                                    <td>' . number_format($bill_sp['gia']) . 'VND</td>
                                    <td>' . number_format($bill_sp['thanhtien']) . 'VND</td>
                                  
                                </tr>
                            ';
            $stt++;
        }
            echo'
                    <td colspan=5 >Tổng tiền sản phẩm</td>
                    <td>'.number_format($tong_donhang).' VND</td>
            ';
        ?>

    </table>
    <a herf="index.php?act=home"> <input type="submit" value="quay vè trang chủ"> </a>
</form>