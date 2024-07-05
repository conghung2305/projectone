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
		.input{
			width: 250px;
			height: 35px;
			border-radius:7px ;
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
							<a class="active" href="#">List đơn hàng </a>
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
						<h3>Danh sách đơn hàng</h3>
						
					</div>
					<form class="head" method="post" action="index.php?act=tk_dh">
						<input class="input" name="key" >
						<button name="check" type="submit" > tìm kiếm</button>
					</form>
					<div class="row">
            <table class="ds_table" border="1" style="text-align:center">
				
                <tr>
					<th>ID</th>
					<th>TÊN KHÁCH HÀNG </th>
					<th>NGÀY ĐẶT HÀNG </th>
					<th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
					<th>CHỨC NĂNG</th>
					
                </tr>
				<?php
				foreach ( $list_dh as $child_dh){
					
				extract($child_dh);
				$xemdh = "index.php?act=xem_dh&id=" . $id;
                    //    echo'<pre>';
                    //    print_r($child_dh); 
                     echo'
                        <tr>
                            <td>'.$id.'</td>
                            <td>'.$ten_nguoinhan.'</td>
                            <td>'.$ngay_dh.'</td>
                            <td>'.$tong_donhang.'</td>
                            <td>
                            <a href="'.$xemdh.'"><input type="button" value="Xem"></a>
                            </td>
					
                        </tr>
                     ';  
                
					
				
			
				}
				
				?>
				
            </table>
            
        </div>
                        </div>
                    </div>
                </main>
                <!-- MAIN -->
</section>
            <!-- CONTENT -->