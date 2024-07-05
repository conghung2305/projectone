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
					<h1>Quản lý tài khoản  </h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Quản lý tài khoản </a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">list tài khoản </a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Tải xuống PDF</span>
				</a>
			</div>

                <!-- <div> 
                    <a href="index.php?act=add_sp"><button type="button">Thêm mới sản phẩm </button> </a>
                </div> -->

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Danh sách tài khoản </h3>
						<!-- <i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i> -->
					</div>
					<div class="row">
            <table class="ds_table">
                <tr>
                   
                    <th>Mã tài khoản</th>
                    <th>Tên tài khoản</th>
                    <th>Email</th>
                    <th>Chức năng</th>
                </tr>
            
                          
                          
                            <?php
                            foreach($listtaikhoan as $taikhoan){
                                extract($taikhoan);
                               
                                $suatk="index.php?act=sua_tk&id=".$id;
                                $xoatk="index.php?act=xoa_tk&id=".$id;
                                $xemtk="index.php?act=xem_tk&id=".$id;
                                echo ' <tr> 
                               
                                <td>'.$id.'</td>
                                <td>'.$ten_nguoidung.'</td>
                                <td>'.$email.'</td>
                               
                               
                               <td>
                              
                              <a href="'.$xemtk.'"><input type="button" value="Xem"></a>
                                </td>
                            </tr>'
                            ?>
                            <?php
                            }
                            ?>
                          
            </table>
            <div class="row_btn02">
            </div>
        </div>
                        </div>
                    </div>
                </main>
                <!-- MAIN -->
</section>
            <!-- CONTENT -->