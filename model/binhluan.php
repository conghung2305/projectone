<?php
     function insert_binhluan($noidung,$id_nguoidung,$id_sanpham){
        $sql="INSERT INTO `binhluan`( `noidung`, `id_nguoidung`, `id_sanpham`) VALUES ('$noidung','$id_nguoidung','$id_sanpham')";
        // echo'<pre>';
        // print_r($sql);
        pdo_execute($sql);
    } 
    function load_one_binhluan($id_sanpham){
        $sql="select* from binhluan where id_sanpham='.$id_sanpham.'";
        $listbinhluan= pdo_query($sql);
        return $listbinhluan;
    }

    function loadall_binhluan(){
        $sql="SELECT * FROM binhluan ORDER BY id DESC";
         $listbl=pdo_query($sql);
         return $listbl;
     }
     function delete_binhluan($id){
         $sql="delete from binhluan where id_sanpham=".$id;
         pdo_execute($sql);
     }
 
?>