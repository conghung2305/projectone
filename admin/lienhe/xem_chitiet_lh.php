<style> 
        button {
            border:none;
            padding: 10px;
            font-size: 14px;
           margin-left:20px;
           background: var(--blue);
           color: var(--light);
           border-radius: 10px;
        }
		.thong_tin{
			display:flex;
			flex-direction:column ;
		}
        input{
            width: 250px;
            height: 35px;
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
					<h1>Quản lý liên hệ    </h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Quản lý liên hệ   </a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Chi tiết liên hệ  </a>
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
						<h3>Thông tin khách hàng </h3>
						
					</div>
					<div class="row">
			<div class="bill">
            
			<table>
				<?php
				
                        // echo'<pre>';
                        // print_r($ct_lh);
					
						// if($bill_dh['bill_pttt']==1){
						// 	$pttt= 'Thanh toán trực tiếp';
						// }
						extract($list_lh);
                         echo'<pre>';
                        print_r($list_lh);
					
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
                            <th>Ngày gửi </th>
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
                     
                      
                       <form action="" method="post">
                            <h3>Nội dung phản hồi </h3>   
                            <input name="noidung_admin" type="text"  placeholder="admin "> 
                            <button name="check"> Gửi</button>
                       </form>
                       
                       
						';
					
				?>
				
			 </table>

		  </div>