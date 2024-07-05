<style>
    form {
            width: 80%;
           margin:0 auto;
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            border-radius:10px;
            padding: 8px;
            margin-bottom: 10px;
        }
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
							<a class="active" href="#">Thêm danh mục </a>
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
						<h3>Danh mục</h3>
						
					</div>
                    <form action="index.php?act=add_dm" method="post"  enctype="multipart/form-data">
                        <!-- <label for=""> ID danh mục</label>
                        <input type="text" name="maloai" placeholder="" disabled>  -->
                    
                        <label for="">Tên danh mục</label>
                        <input type="text" name="name" id="" >

						<label for="">Hình ảnh</label>
                        <input type="file" name="hinh" id="" >
                        <div>
                        <!-- //<button type="submit" name="themmoi" >Thêm danh muc</button> -->
						<button type="submit" name="themmoi" >Thêm mới</button>
                        <button type="reset"  style="background: var(--orange);" >Nhập lại</button>
                        <a href="index.php?act=list_dm"> <button type="button" >Danh sách</button> </a>
                       
						</div>
						<?php
						if(isset($thongbao)&&($thongbao!="")){
							echo "Add success"; 
						}
						?>
                    </form>
			
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->