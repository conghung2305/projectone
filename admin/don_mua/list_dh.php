<style> 
        button {
            border:none;
            padding: 10px;
           margin-left:20px;
           background: var(--blue);
           color: var(--light);
           border-radius: 20px;
        }
		
	
	
		.custom-table th {
    
    color: balck;
    font-weight: bold;
    padding: 10px;
    text-align: left;
        }
        .custom-table th{
            border:1px solid #fff;
        }   


.custom-table td {
    padding: 10px;
    /* border-bottom: 1px solid #ccc; */
  
    /* border: 1px solid #ccc; */
}

/* Thiết lập màu nền khi hover vào các ô dữ liệu */
.custom-table td:hover {
    background-color: #f2f2f2;
}
/* Thiết lập màu nền và kiểu chữ cho nút */
.small-button {
    background-color: #007bff; /* Màu nền */
    color: #fff; /* Màu chữ */
    padding: 8px 12px; /* Kích thước nút */
    border: none;
    border-radius: 4px; /* Bo tròn viền nút */
    font-size: 14px; /* Kích thước chữ */
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s; /* Hiệu ứng hover */
}

/* Hiệu ứng hover */
.small-button:hover {
    background-color: #0056b3; /* Màu nền khi hover */
}
.shear{
	width: 250px;
	height: 35px;
	border-radius: 8px;
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
						<input class="shear" name="key" >
						<button name="check" type="submit" > tìm kiếm</button>
					</form>
					<div class="row">
            <table class="custom-table">
				
                <tr>
					<th>Mã đơn hàng </th>
					<th>Người đặt hàng</th>
					<th>Ngày đặt hàng  </th>
					<th>Tổng đơn hàng</th>
					<th>Trạng thái</th>
					<th>Chức năng</th>
                </tr>
				<?php
				
				foreach ($listdonhang as $donhang){
					
					$khach = $donhang['ten_nguoinhan'] ;
					

				extract($donhang);
				// echo'<pre>';
				// print_r($donhang);
					
					$xemdh = "index.php?act=xem_dh&id=" . $id;
					echo'
					<tr>
                    <td>'.$id.'</td>
					<td>'.$khach.' </td>
					<td>'.$ngay_dh.' </td>
					<td>'.number_format($tong_donhang).'VND</td>
					<td>
					<select name="trangthai" data-id='.$id.' >';
					?>
						<option value="0"<?= $trangthai==0?'selected':''?> >đang chờ xác nhận </option> 
						<option value="1"<?= $trangthai==1?'selected':''?>  >đang vận chuyển</option> 
						<option value="2"<?= $trangthai==2?'selected':''?> >hoàn thành</option> 
						<option value="3"<?= $trangthai==3?'selected':''?> >hủy đơn hàng</option> 
					<?php
					echo ' </select> 
					</td>
					
					
					<td>
					<a href="'.$xemdh.'"><input type="button" class="small-button" value="Xem"></a>
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
<script>
    var selectBtns =document.querySelectorAll('select[name="trangthai"]');
    selectBtns.forEach(btn =>{
        btn.addEventListener('change', function(){
            const id = this.getAttribute('data-id');
            location.href = `/admin/admin?act=update_status&id=${id}&trangthai=${this.value}`;
        })
    })
</script>