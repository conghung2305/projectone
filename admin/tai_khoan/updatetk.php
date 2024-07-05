
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
        <i class='bx bx-menu'></i>
        <a href="#" class="nav-link">Categories</a>
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
                <h1>Quản lý tài khoản cá nhân</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Quản lý tài khoản cá nhân</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Cập nhật tài khoản </a>
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
                <form action="index.php?act=updatetk" class="row" method="post" enctype="multipart/form-data">
                    <div class="row_header">
                        <h1>Cập nhập tài khoản</h1>
                    </div> 
                    <div class="row_center">
                        <input type="hidden" name="id" value="<?=$id ?>">

                        <!--        <input type="text" name="maloai" placeholder="Số tự động" disabled>-->
						
                        <br>
                        <label for=""> Tên tài khoản </label>
                        <input type="text" name="ten_nguoidung" value="">
		

                        <label for=""> Email </label>
                        <input type="text" name="email" value="">
                        
                        <label for="">Số điện thoại</label>
                        <input type="text" name="sdt" value="">

                        <label for="">Địa chỉ</label>
                        <input type="text" name="diachi" value="">

                       

                        <div class="row_btn">
                            <input type="submit" name="capnhat" value="Cập nhật">
                            <button style=" background: var(--orange);" class="reset" type="reset">Nhập lại</button>
                            <a href="index.php?act=list_tk"> <button type="button" class="next">Danh sách</button></a>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->