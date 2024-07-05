<?php
session_start();
$id=$_GET['id'];
$quanttity=$_GET['quantity'];
$_SESSION['mycart'][$id]['5']=$quanttity;
$tongtien=0;
$TONG=$quanttity*$_SESSION['mycart'][$id]['3'];
foreach($_SESSION['mycart'] as $key=>$cart){
    $tong=$cart['5']*$cart['3'];
    $tongtien+=$tong;
}
$data=[];
$data['tongtien']=$TONG;
$data['thanhtien']=$tongtien;
echo json_encode($data);
?>