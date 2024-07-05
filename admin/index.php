<?php
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/model_taikhoan.php";
    include "../model/sanpham.php";
    include "../model/donhang.php";
    include "../model/binhluan.php";
    include "../model/lienhe.php";
    include "../model/cart.php";
    $act=$_GET['act']??'home';
    include "sidebar.php";

            switch ($act) {
                case 'list_dm':{ 
                    $listdanhmuc=loadall_danhmuc();
                    include "danh_muc/list_dm.php";
                    break;
                }
                case 'home':{
                    include "home.php";
                    break;
                }
                case 'add_dm':{
                    if(isset($_POST['themmoi'])){
                        $tenloai=$_POST['name'];
                        $filename=$_FILES['hinh']['name'];
                        $target_dir='upload/';
                        $target_file=$target_dir. basename($_FILES['hinh']['name']);
                        if(move_uploaded_file($_FILES['hinh']['tmp_name'],$target_file)){
                            //echo "The file". htmlspecialchars(basename($_FILES["hinhanh"]["name"]))."Hasbeen uploaded";
                        }else{
                            //echo "Sorry";
                        }
                       insert_danhmuc($tenloai,$filename);
                        $thongbao="Thêm thành công";
                    }
                    include "danh_muc/add_dm.php";
                  $listdanhmuc=loadall_danhmuc();
                    break;
                }
                case 'xoa_dm':{
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_danhmuc($_GET['id']);
                    } 
                    $sql="SELECT * FROM danhmuc order by id desc";
                    $listdanhmuc=loadall_danhmuc();
                    include "danh_muc/list_dm.php";
                    break;
                }
                case 'sua_dm':{
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $dm=loadone_danhmuc($_GET['id']);
                    }
                    include "danh_muc/update_dm.php";
                    break;
                }
                case 'updatedm':
                    if(isset($_POST['capnhat'])){
                        $tenloai=$_POST['tenloai'];
                        $id=$_POST['id'];
                        $img=$_FILES['anh']['name'];
                        $target_dir="upload/";
                        $target_file= $target_dir . basename($_FILES['anh']['name']);
                        if (move_uploaded_file($_FILES['anh']['tmp_name'], $target_file)) {
                            
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          }
                        update_danhmuc($id,$tenloai,$img);
                        $thongbao="Cập nhật thành công";
                        
                    }
                    $listdanhmuc=loadall_danhmuc();
                      include "danh_muc/list_dm.php";
                        break;
                        case 'qltk':
                           
                             break;
              
                case'xem_dm':
                    if(isset($_GET['iddm'])&&($_GET['iddm'] > 0)){      
                    $sp_dm=xem_danhmuc($_GET['iddm']);
                    }
                    
                    include "danh_muc/ct_danhmuc.php";
                    break;            


                case 'list_sp':
                    if (isset($_POST['listok'])&&($_POST['listok'])) {
                        $kyw=$_POST['kyw'];
                        $iddm=$_POST['iddm'];
                    }else{
                        $kyw='';
                        $iddm=0;
                    }
                 
                    $listdanhmuc=loadall_danhmuc();
                    $listsanpham=loadall_sanpham($kyw,$iddm);
                    include "san_pham/list_sp.php";
                    break;
                


                case 'add_sp':
                    if (isset($_POST['themmoi'])) {
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensp'];
                        $nhanhieu=$_POST['nhan_hieu'];
                        $giasp=$_POST['gia'];
                        $mota=$_POST['mota'];
                        $date_xx=$_POST['ngay_xuat_xuong'];
                        $mausac=$_POST['mausac'];
                        $bo_nho=$_POST['dung_luong'];
                        $pin=$_POST['pin'];
                        $camera=$_POST['camera'];
                        $hinh=$_FILES['anhsp']['name'];
                        $target_dir="upload/";
                        $target_file= $target_dir . basename($_FILES['anhsp']['name']);
                        if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          }

                          $anhspmt=$_FILES['anhspmt']['name'];
                            $total = count($_FILES['anhspmt']['name']);
                            // Loop through each file
                            for ($i = 0; $i < $total; $i++) {

                                $tmpFilePath = $_FILES['anhspmt']['tmp_name'][$i];

                                //Make sure we have a file path
                                if ($tmpFilePath != "") {
                    
                                    }
                                }
                            
                        insert_sanpham($nhanhieu,$tensp,$giasp,$hinh,$mota,$date_xx,$mausac,$pin,$bo_nho,$camera,$iddm,$anhspmt);
                            
                        $thongbao="Thêm thành công";
                            }
                       $listdanhmuc=loadall_danhmuc();
                     $listsanpham=loadall_sanpham();
                    include "san_pham/add_sp.php";
                     break;
              
                
                case 'sua_sp':
                    if (isset($_GET['id'])&&($_GET['id'])>0) {
                        $sanpham=loadone_sanpham($_GET['id']);
                    }
                    $listdanhmuc=loadall_danhmuc();
                    include "san_pham/update_sp.php";
                    break;
                
                case 'xoa_sp':
                    if (isset($_GET['id'])&&($_GET['id'])>0) {
                        delete_sanpham($_GET['id']);
                      }
                       $listsanpham=loadall_sanpham("",0);
          
                include "san_pham/list_sp.php";
                    break;
                
                case 'xem_sp':
                    
                    if (isset($_GET['id'])&&($_GET['id'])>0) {
                        $listsp_bl=loadsp_bl($_GET['id']);
                        $list_bl=load_bl($_GET['id']);
                    }
                    // echo'<pre>';
                    // print_r($list_bl);
                  include "san_pham/list_chitiet_sp.php";
                    break;
                 
               
                 
                
                case 'update_sp':
                    if (isset($_POST['capnhat'])) {
                        $id= $_POST['id'];
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensp'];
                        $nhanhieu=$_POST['nhan_hieu'];
                        $giasp=$_POST['gia'];
                        $motasp=$_POST['mota'];
                        $mausac=$_POST['mausac'];
                        $bo_nho=$_POST['dung_luong'];
                        $pin=$_POST['pin'];
                        $camera=$_POST['camera'];
                        $date_xx=$_POST['ngay_xuat_xuong'];
                        $hinh=$_FILES['anhsp']['name'];
                        $target_dir="upload/";
                        $target_file= $target_dir . basename($_FILES['anhsp']['name']);
                        if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                            //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                          } else {
                            //echo "Sorry, there was an error uploading your file.";
                          }
                          update_sanpham($id,$nhanhieu,$tensp,$giasp,$hinh,$motasp,$mausac,$pin,$bo_nho,$camera,$date_xx,$iddm);
                        $thongbao="Cập nhật thành công";
                    }
                    $listdanhmuc=loadall_danhmuc();
                  $listsanpham=loadall_sanpham();
                    include "san_pham/list_sp.php"; 
                    break;

                case 'ct_sp':
                    include "san_pham/ct_sp.php";
                    break;
                
                
               
                case 'list_tk':
                    $listtaikhoan = loadall_taikhoan();
                    include "tai_khoan/list_tk.php";
                    break;

                case 'xem_tk':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                       $listtaikhoan=loadone_taikhoan($_GET['id']);
                    }
                    include "tai_khoan/list_chitiet_tk.php";
                    break;
                
                case 'xoa_tk':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_taikhoan($_GET['id']);
                    }
                    $sql="SELECT * FROM user order by id desc";
                    $listtaikhoan=loadall_taikhoan();
                    include "tai_khoan/list_tk.php";
                    break;
              
                case 'sua_tk':
                    include "tai_khoan/updatetk.php";
                    break;
                
                case 'updatetk':
                    include "tai_khoan/updatetk.php";
                    break;
                
                case 'list_dh':
                    $listdonhang = loadall_donhang();
                    include "don_mua/list_dh.php";
                    break;
                    
                 case'update_status';
                    $id=$_GET['id'];
                    $trangthai=$_GET['trangthai'];
                     trangthai($id,$trangthai);
                     header('location:'.$_SERVER['HTTP_REFERER'] );
                     exit();

                case'tk_dh':
                    if (isset($_POST['check'])) {
                        $keyword = $_POST['key'];
                    } else {
                        $keyword = '';
                    }
                    $list_dh = load_tk_dh($keyword);
                  
                    include "don_mua/timkiem_donhang.php";
                    break;    
                
                case 'xem_dh':
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                           $list_ct_sp=ct_don_sp($_GET['id']);
                           $list_ct_dh=thongtin_dh($_GET['id']);
                        }
                      include "don_mua/ct_dh.php";
                    break;
                
            //    case 'sua_dh':
            //     if (isset($_GET['id'])&&($_GET['id'])>0) {
            //         $donhang=loadone_donhang($_GET['id']);
            //     }
            //     $listdanhmuc=loadall_donhang();
            //     include "don_mua/updatedh.php";
            //     break;
               

            //    case 'updatedh':
            //     if (isset($_POST['capnhat']) && ($_POST['capnhat'])){
            //         $id=$_POST['id'];
            //         $diachi_donhang=$_POST['diachi_donhang'];
            //         $email_donhang=$_POST['email_donhang'];
            //         $bill_sdt=$_POST['bill_sdt'];
            //         $bill_pttt=$_POST['bill_pttt'];
            //         $tong_donhang=$_POST['tong_donhang'];
            //         $ngay_dh=$_POST['ngay_dh'];
            //         $trangthai=$_POST['trangthai'];
            //         $ten_nguoinhan=$_POST['ten_nguoinhan'];
            //         $sdt_nguoinhan=$_POST['sdt_nguoinhan'];
            //         $email_nguoinhan=$_POST['email_nguoinhan'];

            //         update_donhang($id,$diachi_donhang, $email_donhang,$bill_sdt,$bill_pttt,$ngay_dh,$tong_donhang,$trangthai, $ten_nguoinhan,$sdt_nguoinhan,$email_nguoinhan);


            //     }
            //     $listdonhang=loadall_donhang();
            //     include "don_mua/list_dh.php";
            //     break;

               
            //    case 'xoa_dh':
            //     if(isset($_GET['id'])&&($_GET['id']>0)){
            //         delete_donhang($_GET['id']);
            //     }
            //     $sql="SELECT * FROM donhang order by id desc";
            //     $listdonhang=loadall_donhang();
            //     include "don_mua/list_dh.php";
            //     break;
            
            //     case'ct_dh':
            //         include "don_mua/ct_dh.php";
            //         break;
                

                case "list_lh":
                    $listlienhe=loadall_lienhe();
                    include "lienhe/list_lh.php";
                    break;

                case "xem_chitiet_lh":
                    if(isset($_GET["id"])&&($_GET["id"]> 0)){
                  $list_lh=load_one_lienhe($_GET['id']);
                  
                    if(isset($_POST['check']) ){
                        $id=$_GET['id'];
                        $noidung=$_POST['noidung_admin'];
                        $listlienhe['trang_thai']=1;
                        update_admin($id,$noidung);
                    }
                }
                       $list_lh=load_one_lienhe($_GET['id']);
                    include "lienhe/xem_chitiet_lh.php";
                    break;    
                

                    // case 'list_bl':
                    //     $listbinhluan=loadall_binhluan();
                    //     include "binhluan/list_bl.php";
                    //     break;
                    
                
                case 'xoa_bl':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_binhluan($_GET['id']);
                    } 
                    $sql="SELECT * FROM binhluan order by id desc";
                   
                    include "san_pham/list_chitiet_sp.php";
                        break;
                      
                    }
                 
                    

    include "footer.php";

?>

