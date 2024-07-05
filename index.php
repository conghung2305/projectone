<?php
session_start();
include "model/model_taikhoan.php";
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/cart.php";
include "model/lienhe.php";
include "model/binhluan.php";

include "header.php";
include "global.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];

    if (!isset($_SESSION['mycart']))
        $_SESSION['mycart'] = [];




    switch ($act) {
        case 'login':
            include "view/tai_khoan/login.php";
            break;

        case 'register':
            include "view/tai_khoan/register.php";
            break;

        case 'add_cart':
            if (isset($_POST['add_gh'])) {
                $id = $_POST['id'];
                $img = $_POST['img'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $view_by = $_POST['view_by'];
                $soluong = $_POST['quantity'];
                $thanhtien = $soluong * $price;
                // tạo ra một mảng để lưu trũ vào giỏ hàng 
                $sp_new = [$id, $img, $name, $price, $view_by, $soluong, $thanhtien];

                $check = false;
                foreach ($_SESSION['mycart'] as $index => $sp) {
                    $tensp = $sp[2];
                    if ($tensp == $name) {
                        $check = true;
                        $_SESSION['mycart'][$index][5] += $soluong;
                    }
                }
                if (!$check) {
                    array_push($_SESSION['mycart'], $sp_new);
                }
                // var_dump($check);
            }
            include "view/cart/add_cart.php";
            break;

        case 'bill_cart':
            include "view/cart/bill_cart.php";
            break;

        // case 'view_bill':
        //     include "view_bill/view_bill.php";
        //     break;

        case 'dang_nhap':

            if (isset($_POST['dangnhap'])) {
                $ten = $_POST['ten'];
                $matkhau = $_POST['matkhau'];
                $check_dn = check_user($ten, $matkhau);
                if ($check_dn) {
                    if ($ten == $check_dn['ten_nguoidung'] && $matkhau == $check_dn['mat_khau']) {
                        
                        if ($check_dn['role'] == 0) {
                            header('location:index.php');
                        }
                        if (is_array($check_dn)) {
                            $_SESSION['user'] = $check_dn;
                        }
                        echo 'Đăng nhập thành công';
                    }
                } else {
                    $thongbao='đăng nhập thất bại';
                    header('location:index.php?act=login');
                }
            }
            break;

        case 'dangki':
            if (isset($_POST['dangki']) && $_POST['dangki']) {
                $user = $_POST['ten_nguoidung'];
                $email = $_POST['email_nguoidung'];
                $phone = $_POST['sdt_nguoidung'];
                $password = $_POST['mat_khau'];

                if ($user == "" || $email == "" || $phone == "" || $password == "") {
                    echo "Vui lòng điền đầy đủ thông tin";
                } else {
                    insert_taikhoan($user, $email, $phone, $password);
                    $thongbao = "Đã đăng kí thành công.Vui lòng đăng nhập để thực hiện chức năng";
                }


            }

            include "view/tai_khoan/register.php";
            break;

        case 'quenmk':
            if (isset($_POST['check'])) {
                $email = $_POST['email'];
                $checkemail = check_email($email);
                if (is_array($checkemail)) {
                    $thongbao = "Your pass: " . $checkemail['mat_khau'] . "<br>" . "Your user name: " . $checkemail['ten_nguoidung'];

                } else {
                    $thongbao = "Email does not exist";
                }
            }
            include 'view/tai_khoan/quenmk.php';

            break;

        case 'suatk':
            if (isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $user = $_POST['ten_nguoidung'];
                $email = $_POST['email_nguoidung'];
                $password = $_POST['mat_khau'];
                $address = $_POST['dia_chi'];
                $anh = $_FILES['anh']['name'];
                move_uploaded_file($_FILES['anh']['tmp_name'], 'admin/admin/upload/' . $_FILES['anh']['name']);
                update_taikhoan($id, $user, $email, $password, $address, $anh);
                $_SESSION['user'] = check_user($user, $password);

            }
            include 'view/tai_khoan/edit_tk.php';
            break;


        case "chitiet_taikhoan":
            if (isset($_POST['view'])) {
                $id = $_POST['id'];
                $user = $_POST['ten_nguoidung'];
                $email = $_POST['email_nguoidung'];
                $password = $_POST['mat_khau'];
                $address = $_POST['dia_chi'];
                update_taikhoan($id, $user, $email, $password, $address);
                $_SESSION['user'] = check_user($ten, $matkhau);
                header('location:index.php');


            }

            include "view/tai_khoan/chitiet_taikhoan.php";
            break;

        case 'thoat':
            session_unset();
            header('location:index.php');
            break;

        case 'chitiet_sp':
            if (isset($_GET['idsp'])) {
                $id = $_GET['idsp'];
                $onesp = load_one_sanpham($id);

                $listimg = loadall_sanpham_img($id);
                include "view/san_pham/chitiet_sp.php";
            } else {
                include "home.php";
            }
            break;

        case 'xoa_cart':
            if (isset($_GET['id_cart'])) {
                array_splice($_SESSION['mycart'], $_GET['id_cart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('location:index.php?act=add_cart');
            break;

        case 'bill_call':
            include "view/cart/bill_cart.php";
            break;

        case 'dm_sanpham':
            if (isset($_GET['iddm']) && ($_GET['iddm'])) {
                $iddm = $_GET['iddm'];
                $sp_cungloai = loadall_sanpham("", $iddm);
                // $tendm=load_tendm($iddm);
                include "view/san_pham/sanpham_cungloai.php";
            } else {

            }
            break;

        case 'sp_luotxem':
           if(isset($_GET['id']) && ($_GET['id'])) {
            $iddm = $_GET['id'];
            $load_sp_dm=loadall_sanpham_iddm($iddm);
           }
            include "view/san_pham/sp_luotxem.php";
            break;

        case 'sp_luotmua':
            if(isset($_GET['id']) && ($_GET['id'])) {
                $iddm = $_GET['id'];
                $load_sp_dm=loadall_sanpham_iddm($iddm);
               }
            include "view/san_pham/sp_muanhieu.php";
            break;

        case 'bill_comfirm':
            if (isset($_SESSION['user']))
                $id_nguoidung = $_SESSION['user']['id'];
            else
                $id_nguoidung = 0;

            if (isset($_POST['dongy']) && ($_POST['dongy'])) {

                $ten_nguoinhan = $_POST['user'];
                $diachi_nguoinhan = $_POST['address'];
                $email = $_POST['email'];
                $sdt_nguoinhan = $_POST['phone'];
                $bill_pttt = $_POST['pttt'];
                // $ngay_dh = date("h:i:sa d/m/y");
                $Tong_donhang = tongdonhang();
                $id_bill = insert_donhang($id_nguoidung, $bill_pttt, $Tong_donhang, $ten_nguoinhan, $sdt_nguoinhan, $diachi_nguoinhan);

                // insert bảng san pham_don hang vao session my carrt
                foreach ($_SESSION['mycart'] as $cart) {

                    // $sp_new=[$img,$name,$price,$soluong,$thanhtien];
                    insert_sanpham_donhang($_SESSION['user']['id'], $cart[0], $cart[1], $cart[2], $cart[3], $cart[5], $cart[3] * $cart[5], $id_bill);

                }
                $_SESSION['mycart'] = [];
                // $ds_bill=load_one_bill($id_bill);
                $ds_bill = load_one($id_bill);
                $thongtin = thongtin($id_bill);



            }
            // $ds_bill=load_one_bill($id_bill);
            include "view/bill/bill_comfirm.php";
            break;

        case 'tk_sanpham':
            if (isset($_POST['check_tk'])) {
                $keyword = $_POST['keyword'];
            } else {
                $keyword = '';
            }
            $list_sp = load_tk_sp($keyword);
            // print_r($list_sp);
            include "view/san_pham/tk_sp.php";
            break;

        case 'list_bill';
         $id_nguoidung = $_SESSION['user']['id'];
        //  echo $id_nguoidung;
            $list_all_bill = bill($id_nguoidung);
        
            include "view/bill/list_bill.php";
            break;

        case 'ct_bill';
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $ct_bill = ct_don_sp($_GET['id']);
                $list_ct_dh = thongtin_dh($_GET['id']);
                // echo'<pre>';
                // print_r($ct_bill);
            }
            include "view/bill/ct_bill.php";
            break;

        case 'lienhe':
            // if(isset($_SESSION['user'])){
            // $id_nguoidung = $_SESSION['user']['id'];
            // } else {
            //     $id_nguoidung = 0;
            // }
            if (isset($_POST['send'])) {
                //  echo $_SESSION['user']['id'];
                $id_nguoidung=$_SESSION['user']['id'];
                $ten = $_POST['ten_lienhe'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $diachi = $_POST['diachi'];
                $noidung_user = $_POST['noidung'];

                insert_lienhe($ten,$sdt, $email, $diachi, $noidung_user,$id_nguoidung);
                $thongbao = "Success";

            }
            include "lienhe.php";
            break;

         case'list_lh':
            $id_nguoidung=$_SESSION['user']['id'];
            $list_lienhe=lienhe($id_nguoidung);
            include"view/lien_he/list_lh.php";
            break;

         case'ct_lienhe':
            if(isset($_GET["id"])&&($_GET["id"]> 0)){
                $list_lh=load_one_lienhe($_GET['id']);
            }
            include"view/lien_he/ct_lienhe.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";

?>