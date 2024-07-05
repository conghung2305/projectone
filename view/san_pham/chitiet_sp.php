<style>
    .bl{
        margin-top: 20px;
        width: 94%;
        min-height: 70px;
        /* border: 1px solid gray; */
        /* border-radius: 3px; */
        border-bottom: 1px solid gray;
        background-color: #EEEEEE;
        margin: 0 auto;
        margin-bottom: 10px;
        /* box-shadow: 0px 0px 1px 1px; */
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
    .noidung{
        margin-bottom: 10px;
        margin-left:50px ;
    }
</style>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/grid.css">
<!-- <link rel="stylesheet" href="css/css.css">  -->
<!-- <link rel="stylesheet" href="css/form.css">  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="header">
    <div class="child_header">
        <div class="box1_image">

            <div class="logo-area">
            <a href="index.php?act=home"><img src="img/logo/logo.png" alt="logo"></a>
            </div>

        </div>
        <div class="box2">
            <!--Header Menu Area Start-->
            <div class="header-menu-area text-center">
                <nav>
                    <ul class="main-menu">
                        <li><a href="index.php?act=home">Trang chủ<i class="ion-ios7-arrow-down"></i></a>
                            <!--Dropdown Menu Start-->
                            <ul class="dropdown">


                            </ul>
                            <!--Dropdown Menu End-->
                        </li>
                        <li><a href="#">Điện thoại <i class="ion-ios7-arrow-down"></i></a> </li>

                        <li><a href="">Giới thiệu</a></li>
                        <li><a href="index.php?act=lienhe">Liên hệ</a></li>

                    </ul>
                </nav>
            </div>
            <!--Header Menu Area End-->
        </div>

        <!--Header Search And Mini Cart Area Start-->
        <div class="box3">
            <ul>
                <li><a class="sidebar-trigger-search" href="#"><span class="icon_search"></span></a>
                </li>
                <li class="currency-menu"><a href="#"><span class="icon_lock_alt"></span></a>
                    <!--Crunccy dropdown-->
                    <ul class="currency-dropdown">

                        <?php
                        include "boxtaikhoan.php";
                        ?>

                    </ul>
                    <!--Crunccy dropdown-->
                </li>

                <li class="mini-cart">
                    <?php
                    if (isset($_SESSION['user'])) {

                        $id = $_SESSION['user']['id'];

                        $hinhanh_user = pdo_query_one("select *from user where id= $id");
                        ?>
                        <img src="admin/admin/upload/<?php echo $_SESSION['user']['anh'] ?>" alt="" width="30px"
                            height="30px">
                        <?php
                    }

                    ?>

                    <h4>
                        <?php
                        if (isset($_SESSION['user'])) {

                            echo $_SESSION['user']['ten_nguoidung'];
                        } ?>
                    </h4>

                </li>
            </ul>
        </div>
        <!--Header Search And Mini Cart Area End-->

    </div>
</div>

<div class="new_tin">
    <h3>Trang chủ / Chi tiết sản phẩm </h3>

</div>
<main class="catalog  mb ">

    <div class="boxleft">

        <div class="space-30"></div>

        <div class="grid wide">
            <div class="row no-gutters">
                <!-- box phai -->
                <div class="product-left col l-7">
                    <div class="row no-gutters">
                        <div class="col l-2">
                            <?php foreach ($listimg as $image):
                                ?>
                                <div class="item">
                                    <img src="admin/admin/upload/<?= $image['2'] ?>">

                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="col l-10">
                            <div class="item_primary">
                                <img src="" alt="">
                                <div class="loop"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- box trai/ -->
                <div class="product-right col l-5">
                    <div class="product-detail">
                        <?php
                        $id = $_GET['idsp'];
                        // cap nhap lươt xem
                        $onesp = load_one_sanpham($id);
                        extract($onesp);

                        $sql = "UPDATE sanpham SET luot_xem=$luot_xem+1 WHERE id=" . $id;
                        pdo_execute($sql);
                        $hinh = $anh_sp . $anhsp;
                        echo '
                                    <h3>' . $tensp . '</h3>
                                    <div class="rating">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span class="times-rating">1 Đánh giá</span>
                                    </div>
                                    <div class="price-group">
                                     <p>Lượt xem :' . $luot_xem . '   Lượt mua :' . $luot_mua . '</p>
                                        <span class="price-new">' . number_format($gia) . ' VND</span>
                                        <div class="space-30"></div>
                                        <b>
                                            <p>Hãng sản xuất:' . $nhan_hieu . '</p>
                                            <p>
                                            Màu sắc: ' . $mau_sac . '
                                            </p>
                                            <p> Dung lượng pin : ' . $pin . '</p>
                                            <p> Bộ nhớ : ' . $bo_nho . '</p>
                                            <p> Camera : ' . $camera . '</p>
                                            <p>Ngày sản xuất: ' . $ngay_xuat_xuong . '</p>
                                            <p>Mô tả sản phẩm: ' . $mota . '</p>
                                        </b>
                                        
                                    </div>
                                        <div class="space-30"></div>

                                        <form action="index.php?act=add_cart&idsp=' . $id . '" method="post">
                                        <input type="hidden" name="id" value="' . $id . '">
                                        <input type="hidden" name="img" value="' . $anhsp . '">
                                        <input type="hidden" name="name" value="' . $tensp . '">
                                        <input type="hidden" name="price" value="' . $gia . '">
                                        <input type="hidden" name="view_by" value="' . $luot_mua . '">
                                            <div class="group-button">
                                                <div class="stepper">
                                                    <input id="quantity" type="text" value="1" name="quantity">
                                                    <span>
                                                        <i class="up fa-solid fa-angle-up"></i>
                                                        <i class="down fa-solid fa-angle-down"></i>
                                                    </span>
                                                </div>
                                                <button class="gui" type="submit" name="add_gh" id="button-card"><i class="fa-solid fa-cart-plus"></i> Thêm vào giỏ</button>
                                            </div>
                                        </form>
                             ';
                        ?>
                    </div>
                </div>
            </div>

        </div>
        <!-- <binhluan>       -->
        <div class="space-30"></div>
        <div class="space-30"></div>
        <div class=from_bl>
            <h2>Bình luận sản phẩm</h2>
            <?php
            if (isset($_GET['idsp'])) {
                $id = $_GET['idsp'];
            }
            ;
            $id_nguoidung = $_SESSION['user']['id'] ?? null;
            $ngay_binhluan = date("h:i:sa d/m/y");
            $allBinhluan = pdo_query("SELECT * FROM binhluan JOIN user ON binhluan.id_nguoidung = user.id WHERE binhluan.id_sanpham = $id");

            if (isset($_POST['btnSave']) && ($_POST['btnSave'])) {
                $noidung = $_POST['binhluan'];
                insert_binhluan($noidung, $id_nguoidung, $id);
                echo '<script>window.location.href = "' . $_SERVER['REQUEST_URI'] . '";</script>';
                exit();
            } else {
                $bao = 'bạn phải đăng nhập mơí dùng được tính năng bình luân này ';
            }

                ?>
        
                
                        <?php
                            if (isset($_SESSION['user'])) {
                                echo '
                                                <form action="" method="post">
                                                    <div class="group-form">
                                                        <input class="text" name="binhluan" id="" cols="30" rows="10"
                                                            placeholder="Nhập bình luận ở đây" onclick="check_login()">
                                                        <input class="submit"  style="" type="submit" value="Gửi Bình luận" name="btnSave">
                                                    </div>  
                                                </form>
                                                ';
                            } else {
                                echo $bao;
                            }
                            ?>
            <?php
            foreach ($allBinhluan as $onebl) {
                extract($onebl);
                $imgpath = 'admin/admin/upload/' . $anh;
                // if (is_file($imgpath)) {
                //     $img = "<img src='" . $imgpath . "' height='30px' width='30px' class='anh'>";
                // } else {
                //     $img = "no photo";
                // }
                // echo'<pre>';
                // print_r($onebl);
                echo '
                                <div class="bl">
                                    <div class="child_bl">
                                        <img src="' . $imgpath . '">
                                        <h3>' . $ten_nguoidung . '</h3>
                                    </div>
                                    
                                    <p class="noidung">' . $ngay_bl . '</p>
                                    <p class="noidung">' . $noidung . '</p>
                                </div>';

            }
            ?>






        </div>
        <!-- <binhluan end>      -->

    </div>

    <script>

        var first_item = document.querySelectorAll(".item")[0].querySelector("img");
        var all_item = document.querySelectorAll(".item");
        var scaleNumber = 2;//chỉnh cấp độ zoom
        var loop = document.querySelector('.loop');
        var item_primary = document.querySelector('.item_primary');
        var img = item_primary.querySelector('img');
        let src = first_item.src;
        img.src = first_item.src;
        for (let i = 0; i < all_item.length; i++) {
            all_item[i].querySelector("img").onclick = function (e) {
                src = all_item[i].querySelector("img").src;
                img.src = src;
                loop.style.background = `url(${src})`;
            }
        }
        loop.style.background = `url(${src})`;
        item_primary.addEventListener('mousemove', function (e) {
            loop.style.backgroundSize = img.offsetWidth * scaleNumber + 'px ' + img.offsetHeight * scaleNumber + 'px';
            loop.style.display = 'block';
            let x = e.clientX - item_primary.offsetLeft;
            let y = e.clientY - item_primary.offsetTop + window.scrollY;
            loop.style.left = x + 'px';
            loop.style.top = y + 'px';
            let loopX = x / (img.offsetWidth / 100) + '%';
            let loopY = y / (img.offsetHeight / 100) + '%';
            loop.style.backgroundPositionX = loopX;
            loop.style.backgroundPositionY = loopY;
        });
        loop.addEventListener('mouseleave', function (e) {
            loop.style.display = 'none';
        });


        let up = document.querySelector(".up");
        let down = document.querySelector(".down");
        let value = document.querySelector("#quantity");
        up.onclick = (e) => {
            console.log("up");
            value.value = parseInt(value.value) + 1;
            console.log(value.value);
        }
        down.onclick = (e) => {
            console.log("down");
            if (value.value > 1) {
                value.value = parseInt(value.value) - 1;
            }
        }
    </script>

</main>