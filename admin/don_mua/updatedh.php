<?php
if (is_array($donhang)) {
    extract($donhang);
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
                <input type="search" placeholder="Search...">
                <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
            </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden>
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification">
            <i class='bx bxs-bell'></i>
            <span class="num">8</span>
        </a>
        <a href="#" class="profile">
            <img src="img/people.png">
        </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Quản lý đơn hàng</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Quản lý đơn hàng</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Cập nhật đơn hàng </a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download'></i>
                <span class="text">Download PDF</span>
            </a>
        </div>

        <div class="table-data">
            <div class="order">
                <form action="index.php?act=updatedh" class="row" method="post" enctype="multipart/form-data">
                    <div class="row_header">
                        <h1>Cập nhập sản phẩm</h1>
                    </div>
                    <div class="row_center">
                        <input type="hidden" name="id" value="<?=$id?>">

                        <!--        <input type="text" name="maloai" placeholder="Số tự động" disabled>-->
					
                        <label for="">Địa chỉ đơn hàng</label>
                        <input type="text" name="diachi_donhang" value="<?=$diachi_donhang?>">
						<label for="">Email đơn hàng </label>
                        <input type="text" name="email_donhang" value="<?=$email_donhang ?>">

                        <label for="">Số điện thoại người mua </label>
                        <input type="text" name="bill_sdt" value="<?=$bill_sdt?>">
                        
                        <br>

                        <label for="">Phương thức thanh toán </label>
                        <input type="text" name="bill_pttt" value="<?= $bill_pttt ?>">

                        <label for="">Ngày đặt hàng</label>
                        <input type="date" name="ngay_dh" value="<?= $ngay_dh ?>">

                        <label for="">Tổng giá trị đơn hàng</label>
                        <br>
                        <input type="text" name="tong_donhang" value="<?= $tong_donhang ?>">

                        <label for="">Trạng thái</label>
                        <br>
                        <input type="text" name="trangthai" value="<?= $trangthai ?>">

                        <label for="">Tên người nhận</label>
                        <br>
                        <input type="text" name="ten_nguoinhan" value="<?= $ten_nguoinhan ?>">

                        <label for="">Số điện thoại người nhận</label>
                        <br>
                        <input type="text" name="sdt_nguoinhan" value="<?= $sdt_nguoinhan ?>">

                        <label for="">Email người nhận</label>
                        <br>
                        <input type="text" name="email_nguoinhan" value="<?= $email_nguoinhan ?>">


                        <div class="row_btn">
                            <input type="submit" name="capnhat" value="Cập nhật">
                            <button style=" background: var(--orange);" class="reset" type="reset">Nhập lại</button>
                            <a href="index.php?act=list_dh"> <button type="button" class="next">Danh sách</button></a>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->