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
<!-- CONTENT -->
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
					<h1>Quản lý danh mục </h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Quản lý danh mục </a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">list danh mục</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Tải xuống PDF</span>
				</a>
			</div>

                <div> 
                    <a href="index.php?act=add_dm"><button type="button">Thêm mới</button> </a>
                </div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Danh mục </h3>
						
					</div>
					<table>
						<thead>
							<tr>
							
								<!-- <th>Số thứ tự </th> -->
								<th>Mã danh mục</th>
								<th>Tên danh mục </th>
								<th>Hình ảnh danh mục </th>
								<th>Chức năng </th>
							</tr>
						</thead>
						<tbody>
							<!-- <tr>
								<td>
                                <input type="checkbox" name="" id="">
								</td>
								<td>1</td>
								<td>Điện Thoại iphone 12pro</td>
								<td>
								<img src="img/anhdt8.jpg" alt="">
                                </td>
                                <td >
                                    <a href="' . $suadm . '">  <input type="button"  value="sua"></a>
                                    <a href="' . $xoadm . '">  <input type="button" value="xoa"></a>
                                  </td>
							</tr>

                            <tr>
								<td>
                                <input type="checkbox" name="" id="">
								</td>
								<td>2</td>
								<td>Điện Thoại samsung</td>
								<td>
                                    <img src="img/anhdt4.jpg" alt="">
                                </td>
                                <td >
                                    <a href="' . $suadm . '">  <input type="button"  value="sua"></a>
                                    <a href="' . $xoadm . '">  <input type="button" value="xoa"></a>
                                  </td>
							</tr>

                            <tr>
								<td>
                                <input type="checkbox" name="" id="">
								</td>
								<td>3</td>
								<td>Điện Thoại iphone 12pro</td>
								<td>
                                    <img src="img/anhdt8.jpg" alt="">
                                </td>
                                <td >
                                    <a href="' . $suadm . '">  <input type="button"  value="sua"></a>
                                    <a href="' . $xoadm . '">  <input type="button" value="xoa"></a>
                                  </td>
							</tr> -->
							<?php
							foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                $suadm="index.php?act=sua_dm&id=".$id;
                                $xoadm="index.php?act=xoa_dm&id=".$id;
                                $xemdm="index.php?act=xem_dm&iddm=".$id;
								$imgpath='upload/'.$anh;
                                if(is_file($imgpath)){
                                    $img="<img src='".$imgpath."' height='80'>";
                                }else{
                                    $img="no photo";
                                }
								echo '	<tr>
								
								<td>'.$id.'</td>
								<td>'.$ten_danhmuc.'</td>
								<td>'.$img.'</td>
							
                                <td >
                                    <a href="' . $suadm . '">  <input type="button"  value="Sửa"></a>
									<a href="' . $xoadm . '">  <input type="button" value="Xóa" onclick="confirm(`ban co muon xoa`)"></a>
									<a href="' . $xemdm . '">  <input type="button"  value="Xem"></a>
                                  </td>
							</tr>';
						 
							
							}
							?>
						</tbody>
					</table>
					<div class="row_btn02">
               
            </div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->