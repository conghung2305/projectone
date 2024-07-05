<style>
    button {
    border: none;
   
    background: none;
    cursor: pointer;
    outline: none;
    padding-top:20px;
}
.btn{
    text-align:center;
    margin-left:300px;
}
.custom-button {
    display: inline-block;
    background-color: #007bff; /* Màu nền */
    color: #fff; /* Màu chữ */
    padding: 7px ; /* Kích thước nút */
    border-radius: 4px; /* Bo tròn viền nút */
    font-size: 16px; /* Kích thước chữ */
    font-weight: bold; /* Đậm */
    border: 2px solid #007bff; /* Viền nút */
    transition: background-color 0.3s, color 0.3s; /* Hiệu ứng hover */
}

.custom-button:hover {
    background-color: #0056b3; /* Màu nền khi hover */
}

.custom-button:active {
    transform: translateY(1px); /* Hiệu ứng nhấn nút */
}
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .column_01 {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .bill {
        margin-bottom: 20px;

    }

    table {
        width: 100%;
        margin-top: 10px;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 12px;
        text-align:left;
    }

    th {
        background-color: #f2f2f2;
    }
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.cart {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

.cart h2 {
    text-align: center;
}

.cart-items {
    list-style: none;
    padding: 0;
}

.cart-item {
    display: flex;
    margin-bottom: 20px;
    padding: 10px;
    background-color: #f9f9f9;
    border-radius: 5px;
}

.cart-item img {
    max-width: 80px;
    margin-right: 10px;
    border-radius: 5px;
}

.item-details h3 {
    margin: 0;
}

.cart-total {
    text-align: right;
    margin-top: 20px;
}

.cart-total p {
    margin: 5px 0;
}

.checkout-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.checkout-button:hover {
    background-color: #0056b3;
}

    div {}
</style>
<link rel="stylesheet" href="css/style.css"> 
<link rel="stylesheet" href="css/grid.css"> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <link rel="stylesheet" href="css/css.css">  -->
<!-- <link rel="stylesheet" href="css/form.css">  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="header">
<div class="child_header">
                        <div class="box1_image">
                           
                            <div class="logo-area">
                                <img src="img/logo/logo.png" alt="logo">
                            </div>
                          
                        </div>
                        <div class="box2">
                            <!--Header Menu Area Start-->
                            <div class="header-menu-area text-center">
                                <nav>
                                <ul class="main-menu">
                                        <li><a href="index.php?act=home">Trang chủ <i class="ion-ios7-arrow-down"></i></a>
                                            <!--Dropdown Menu Start-->
                                            <ul class="dropdown">
                                              
                                               
                                            </ul>
                                            <!--Dropdown Menu End-->
                                        </li>
                                        <li><a href="#">Cửa hàng <i class="ion-ios7-arrow-down"></i></a> </li>
                               
                                        <li><a href="about.html">Giới thiệu</a></li>
                                        <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                                 
                                    </ul>
                                </nav>
                            </div>
                            <!--Header Menu Area End-->
                        </div>
                      
                            <!--Header Search And Mini Cart Area Start-->
                            <div class="box3">
                                <ul>
                                    <li><a class="sidebar-trigger-search" href="#"><span class="icon_search"></span></a>
                                    </li>
                                    <li class="currency-menu"><a href="#"><span class="icon_lock_alt"></span></a>
                                        <!--Crunccy dropdown-->
                                        <ul class="currency-dropdown">

                                            <?php
                                            include "boxtaikhoan.php";
                                            ?>
                                            
                                        </ul>
                                        <!--Crunccy dropdown-->
                                    </li>
                                    <li class="mini-cart"><a href="#"><span class="icon_bag_alt"></span> </a>

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
    <form class="column_01" method="post" action="index.php?act=bill_comfirm">
            
            <div class="bill">
                <h2 style="text-align: center">Thông tin đơn hàng</h2>
               
               
            </div>
            <div class="bill">
                <table>
                    <tr>
                        <th>Người đặt hàng</th>
                        <th>
                            <?= $thongtin['ten_nguoinhan'] ?>
                        </thh>
                    </tr>

                    <tr>
                        <th>Địa chỉ </th>
                        <th>
                            <?= $thongtin['diachi_nguoinhan'] ?>
                        </th>
                    </tr>
                    <tr>
                        <th>Email </th>
                        <th>
                        <?= $email ?>
                        </th>
                    </tr>
                    <tr>
                    <th>Điện thoại </th>
                        <th>
                            <?= $thongtin['sdt_nguoinhan'] ?>
                        </th>
                    </tr>
                </table>
            </div>
            <!--  -->
            <div class="bill">
               <table>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>
                            DA1_<?= $id_bill?>
</th>
                    </tr>    
                    <tr>
                        <th>Tổng đơn hàng</th>
                        <th>
                        <?=number_format( $thongtin['tong_donhang'])  ?>VND
                        </th>
                    </tr>  
                    <tr>
                        <th>Ngày đặt hàng</th>
                        <th>
                        <?=$thongtin['ngay_dh']?>
                        </th>
                    </tr>    
                    <tr>
                        <th>Phương thức thanh toán</th>
                        <th>
                        <?php
                        if ($thongtin['bill_pttt'] == 1) {
                                    echo 'Trả tiền khi nhận hàng';
                                } else {
                                    echo 'Thanh toán online';
                                }
                        ?>
                        </th>
                     

                             
                    </tr>  
                </table>
             </div>

    </form>
    <form>
    <div class="cart">
        <h2>Thông tin giỏ hàng</h2>
        <ul class="cart-items">
        <?php
            if (isset($ds_bill) && is_array($ds_bill)) {
                // echo '<pre>';
                // print_r($ds_bill);
                

                echo '
                <table border="1">
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                    </tr>';

                foreach ($ds_bill as $item) {
                    $hinhpath = "admin/admin/upload/" . $item[3];
                    if (is_file($hinhpath)) {
                        $hinh = "<img style='width: 80px!important;' src='" . $hinhpath . "' >";
                    } else {
                        $hinh = "no photo"; 
                    }
                    echo '
                    <tr>
                        <td>' . $item['ten_sp'] . '</td>
                        <td>'.$hinh.'</td>
                        <td>' . $item['soluong'] . '</td>
                        <td>' . number_format($item['gia']) . 'VND</td>
                    </tr>';
                }

                echo '</table>';
            }
        ?>

            
        </ul>
        <div class="cart-total">
            <p>Tổng cộng:<?= number_format($thongtin['tong_donhang']) ?>VND</p>
           
        </div>

    </div>
    <div class="btn">
        <a herf="index.php?act=home"><input type="submit" value="Tiếp tục mua hàng" class="custom-button">  </a>
    </div>
    </form>
   
    <script>
     
	Swal.fire({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success"
});

       
</script>