<?php
//nhan du lieu tu form
$idsoluong = $_POST['idsoluong'];
$soluong = $_POST['soluong'];
$giabanra = $_POST['giabanra'];
$idsanpham = $_POST['idsanpham'];
require_once '../../../php/connect.php';

$update_sql = "UPDATE soluong SET soluong = $soluong, giabanra = $giabanra  WHERE id = $idsoluong";


//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong

    header("Location: ../../FE/quanLyKhoHang/editSanPham.php?sid=$idsanpham");

};

?>