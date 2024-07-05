<style> 
        button {
            border:none;
            padding: 10px;
           margin-left:20px;
           background: var(--blue);
           color: var(--light);
           border-radius: 20px;
        }
        th{
            text-align:center;
        }
</style>
 </style><!-- CONTENT -->
<section id="content">
		<!-- NAVBAR --> 
		
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Quản lý bình luận </h1>
					
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

                <!-- <div> 
                    <a href="index.php?act=add_sp"><button type="button">Thêm mới sản phẩm </button> </a>
                </div> -->

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Danh sách bình luận</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<div class="row">
            <table class="ds_table" border="1" style="text-align:center;">
                <tr >
                   
                    <th>ID</th> 
                    <th>Nội dung</th>
                    <th>Mã khách hàng</th>
                    <th>Mã sản phẩm</th>
                    <th>Ngày bình luận</th>
                    <th>Chức năng</th>
                </tr>
            
                         

                          
                            <?php
                            foreach($listbinhluan as $binhluan){ 
                                extract($binhluan);
                               
                            
                                $xoatk="index.php?act=xoa_bl&id=".$id;
                       
                                echo ' <tr> 
                               
                                <td>'.$id.'</td>
                               
                                <td>'.$noidung.'</td>
                                <td>'.$id_nguoidung.'</td>
                                <td>'.$id_sanpham.'</td>
                                <td>'.$ngay_bl.'</td>
                               
                               <td>

<a href="'.$xoatk.'"> <input type="button"  onclick="confirm(`Bạn có muốn xóa`)" value="Xóa"></a>
                          
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