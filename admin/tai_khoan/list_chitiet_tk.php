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
                            foreach($listtaikhoan as $tk){
                           
                                extract($tk);
                                // echo'<pre>';
                                // print_r($tk);
                                if($role==1){
                                    $vaitro="Admin";
                                
                                }else{
                                    $vaitro="Khách hàng";
                                }
                                $hinhpath = "upload/" . $anh;
                                    if (is_file($hinhpath)) {
                                        $hinh_sp = "<img src='" . $hinhpath . "' >";
                                    } else {
                                        $hinh_sp = "no photo"; 
                                    }
                                
                               
                                 $xoatk="index.php?act=xoa_tk&id=".$id;
                             
                                echo ' 
                                
                                    <tr>
                                        <td>Mã tài khoản</td>
                                        <td>'.$id.'</td> 
                                    </tr>
                                      <tr>
                                        <td>Tên tài khoản</td>
                                        <td>'.$ten_nguoidung.'</td>
                                    </tr>

                                    <tr>
                                        <td>Hình ảnh tài khoản</td>
                                        <td>'.$hinh_sp.'</td> 
                                     </tr>

                                     <tr>
                                     <td>Mật khẩu</td>
                                     <td><input type="password" value="'.$mat_khau.'" disabled></td>
                                     </tr>

                                   <tr>
                                        <td>Email</td>
                                        <td>'.$email.'</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Số điện thoại</td>
                                        <td>'.$sdt.'</td>
                                    </tr>
                                        
                                    <tr>
                                        <td>Dịa chỉ</td>
                                        <td>'.$dia_chi.'</td>
                                    </tr>

                                    <tr>
                                        <td>Vai trò</td>
                                        <td>'.$vaitro.'</td>
                                       
                                    </tr>
                    
                               
                            </tr>';
                            }
                            ?>
                            
                          
            </table> 
				
		
            <div class="row_btn02">
                 
                  <a href="index.php?act=list_tk"> <button type="button" class="next">Danh sách</button></a>
            </div>
        </div>
                        </div> 
                    </div>
                </main>
                <!-- MAIN -->
</section>
            <!-- CONTENT -->