<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .bill {
        width: 1000px;
        min-height: 400px;
        border: 1px solid #EEEEEE;
        border-radius: 4px;
        margin: 20px auto;
        background-color: #fff;
        box-shadow:1px 3px 4px 0px #FFFFFF;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .thong_tin {
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    img {
        max-width: 100px;
        height: auto;
    }

    .table-content {
        margin-top: 20px;
    }

    /* input[type="button"] {
        background-color: #4caf50;
        color: white;
        border: none;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        cursor: pointer;
    } */

    input[type="button"]:hover {
        background-color: #45a049;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }

    input[type="button"][value="Đồng ý dặt hàng"] {
        background-color: #3498db;
        color: #fff;
        cursor: pointer;
        padding: 10px 20px;
        margin-top: 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
    }

    input[type="button"][value="Đồng ý dặt hàng"]:hover {
        background-color: #2980b9;
    }
    .btn-primary{
        background: orange;
        color: white;
    }
    .prew{
       padding: 1px;
        background-color: orange;
        border: none;
        color: white;
    }
    .prew :hover{
        background-color: #0d6efd;
        color: white;
    }
</style>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/grid.css">
<!-- <link rel="stylesheet" href="css/css.css">  -->
<!-- <link rel="stylesheet" href="css/form.css">  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="header">
    <div class="child_header">
        <div class="box1_image">

            <div class="logo-area">
            <a href="index.php?act=home"><img src="img/logo/logo.png" alt="logo"></a>
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
                        <li><a href="#">Cửa hàng  <i class="ion-ios7-arrow-down"></i></a> </li>
                     
                        <li><a href="about.html">Giới thiệu</a></li>
                        <li><a href="index.php?act=lienhe">liên hệ </a></li>

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

                </li>

                <li class="mini-cart">
                    <?php
                    if (isset($_SESSION['user'])) {

                        $id = $_SESSION['user']['id'];

                        $hinhanh_user = pdo_query_one("select *from user where id= $id");
                        ?>
                        <img src='/admin/admin/upload/<?php echo $_SESSION['user']['anh'] ?>' alt="" width="30px"
                            height="30px">
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
<?php
if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
    $user = $_SESSION['user']['ten_nguoidung'];
    $address = $_SESSION['user']['dia_chi'];
    $email = $_SESSION['user']['email'];
    $phone = $_SESSION['user']['sdt'];
    $thongbao = '';
    $select = '';
} else {
    $user = '';
    $address = '';
    $email = '';
    $phone = '';
    $thongbao = '<p>ban chưa đăng nhâp.Có muốn tiếp tục mua hàng không';
    $select = '<p>
                                        <a href="index.php?act=home.php"><input type="" value="Quay lại trang chủ"></a>
                                        <input type="submit" name="dongy" value="đồng ý đặt hàng"> 
                                     </p>';
    // kiểm tra các trường xem có chống không để nhập vào
    if (isset($_POST['dongy'])) {
        if (!empty($user) || !empty($address) || !empty($email) || !empty($phone)) {
            echo 'vui long khong de trong';
        } else {
            echo '';
        }
    }
}
?>


<form class="bill" action="index.php?act=bill_comfirm" method="post">
    <div class="thong_tin">
        <h2 style="text-align: center;">Thông tin nguời đặt </h2>
        <table>
            <tr>
                <td>Người đặt hàng</td>
                <td><input type="text" required name="user" value="<?php
                if (isset($user)) {
                    echo $user;
                }
                ?>"></td>
            </tr>

            <tr>
                <td>Địa chỉ </td>
                <td><input type="text" required name="address" value="<?= $address ?>"></td>
            </tr>

            <tr>
                <td>Email </td>
                <td><input type="text" required name="email" value="<?= $email ?>"></td>
            </tr>

            <tr>
                <td>Điện thoại </td>
                <td><input type="text" required name="phone" value="<?= $phone ?>"></td>
            </tr>

        </table>

        <!-- đăng nhập vào k muốn hiện biến này  -->
        <?php

        echo $thongbao;
        echo $select;
        ?>

    </div>

    <div class="table-content">
        <table class="table">

            <tr>

                <!-- <th >Chức năng </th> -->
                <th>Ảnh sản phẩm</th>
                <th>Tên sp</th>
                <th> Giá</th>
                <th>Số lượng </th>
                <!-- <th >lươt mua  </th> -->
                <th><b>Tổng tiền</b></th>

            </tr>
            <h2 style="text-align: center;"> Thông tin đơn hàng </h2>
            <?php

            $tong = 0;
            $stt = 0;

            function updateLuotmua($id)
            {
                $sql = "UPDATE sanpham SET luot_mua = luot_mua + 1 WHERE id = $id";
                pdo_execute($sql);
                // print_r($sql);
            }

            foreach ($_SESSION['mycart'] as $cart) {
                // print_r
                $id = $cart[0];
                updateLuotmua($id);


                $hinh = $anh_sp . $cart[1];
                $subtotal = intval($cart[3]) * intval($cart[5]);
                $tong += $subtotal;

                echo '
                                                        <tr>
                                                            <td><img src="' . $hinh . '"></td>
                                                            <td>' . $cart[2] . '</td>
                                                            <td>' . number_format($cart[3]) . 'VND</td>
                                                            <td>' . $cart[5] . '</td>
                                                         
                                                            <td><span class="amount">' . number_format($subtotal) . 'VND</span></td>
                                                        </tr>';
                $stt++;
            }

            echo '
                                                    <tr>
                                                        <td> <b>Tổng tiền đơn hàng</b> </td>
                                                        <td>' . number_format($tong ). 'VND </td>
                                                    </tr>';
            ?>
        </table>
    </div>

    <div class="pay_method">
        <h2 style="text-align: center; margin:20px;"> Phương thức thanh toán </h2>
        <div style="display:flex; justify-content:space-around;">
            <input type="radio" value="1" name="pttt" checked> Trả tiền khi nhận hàng
        </div>
    </div>
    <div>
        <a class="prew" href="index.php?act=add_cart">Quay lại trang chủ</a>
        <input class="btn-primary" type="submit" name="dongy" value="Đồng ý đặt hàng">
    </div>

</form>