<!-- SIDEBAR -->
<section id="sidebar">
            <a href="#" class="brand">
                <i class='bx bxs-smile'></i>
                <span class="text">AdminHub</span>
            </a>
            <ul class="side-menu top">
                <li class="<?=$act=='home'?'active':''?>">
                    <a href="index.php?act=home">
                        <i class='bx bxs-dashboard' ></i>
                        <span class="text">Bảng điều khiển</span>
                    </a>
                </li>        
                <li class="<?=$act=='list_dm'?'active':''?>">
                    <a href="index.php?act=list_dm">
                        <i class='bx bxs-doughnut-chart'></i>
                        <span class="text">Quản lý danh mục</span>
                    </a>
                </li>
                <li class="<?=$act=='list_sp'?'active':''?>">
                    <a href="index.php?act=list_sp">
                        <i class='bx bxs-shopping-bag-alt' ></i>
                        <span class="text">Quản lý sản phẩm </span>
                    </a>
                </li>
                <li class="<?=$act=='list_tk'?'active':''?>">
                    <a href="index.php?act=list_tk">
                        <i class='bx bxs-doughnut-chart' ></i>
                        <span class="text">Quản lý tài khoản cá nhân </span>
                    </a>
                </li>
                <li class="<?=$act=='list_dh'?'active':''?>">
                    <a href="index.php?act=list_dh">
                    <i class='bx bxs-doughnut-chart' ></i>
                        <span class="text">Quản lý đơn mua</span></span>
                    </a>
                </li>
                <!-- <li class="<?=$act=='list_bl'?'active':''?>">
                    <a href="index.php?act=list_bl">
                    <i class='bx bxs-doughnut-chart' ></i>
                        <span class="text">Quản lý bình luận</span></span>
                    </a>
                </li> -->
                <li class="<?=$act=='list_lh'?'active':''?>">
                    <a href="index.php?act=list_lh">
                    <i class='bx bxs-doughnut-chart' ></i>
                        <span class="text">Quản lý liên hệ</span></span>
                    </a>
                </li>

               
            </ul>
            <ul class="side-menu">
                <!-- <li>
                    <a href="#">
                        <i class='bx bxs-cog' ></i>
                        <span class="text">Settings</span>
                    </a>
                </li> -->
                <li>
                    <a href="login.php" class="logout">
                        <i class='bx bxs-log-out-circle' ></i>
                        <span class="text" onclick="alert('bạn chắc chắc muốn thoát ')">Logout</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- SIDEBAR -->
        <script src="../adminhub/script.js"></script>