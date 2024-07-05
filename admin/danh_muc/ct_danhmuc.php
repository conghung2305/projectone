<style>
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
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Chi tiết danh mục</a>
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
                <div class="head">
                    <h3>Sản phẩm trong danh mục</h3>

                </div>
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Nhãn hiệu </th>
                            <th>Tên sản phẩm </th>
                            <th>Hình ảnh sản phẩm </th>
                            <th>Mô tả </th>
                          
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $stt=1;
                       
                        foreach ($sp_dm as $dm_sp) {
                            extract($dm_sp);

                            $suadm = "index.php?act=sua_dm&id=" . $id;
                            $xoadm = "index.php?act=xoa_dm&id=" . $id;
                            $xemdm = "index.php?act=xem_dm&id=" . $id;
                            $imgpath = 'upload/' . $anhsp;
                            if (is_file($imgpath)) {
                                $img = "<img src='" . $imgpath . "' height='80'>";
                            } else {
                                $img = "no photo";
                            }
                            echo '	
                                <tr>
                                    <th>'.$stt.'</th>
                                    <th>'.$nhan_hieu.'</th>
                                    <th>'.$tensp.' </th>
                                    <th>'.$img.' </th>
                                    <th>'.$mota.' </th>
                                    <th> </th>
							    </tr>
                                ';
                            $stt++;

                        }
                    
                        ?>
                    </tbody>
                </table>
                <div class="row_btn02">
                    <!-- <button class="seclect" type="button">Chọn tất cả</button>
                    <button class="clean_select" type="button">Bỏ chọn tất cả</button>
                    <button style=" background: var(--orange);
                         color: var(--light);" class="clean" type="button"> Xóa các mục đã chọn
                    </button> -->
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN -->
</section>

<!-- <a href="' . $suadm . '">  <input type="button"  value="Sửa"></a>
                                    <a href="' . $xoadm . '">  <input type="button" value="Xóa" onclick="confirm(`ban co muon xoa`)"></a>
                                    <a href="' . $xemdm . '">  <input type="button"  value="Xem"></a> -->