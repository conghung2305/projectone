<?php
        
        function insert_bill($iduser,$name,$email,$address,$tell,$pttt,$ngaydathang,$tongdonhang){
            $sql="INSERT INTO bill(iduser,bill_name,bill_email,bill_address,bill_tell,bill_pttt,ngaydathang,total) VALUES('$iduser','$name','$email','$address','$tell','$pttt','$ngaydathang','$tongdonhang') ";
           return pdo_execute_return_lastInsertId($sql);
        }
        function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
            $sql="INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) VALUES('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill') ";
           return pdo_execute($sql);
        }
        function loadone_bill($id){
            $sql="select * from bill where id=".$id;
            $bill = pdo_query_one($sql);
            return $bill;
        }
        function loadall_cart($idbill){
            $sql="select * from cart where idbill=".$idbill;
            $bill = pdo_query($sql);
            return $bill;
        }
        function loadall_bill($iduser){
            $sql="select * from bill where iduser=".$iduser;
            $listbill = pdo_query($sql);
            return $listbill;
        }
     
    
    function loadall_donhang(){
        $sql="select * from donhang order by id desc ";
        // echo $sql;
        $listdonhang=pdo_query($sql);
        return $listdonhang;
    }
    // function list_chitiet_donhang($id){ 
    //     $sql="SELECT * FROM donhang WHERE id=".$id;
    //     $list_ct_dh=pdo_query($sql); 
    //     return $list_ct_dh;
    // }

    function load_tk_dh($key=""){

        $sql = "select *from donhang where 1";
            if ($key!= "") {
                $sql .= " AND id LIKE '%" . $key . "%'";
            }
        $list_tk=pdo_query($sql);
        return $list_tk;
        }

        function trangthai($id,$trangthai){
            $sql= "UPDATE `donhang` SET `trangthai`='".$trangthai."' WHERE id=$id";
            pdo_execute($sql);
        }

?>