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
                                          
                                            <!--Dropdown Menu End-->
                                        </li>
                                        <li><a href="#">Điện thoại  <i class="ion-ios7-arrow-down"></i></a> </li>
                                       
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

    <h2 style="text-align: center">Liên hệ của bạn </h2>
    <table>
        <tr>
          
            <th>Tên </th>
            <th>Ngày gửi</th>
            <th>Trạng thái</th>
            <th>Chi tiết</th>
        </tr>
        <?php
             foreach( $list_lienhe as $lienhe ) {
                extract($lienhe);
                // echo'<pre>';
                // print_r($lienhe);
                if($lienhe['trang_thai']==0){
							
                    $trang_thai='Đang chờ phản hồi';
                }else if($lienhe['trang_thai']== 1){
                    $trang_thai= 'đã phản hồi';
                }
                $Xem = "index.php?act=ct_lienhe&id=" . $id;
                echo'
                <tr>
            
                    <td>'.$ten_lienhe.'</td>
                    <td>'.$ngay_gui.'</td>
                    <td>'.$trang_thai.'</td>
                    <td>
                    <a href="' . $Xem . '"><input type="button" value="Xem "></a>
                    </td>
                </tr>
                ';
             }
        ?>
      

    </table>
</form>
