<?php
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $tt = intval($cart[3]) * intval($cart[5]);
        $tong += $tt;
        // echo '<pre>';
        // print_r($cart);  
        // sửa cart2 *cart4
    }
    return $tong;
}

function insert_donhang($id_nguoidung, $bill_pttt, $Tong_donhang, $ten_nguoinhan, $sdt_nguoinhan, $diachi_nguoinhan)
{
    $sql = "INSERT INTO `donhang`( `id_nguoidung`, `bill_pttt`, `tong_donhang`, `ten_nguoinhan`, `sdt_nguoinhan`,`diachi_nguoinhan`) 
            VALUES ('$id_nguoidung','$bill_pttt','$Tong_donhang','$ten_nguoinhan','$sdt_nguoinhan','$diachi_nguoinhan')";
    // echo '<pre>';
    // print_r($sql);
    return pdo_execute_return_lastInsertId($sql);
}

function insert_sanpham_donhang($id_nguoidung, $id_sanpham, $anh_sp, $ten_sp, $gia, $soluong, $thanhtien, $id_bill)
{
    $sql = "INSERT INTO `sanpham_donhang`( `id_nguoidung`, `id_sanpham`, `anh_sp`, `ten_sp`, `gia`, `soluong`, `thanhtien`, `id_bill`)
             VALUES ('$id_nguoidung','$id_sanpham','$anh_sp','$ten_sp','$gia','$soluong','$thanhtien','$id_bill')";
    //  echo '<pre>';
    //  print_r($sql);
    return pdo_execute($sql);
}

// function load_one_bill($id)
// {
//     $sql = "select *from donhang where id= $id";
//     $bill = pdo_query_one($sql);
//     return $bill;
// }

// function load_one_cart($id_bill){
//     $sql = "select *from sanpham_donhang where id_bill= " . $id_bill;
//     $billct = pdo_query($sql);
//     // print_r($billct);
//     return $billct;
// }
// function load_one_bill($id_bill){
//     $sql="SELECT *,donhang.id AS id_bill
//     FROM donhang , sanpham_donhang
//     WHERE donhang.id=sanpham_donhang.id_bill";
//     $bill=pdo_query_one($sql);
//     return $bill;
// }

// function load_bill(){
//     $sql="SELECT *,donhang.id AS id_bill
//     FROM donhang , sanpham_donhang
//     WHERE donhang.id=sanpham_donhang.id_bill";
//     $bill_ct=pdo_query($sql);
//     return $bill_ct;
// }

function load_one($id_bill)
{
    $sql = "SELECT * FROM sanpham_donhang where id_bill=$id_bill";
    $bill = pdo_query($sql);
    return $bill;
}

function thongtin($id_bill)
{
    $sql = "SELECT * FROM donhang where id=$id_bill";
    $thongtin = pdo_query_one($sql);
    return $thongtin;
}

function bill($id_nguoidung)
{
    $sql = "SELECT * FROM donhang WHERE id_nguoidung =$id_nguoidung ORDER BY id DESC";
    // echo $sql;
    $bill = pdo_query($sql);
    return $bill;
}

function ct_don_sp($id)
{
    $sql = "SELECT * FROM sanpham_donhang where id_bill=$id";
    $ctbill = pdo_query($sql);
    return $ctbill;
}

function thongtin_dh($id_bill)
{
    $sql = "SELECT * FROM donhang where id=$id_bill";
    $thongtin = pdo_query($sql);
    return $thongtin;
}


