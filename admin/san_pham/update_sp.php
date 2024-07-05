<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "upload/" . $anhsp;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "no photo";
}
?> 
<style>
    form {
        width: 80%;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }

    label {
        margin-bottom: 5px;
    }

    input {
        width: 100%;
        border-radius: 10px;
        padding: 8px;
        margin-bottom: 10px;
    }

    button {
        border: none;
        padding: 10px;
        margin-left: 20px;
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
            <div class="form-input">
                <!-- <input type="search" placeholder="Search...">
                <button type="submit" class="search-btn"><i class='bx bx-search'></i></button> -->
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
                <h1>Quản lý sản phẩm</h1> 
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Quản lý sản phẩm</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">cập nhập sản phẩm </a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download'></i>
                <span class="text">Tải xuống PDF</span>
            </a>
        </div>
 
        <div class="table-data">
            <div class="order">
                <form action="index.php?act=update_sp" class="row" method="post" enctype="multipart/form-data">
                    <div class="row_header">
                        <h1>Cập nhập sản phẩm</h1>
                    </div>
                    <div class="row_center">
                        <input type="hidden" name="id" value="<?=$id?>">
						<label for=""> Danh mục </label>
                        <select name="iddm">
                            <?php 
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                if($iddm==$id) $s="selected"; else $s="";
                                echo "<option value='".$id."' '.$s.'>$ten_danhmuc</option>";
                            } ?>
                        </select>
                        <br>
                        <label for=""> Tên tên điển thoại </label>
                        <input type="text" name="tensp" value="<?=$tensp?>">
						<label for=""> Hãng điện thoại </label>
                        <input type="text" name="nhan_hieu" value="<?=$nhan_hieu ?>">

                        <label for=""> Hình ảnh </label>
                        <input type="file" name="anhsp" value="">
                        <?= $hinh ?>
                        <br>

                        <label for="">Giá sản phẩm </label>
                        <input type="text" name="gia" value="<?= $gia ?>">

                        <label for="">Màu sắc</label>
                        <input type="text" name="mausac" value="<?=$mau_sac?>">


                        <label for="">Dung lượng pin</label>
                        <input type="text" name="pin" value="<?=$pin?>">

                        <label for="">Bộ nhớ</label>
                        <input type="text" name="dung_luong" value="<?=$bo_nho?>">

                        <label for="">Camera</label>
                        <input type="text" name="camera" value="<?=$camera?>">

                       

                        <label for="">Ngày xuất xưởng </label>
                        <input type="date" name="ngay_xuat_xuong" value="<?= $ngay_xuat_xuong ?>">

                        <label for=""> Mô tả </label>
                        <br>
                        <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>

                        <div class="row_btn">
                            <button type="submit" name="capnhat" >Cập nhập</button>
                            <button style=" background: var(--orange);" class="reset" type="reset">Nhập lại</button>
                            <a href="index.php?act=list_sp"> <button type="button" class="next">Danh sách</button></a>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->