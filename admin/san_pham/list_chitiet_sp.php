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
    .bl{
        margin-top: 20px;
        width: 100%;
        min-height: 70px;
        /* border: 1px solid gray; */
        border-radius: 3px;
        box-shadow: 1px 1px 1px 1px;
    }
    .bl a{
     
        border-radius:3px ;
        padding: 2px 20px;
        border: 1px solid black;

      

    }
    .child_bl{
        display: flex;
        padding-top: 10px;
    }
    .child_bl img{
        width: 40px;
        height: 40px;
        border-radius:50px ;
        margin-left: 30px;
        margin-right: 30px;
        /* margin-bottom: 15px; */
    }
    .child_bl h3{
        align-items: center;
    }
    p{
        margin-bottom: 10px;
        margin-left:50px ;
    }
</style>

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
					<h1>Quản lý sản phẩm   </h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Quản lý sản phẩm  </a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Chi tiết sản phẩm </a>
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
						<h3>Thông tin sản phẩm</h3>
						
					</div>
				
                    <div class="bill">
                        <table>
                            <?php
                                        $listsp_bl=loadsp_bl($_GET['id']); 
                                            // echo '<pre>';
                                            // print_r($listsp_bl);
                
                                        if($listsp_bl){
                                        $hinhpath = "upload/" . $listsp_bl['anhsp']; 
                                        if (is_file($hinhpath)) {
                                            $hinh = "<img src='" . $hinhpath . "' height='80'>";
                                        } else {
                                            $hinh = "no photo"; 
                                        }
                                        echo '
                                                    <tr>
                                                    <th>Nhãn hiệu</th>
                                                    <th>'.$listsp_bl['nhan_hieu'].'</th>
                                                    </tr>
                                                    <tr>
                                                    <th>Tên sản phẩm</th>
                                                    <th>'.$listsp_bl['tensp'].'</th>
                                                </tr>
                                                <tr>
                                                    <th>Hình ảnh sản phẩm</th>
                                                    <th>'.$hinh.'</th>
                                                    </tr>
                                                    <tr>
                                                    <th>Giá sản phẩm</th> 
                                                    <th>'.$listsp_bl['gia'].'</th>
                                                
                                                    </tr>
                                                    <tr>
                                                    <th>Mô tả sản phẩm</th>
                                                    <th>'.$listsp_bl['mota'].'</th>
                                                    </tr>
                                                    <tr>
                                                    <th> Màu sắc</th>
                                                    <th>'.$listsp_bl['mau_sac'].'</th>
                                                    </tr>
                                                    <tr>
                                                    <th>Bộ nhớ </th>
                                                <th>'.$listsp_bl['bo_nho'].'</th>
                                                    </tr>
                                                    <tr>
                                                    <th> Pin  </th>
                                                    <th>'.$listsp_bl['pin'].'</th>
                                                    </tr>
                                                    <tr>
                                                    <th> Camera </th>
                                                    <th>'.$listsp_bl['camera'].'</th>
                                                    </tr>
                                                    <tr>
                                                    <th>Ngày xuất xưởng </th>
                                                    <th>'.$listsp_bl['ngay_xuat_xuong'].'</th>
                                                    </tr>
                
                                            ';
                                        }
                                    ?>
                        </table>
                     </div>
					<h2 style="">
						Bình luận sản phẩm
					</h2>
                    <?php

                                    $list_bl=load_bl($_GET['id']);
                                    if($list_bl){
                                    foreach($list_bl as $sanpham){
                                        extract($sanpham);
                                        // echo '<pre>';
                                        // print_r($sanpham);
                                        $hinhpath = "upload/" . $sanpham['anh']; 
                                        $xoabl="index.php?act=xoa_bl&id=".$id;

                                  
                                    echo '
                                        <div class="bl">
                                            <div class="child_bl">
                                                <img src="'.$hinhpath.'">
                                                <h3>'.$ten_nguoidung.'</h3>
                                            </div>
                                            
                                            <p>'.$ngay_bl.'</p>
                                            <p>'.$noidung.'</p>  
                                            <a href="' . $xoabl . '">Xóa</a>
                                        </div>';
                                }
                            }
                             ?>
						
					
           	</div>
		<a href="index.php?act=list_dh"> <button type="button" class="next">Danh sách</button></a>
                        </div>
                    
                </main>