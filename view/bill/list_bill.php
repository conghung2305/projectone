<style>
     .list {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }

    th {
        background-color: #ff7a5f;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    a {
        text-decoration: none;
        color: #3498db;
    }

    input[type="button"] {
        padding: 8px 12px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="button"]:hover {
        background-color: #2980b9;
       
    }

    h2 {
        text-align: center;
        color: #333;
    }
</style>  
<link rel="stylesheet" href="css/style.css"> 
<link rel="stylesheet" href="css/grid.css"> 
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
                                        <li><a href="#">Cửa hàng  <i class="ion-ios7-arrow-down"></i></a> </li>
                                       
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
<form class="list" method="post" action="index.php?act=ct_bill&id_bill='.$id_bill.'">

    <h2 style="text-align: center">Đơn hàng của bạn </h2>
    <table>
        <tr>
            <th>Mã đơn hàng </th>
            <th>Thông tin người đặt </th>
            <th>Ngày đặt hàng </th>
            <th>Đơn giá</th>
            <th>Trạng thái</th>
         
            <th>Chi tiết</th>
        </tr>
        <?php   
                    foreach ($list_all_bill as $bill) {
                        extract($bill);
                        // echo '<pre>';
                        // print_r($bill);
                         if($bill['trangthai']==0){
                            $trangthai='Đang chờ xác nhận';
                        } else if ($bill['trangthai']==1){
                            $trangthai='Đang vận chuyển';
                        } else if ($bill['trangthai']==2){
                            $trangthai='Hoàn thành';
                        } else if ($bill['trangthai']==3){
                           $trangthai='Hủy đơn'; 
                        }else{
                            $trangthai='';
                        }
                        $khach = $bill['ten_nguoinhan'];

                        // if ($bill['trangthai'] != 2) {
                        //     $huy='<a href="index.php?act=huy_don&id='.$id.'"><input type="button" value="Hủy Đơn"></a>';
                        // }

                      
                        echo '
                            <tr>
                                <td>' . $bill['id'] . '</td>
                                <td>' . $khach . '</td>
                                <td>' . $bill['ngay_dh'] . '</td>
                                <td>' . number_format($bill['tong_donhang']) . 'VND</td>
                                <td>' . $trangthai . '</td>
                            
                                <td style="display:flex">
                                    <a href="index.php?act=ct_bill&id='.$id.'"><input type="button" value="xem"></a>
                                    <a href="index.php?act=huy_don&id='.$id.'">
                                    <input style="margin-left: 10px;
                                     background: red;
                                     color:white; " type="button" value="Hủy Đơn"
                                     ></a>
                                    
                                    
                            </tr>';
                        }
                    ?>

    </table>
</form>

