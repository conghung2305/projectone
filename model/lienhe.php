<?php
 
        function insert_lienhe($ten,$sdt,$email,$diachi,$noidung_user,$id_nguoidung){
            $sql= "INSERT INTO lienhe(ten_lienhe,sdt,email,diachi,noidung_user,id_nguoidung) VALUES('$ten','$sdt','$email','$diachi','$noidung_user','$id_nguoidung')"; 
            pdo_execute($sql);
        
        }
        function loadall_lienhe(){
            $sql="SELECT * FROM `lienhe` order by id desc";
            $listlienhe=pdo_query($sql); 
            return $listlienhe;
        }
        function load_one_lienhe($id){
            $sql="SELECT * FROM `lienhe` where id=".$id;
            // echo $sql;
            $onelh=pdo_query_one($sql); 
            return $onelh;
        }
        // function delete_lienhe($id){ 
        //     $sql="DELETE FROM lienhe WHERE id=".$id;
            
        // }
        function update_admin($id,$noidung){
            $sql= "UPDATE `lienhe` SET noidung_admin='".$noidung."',trang_thai=1  WHERE `id` = ".$id;
            // echo $sql;
            pdo_query($sql);
           
            
        }
        function lienhe($id_nguoidung)
        {
            $sql = "SELECT * FROM lienhe WHERE id_nguoidung =$id_nguoidung ORDER BY id DESC";
            // echo $sql;
            $dsph = pdo_query($sql);
            return $dsph;
        }

?>
