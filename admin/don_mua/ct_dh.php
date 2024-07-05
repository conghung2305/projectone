<style> 
        button {
            border:none;
            padding: 10px;
           margin-left:20px;
           background: var(--blue);
           color: var(--light);
           border-radius: 20px;
        }
		.thong_tin{
			display:flex;
			flex-direction:column ;
		}
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
    /* background-color: #007bff; Màu nền */
    color: #fff; /* Màu chữ */
    padding: 12px 24px; /* Kích thước nút */
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
    }

    .list_ct {
        margin-top: 0px;
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
        /* background-color: #3300FF; */
        color: black;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    h2 {
        /* text-align: center; */
        color: #333;
		margin-top:50px ;
    }
</style>
 </style><!-- CONTENT -->
<section id="content">
		<!-- NAVBAR -->
		<nav>
			
			<form action="#">
				<div class="form-input">
					<!-- <input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button> -->
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<!-- <a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a> -->
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Quản lý đơn hàng   </h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Quản lý đơn hàng  </a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Chi tiết đơn mua </a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Tải xuống PDF</span>
				</a>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Thông tin đơn hàng</h3>
						
					</div>
					<div class="row">
			<div class="bill">
            
			<table>
				<?php
					foreach( $list_ct_dh as $bill_dh){
						$trangThai = ($bill_dh['trangthai'] == 0) ? 'Đang chờ xử lý' : ''; 
						if($bill_dh['bill_pttt']==1){
							$pttt= 'Thanh toán trực tiếp';
						}
						extract($bill_dh);
						// echo'<pre>';
						// print_r($bill_dh);
						echo'
						<tr>
					 <th>Mã đơn hàng</th>
					 <th>
						'.$id.'
					 </th>
				 </tr>    
				 <tr>
					 <th>Tên khách hàng </th>
					 <th>
						'.$ten_nguoinhan.'
					 </th>
				 </tr>  
				 <tr>
					 <th>Ngày đặt hàng</th>
					 <th>
					 '.$ngay_dh.'
					 </th>
				 </tr> 
				 <tr>
					 <th>Tổng đơn hàng </th>
					 <th>
					 '.number_format($tong_donhang).' VND
					 </th>
				 </tr>       
				 <tr>
					 <th>Phương thức thanh toán</th>
					 <th>'.$pttt.'</th>
				 </tr>  
				
				 <tr>
					 <th>Địa chỉ</th>
					 <th>
					 '.$diachi_nguoinhan.'
					 </th>
				 </tr>  
				
				 <tr>
					 <th>Số điện thoại</th>
					 <th>'.$sdt_nguoinhan.'</th>
				 </tr>  
				 <tr>
					 <th>Tình trạng đơn hàng</th>
					 <th>'.$trangThai.'</th>
				 </tr>  

						';
					}
				?>
				
			 </table>

		  </div>
					<h2 style="">
						Thông tin sản phẩm
					</h2>
    				<table class="ds_table" border="1" style="text-align:center">
						<tr>
							<th>STT</th>
							<th>Tên sản phẩm</th>
							<th>Hình ảnh sản phẩm</th>					
							<th>Số lượng sản phẩm</th>
							<th>giá sản phẩm </th>
							<th> Thành tiền</th>
						
							
						</tr>
				
						<?php
							$stt=1;
							foreach ($list_ct_sp as $bill_sp) {
								extract($bill_sp);
								// echo '<pre>';
								// print_r($bill_sp);
								$hinhpath = "upload/" . $anh_sp;
								if (is_file($hinhpath)) {
									$hinh_sp = "<img src='" . $hinhpath . "' height='80'>";
								} else {
									$hinh_sp = "no photo"; 
								}
							

								echo '
										<tr>
											<td>' . $stt . '</td>
											<td>' . $bill_sp['ten_sp'] . '</td>
											<td>' . $hinh_sp. '</td>
											<td>x' . $bill_sp['soluong'],  '</td>
											<td>' .number_format( $bill_sp['gia']) . 'VND</td>
											<td>' . number_format($bill_sp['thanhtien']) . 'VND</td>
										
										
										</tr>
									';
									$stt++;

							}
							echo'	
									<td colspan=5 > Tổng tiền sản phẩm</td>	
									<td>'.number_format($tong_donhang).'VND</td>
							';
							
                    	?>

				     
					 </table>
					
           	</div>
		<a href="index.php?act=list_dh"> <button type="button" class="next">Danh sách</button></a>
                        </div>
                    </div>
                </main>
                <!-- MAIN -->
</section>
            <!-- CONTENT -->