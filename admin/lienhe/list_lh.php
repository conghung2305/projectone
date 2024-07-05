<style> 
        button {
            border:none;
            padding: 10px;
           margin-left:20px;
           background: var(--blue);
           color: var(--light);
           border-radius: 20px;
        }
</style>
 </style><!-- CONTENT -->
<section id="content">
		<!-- NAVBAR -->
		<nav>
			
			<form action="#">
				<!-- <div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div> -->
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
		
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Quản lý liên hệ </h1>
					
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Tải xuống PDF</span>
				</a>
			</div>

        
   
					
        <form action="index.php?act=list_sp" method="post">	
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Danh sách liên hệ </h3>
						<!-- <i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i> -->
					</div>
					<div class="row">
                    
                   
                    
                    <table  >
                <tr>
                    
                  
                    <th>Tên Khách hàng </th>
                    <th>Số điện thoại</th>
                    <th>Ngày gửi </th>
                    <th>Trang thái</th>
                    <th>Chức năng</th>
                </tr>
                <?php
                foreach ($listlienhe as $lienhe) {
                    extract($lienhe);
						if($lienhe['trang_thai']==0){
							
							$trangthai='Đang chờ phản hồi';
						}else if($lienhe['trang_thai']== 1){
							$trangthai= 'đã phản hồi';
						}
                    // echo'<pre>';
                    // print_r($lienhe);
                 
                    $Xemlh = "index.php?act=xem_chitiet_lh&id=" . $id;
                    
                  
                    echo '<tr>
                          
                           
                            <td>' . $ten_lienhe . '</td>
                            <td>' . $sdt . '</td>
                            <td>' . $ngay_gui . '</td>
                            <td>' . $trangthai . '</td>
                          
                          
                            <td><a href="' . $Xemlh . '"><input type="button" value="Hỗ trợ khách hàng "></a>
                          
                 

                        </tr>';
                }
                ?>

            </table>
          
        </div>
    </form>
                        </div>
                    </div>
</main>
                <!-- MAIN -->
</section>
            <!-- CONTENT -->