<?php 
        
        // function insert_sanpham($nhanhieu,$tensp,$hinh,$giasp,$mota, $date_xx,$mausac,$pin,$bo_nho,$camera,$iddm,$giam_gia){
        //     $sql= "INSERT INTO `sanpham`( `nhan_hieu`, `tensp`, `anhsp`, `gia`, `mota`, `ngay_xuat_xuong`, `mau_sac`, `pin`, `bo_nho`, `camera`, `iddm`,`giam_gia`) 
        //     VALUES ('$nhanhieu','$tensp','$hinh','$giasp','$mota',' $date_xx','$mausac','$pin',' $bo_nho','$camera','$iddm','$giam_gia')";
        //     pdo_query($sql);    
        // }
            // hhkjh

            function insert_sanpham($nhanhieu,$tensp,$giasp,$hinh,$mota,$date_xx,$mausac,$pin,$bo_nho,$camera,$iddm,$anhspmt)
        {
            $con = mysqli_connect("localhost", "root", "", "duan1_nhom1");
        
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit();
            }
        
            mysqli_query($con, "INSERT INTO `sanpham`( `nhan_hieu`, `tensp`, `anhsp`, `gia`, `mota`, `ngay_xuat_xuong`, `mau_sac`, `pin`, `bo_nho`, `camera`, `iddm`) 
             VALUES ('$nhanhieu','$tensp','$hinh','$giasp','$mota',' $date_xx','$mausac','$pin',' $bo_nho','$camera','$iddm')");
            // Print auto-generated id
            $id_sanpham = mysqli_insert_id($con);
            foreach ($anhspmt as $anhmt) {
                mysqli_query($con, "INSERT INTO `anh_sanpham`(`id_sanpham`, `anhspmt`) VALUES ('$id_sanpham','$anhmt')");
            }
        
          
        }

        // insert dụ liệu hình ảnh người dùng

        function loadall_sanpham_img($id){
            $sql="SELECT * FROM `anh_sanpham` WHERE id_sanpham=".$id;
           
            $listimg=pdo_query($sql);
            return $listimg;
        }

        // gjhgjh
        function delete_sanpham($id){
            $sql="DELETE FROM sanpham WHERE id=".$id;
            pdo_execute($sql);
        }   
            // giao diẹn client
        function loadall_sanpham_home(){
            $sql="SELECT * FROM sanpham WHERE 1 ORDER BY id DESC ";
            $listsanpham=pdo_query($sql);
           
            return $listsanpham;
        }

        function loadall_sanpham_iddm($iddm){
            $sql="SELECT * FROM sanpham WHERE iddm=$iddm ";
            // echo $sql;
            $listsp=pdo_query($sql);
           
            return $listsp;
        }
        // function loadall_sanpham_top10(){
        //     $sql="SELECT * FROM sanpham WHERE 1 ORDER BY luotxem DESC LIMIT 0,10";
        //     $listsanpham=pdo_query($sql);
        //     return $listsanpham;
        // }
        function loadall_sanpham($kyw="",$iddm=0){
            $sql="SELECT * FROM sanpham WHERE 1";
            if ($kyw!="") {
                $sql.=" and tensp like '%".$kyw."%'";
            }
            if ($iddm>0) {
                $sql.=" and iddm ='".$iddm."'";
            }
            $sql.=" ORDER BY id DESC";
            $listsanpham=pdo_query($sql);
            return $listsanpham;
        }

        function load_one_sanpham($id){
            $sql="SELECT * FROM sanpham WHERE id=".$id;
            $sp=pdo_query_one($sql);
            return $sp;
        }
         
      
        function load_ten_dm($iddm){
            if ($iddm>0) {
                $sql="SELECT * FROM danhmuc WHERE id=".$iddm;
                $dm=pdo_query_one($sql);
                extract($dm);
                return $name;
            }else{
                return "";
            }
        
        }

        function load_sanpham_cungloai($id,$iddm){
            $sql="SELECT * FROM sanpham WHERE iddm=".$iddm." AND id <>".$id;
            $listsanpham=pdo_query($sql);
            return $listsanpham;
        }
        

        function update_sanpham($id,$nhanhieu,$tensp,$giasp,$hinh,$motasp,$mausac,$pin,$bo_nho,$camera,$date_xx,$iddm)
                {
                    if($hinh != "")
                        $sql = "UPDATE sanpham SET iddm='".$iddm."', nhan_hieu='".$nhanhieu."', tensp='".$tensp."', gia='".$giasp."', anhsp='".$hinh."', mota='".$motasp."', ngay_xuat_xuong='".$date_xx."', mau_sac='".$mausac."', pin='".$pin."',bo_nho ='".$bo_nho."', camera='".$camera."'  WHERE id=".$id;
                    else
                    $sql = "UPDATE sanpham SET iddm='".$iddm."', nhan_hieu='".$nhanhieu."', tensp='".$tensp."', gia='".$giasp."', mota='".$motasp."', ngay_xuat_xuong='".$date_xx."', mau_sac='".$mausac."', pin='".$pin."',bo_nho ='".$bo_nho."', camera='".$camera."'  WHERE id=".$id;   
                    pdo_execute($sql);
                    
                    // var_dump($sql);
                    // die;
                }
            function update_ct_sp($chip,$dung_luong_pin,$Mau_sac,$mang_5G){
                $sql="UPDATE ct_sp SET chip='".$chip."',dung_luong_pin='".$dung_luong_pin."', Mau_sac='".$Mau_sac."',mang_5G='".$mang_5G."' WHERE 1";
                pdo_query($sql);
            }

            function loadone_sanpham($id){ 
                $sql="SELECT * FROM sanpham WHERE id=".$id;
                $sp=pdo_query_one($sql);
                return $sp;
            }

            // function list_chitiet_sp($id){ 
            //     $sql="SELECT * FROM sanpham WHERE id=".$id;
            //     $list_ct=pdo_query($sql); 
            //     return $list_ct;
            // }

            function load_tk_sp($keyword=""){

                $sql = "select *from sanpham where 1";
                    if ($keyword != "") {
                        $sql .= " AND tensp LIKE '%" . $keyword . "%'";
                    }
                $list_tk=pdo_query($sql);
                return $list_tk;
                }

            function loadsp_bl($id){
                $sql="SELECT * FROM `sanpham` LEFT JOIN binhluan ON binhluan.id_sanpham=sanpham.id WHERE sanpham.id=".$id;
               
                $onesp_bl=pdo_query_one($sql);
                return $onesp_bl;
            }
            function load_bl($id){
                $sql= "SELECT binhluan.*, user.*, sanpham.*
                FROM binhluan
                JOIN user ON binhluan.id_nguoidung = user.id
                JOIN sanpham ON binhluan.id_sanpham = sanpham.id
                WHERE binhluan.id_sanpham =".$id;
                $all_bl=pdo_query($sql);
                return $all_bl;
                 

            }
?>