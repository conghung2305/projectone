<style> 
       

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            /* background-color: #3300FF; */
            color: black;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-top:50px ;
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
                                        <li><a href="#">Điện thoại <i class="ion-ios7-arrow-down"></i></a> </li>
                                       
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
<div class="bill">
<h2> Nội dung admin phản hồi</h2>                      
			<table>
               
				<?php
				
                        // echo'<pre>';
                        // print_r($ct_lh);
					
						// if($bill_dh['bill_pttt']==1){
						// 	$pttt= 'Thanh toán trực tiếp';
						// }
						extract($list_lh);
					
						echo'
						<tr>
                            <th>Tên khách hàng </th>
                            <th>
                                '.$ten_lienhe.'
                            </th>
				        </tr>  
                        <tr>
                            <th>Số điện thoại </th>
                            <th>
                                '.$sdt.'
                            </th>
				        </tr>    
                        <tr>
                            <th>Email khách hàng</th>
                            <th>
                               '.$email.'
                            </th>
				        </tr>    
                        <tr>
                            <th>Ngày phản hồi </th>
                            <th>
                              '.$ngay_gui.'
                            </th>
				        </tr>
                        <tr>
                            <th>Nôi dung khách hàng </th>
                            <th>
                            '.$noidung_user.'
                            </th>
                        </tr>

                        <tr>
                            <th>Nôi dung đã phản hồi </th>
                            <th>
                            '.$noidung_admin.'
                            </th>
                        </tr>
                       
						';
					
				?>
				
			 </table>

		  </div>