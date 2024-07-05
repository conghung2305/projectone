<?php
include "global.php";
?>
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
                                            <ul class="dropdown">
                                               
                                               
                                            </ul>
                                            <!--Dropdown Menu End-->
                                        </li>
                                        <li><a href="#">Cửa hàng  <i class="ion-ios7-arrow-down"></i></a> </li>
                                        
                                        <li><a href="about.html">Giới thiệu</a></li>
                                        <li><a href="index.php?act=lienhe">Liên hệ </a></li>
                                 
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

			<div class="new_tin">
                        <h3>Trang chủ / Chi tiết sản phẩm / Giỏ hàng </h3>
                       
               </div>        
<div class="wrapper wrapper-box">
	<!--Header Area Start-->
	
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
	<!--Breadcrumb Area Start-->
	<!-- <div class="breadcrumb-area pb-80">
		<div class="container">
			<div class="row">
				<div class="col-12">
					
				</div>
			</div>
		</div>
	</div> -->
	<!--Breadcrumb Area End-->
	<!--Shopping Cart Area Strat-->
	<div class="Shopping-cart-area pb-80">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<form action="#">
						<div class="table-content table-responsive">
							<table class="table">
								<thead>
									<tr>
										<!-- <th> Số thứ tự </th> -->
										<th class="indecor-product-remove">Chức năng </th>
										
										<th class="indecor-product-thumbnail">Ảnh sản phẩm</th>
										<th class="cart-product-name">Tên sp</th>
										<th class="indecor-product-price"> Giá</th>
										<!-- <th class="indecor-product-price"> luot mua </th> -->
										<th class="indecor-product-quantity">Số lượng </th>
										<th class="indecor-product-subtotal">Tổng tiền</th>

									</tr>
								</thead>
								<tbody>
									<?php
									$tong = 0;
									$stt = 0;

									foreach ($_SESSION['mycart'] as $cart) {
										// echo'<pre>';
										// print_r($cart);
										$anh_cart = $anh_sp . $cart[1];
										$tt = intval($cart[3]) * intval($cart[5]);
										$tong += $tt;
										$xoa_sp = '<a  href="index.php?act=xoa_cart&id_cart=' . $stt . '"><input style="background: red; color: white" type="button" value="Xóa"></a>';
										echo '
															<tr>
																
																<td class="">' . $xoa_sp . '</td>
																
																<td  class="indecor-product-thumbnail"><img style="width:100px;" src="' . $anh_cart . '"></td>
																<td class="indecor-product-name">' . $cart[2] . '</td>
																<td class="indecor-product-price">' . number_format($cart[3]) . 'VND</td> 
															
																<td class="indecor-product-quantity"> 
																	<i class="fa-solid fa-minus tru" style="padding-right:8px"></i> 
																		<input style=" width: 35px;" class="soluong" value="'.$cart[5].'" >  
																	<i class="fa-solid fa-plus cong" style="style="padding-left:8px"></i>
																</td>
																<td class="product-subtotal"><span class="amount">' . number_format($tt) . 'VND</span></td>
															</tr>';
										$stt++;
									}

									echo '
														<tr>
															<td> Tổng tiền đơn hàng </td>
															<td id="thanhtien">' . number_format($tong) . 'VND</td>
														</tr>';

									?>


								</tbody>
							</table>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="coupon-all">
									<div class="col-md-5 ml-auto">



									
									<button> <a style="padding:10px;background: orange; color: white;" href="index.php?act=home">Quay lại trang chủ </a></button>

									<button> <a style="padding:10px;background: orange; color: white;" href="index.php?act=bill_cart">Tiếp tục đặt hàng </a></button>

									</div>
								</div>
							</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	<!--Shopping Cart Area End--> 

	<!--Footer Area End-->
</div>





<!--All Js Here-->

<!--Jquery 3.6.0-->
<script>
	
	 cong=document.getElementsByClassName('cong');
	 tru=document.getElementsByClassName('tru');
	 soluong=document.querySelectorAll('.soluong');
	 thanhtien=document.querySelector('#thanhtien');
	 tong=document.querySelectorAll('.amount');
	 soluong.forEach(function(el,i){
		cong[i].onclick=function(){
			el.value=Number(el.value)+1;
			updateQuantity(i,el.value,tong[i])
		}
		tru[i].onclick=function(){
			el.value=Number(el.value)-1;
			updateQuantity(i,el.value,tong[i])
		}
	 });
	 function updateQuantity(id,quantity,Tong){
		let xmlHttp=new XMLHttpRequest();
		xmlHttp.onreadystatechange=function(){
			if(this.readyState===4&& this.status===200){
				data=JSON.parse(this.responseText);
				thanhtien.innerHTML=data.thanhtien+'VND';
				Tong.innerHTML=data.tongtien+'VND';
			}
		}
		xmlHttp.open('GET',`updateQuantity.php?id=${id}&quantity=${quantity}`);
		xmlHttp.send();
	 }

</script>