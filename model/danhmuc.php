<?php
function insert_danhmuc($tenloai,$filename){
    $sql="INSERT INTO danhmuc(ten_danhmuc,anh) VALUES('$tenloai','$filename') ";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="delete from danhmuc where id=".$id;
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql="SELECT * FROM danhmuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql="select * from danhmuc where id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id,$tenloai,$hinh){
    if($hinh != ""){
        $sql="update danhmuc set ten_danhmuc='".$tenloai."',anh='".$hinh."' where id=".$id;
    }else{
        $sql="update danhmuc set ten_danhmuc='".$tenloai."'  where id=".$id;
    }
   
    pdo_execute($sql);
}
function xem_danhmuc($id){
    $sql="SELECT * FROM `sanpham` WHERE iddm=".$id;
    $dm=pdo_query($sql);
    return $dm;
}


?>