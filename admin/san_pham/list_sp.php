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
					<h1>Quản lý sản phẩm  </h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Quản lý sản phẩm </a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">list sản phẩm</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Tải xuống PDF</span>
				</a>
			</div>

                <div> 
                    <a href="index.php?act=add_sp"><button type="button">Thêm mới sản phẩm </button> </a>
                </div>
        
   
					
        <form action="index.php?act=list_sp" method="post">	
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Danh sách sản phẩm </h3>
						
					</div>
					<div class="row">
                    
                    <select name="iddm">
                                    <option value="" selected>ALL</option> 
                        <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo "<option value='".$id."'>$ten_danhmuc</option>";
                        }

                         ?>
                        
                    </select> 
                    <input type="text" placeholder="Search..." name="kyw">
					<input type="submit" name="listok" value="Search">
                    <table>
                <tr>
                    
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Chức năng</th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=sua_sp&id=" . $id;
                    $xoasp = "index.php?act=xoa_sp&id=" . $id;
                    $xemsp = "index.php?act=xem_sp&id=".$id;
                    $hinhpath = "upload/" . $anhsp;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "no photo"; 
                    }
                    echo '<tr>
                          
                            <td>' . $id . '</td> 
                            <td>' . $tensp . '</td>
                            <td>' . $hinh. '</td>
                            <td>' .$gia. '</td>
                             <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a>
                            <a href="' . $xoasp . '"><input type="button" onclick="confirm(`ban co muon xoa`)" value="Xóa"></a>
                            <a href="'.$xemsp.'"><input type="button" value="Xem"></a></td>

                        </tr>';
                }
                ?>

            </table>
            <div class="row_btn02">
                <!-- <button class="seclect" type="button">Chọn tất cả</button>
                <button class="clean_select" type="button">Bỏ chọn tất cả</button> -->
                <!-- <button style=" background: var(--orange);
                         color: var(--light);" class="clean" type="button"> Xóa các mục đã chọn
                  </button> -->
            </div>
        </div>
    </form>
                        </div>
                    </div>
                </main>
                <!-- MAIN -->
</section>
            <!-- CONTENT -->