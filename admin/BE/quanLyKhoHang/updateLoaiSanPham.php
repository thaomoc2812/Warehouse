<?php
//nhan du lieu tu form
$loaisanpham = $_POST['loaisanpham'];
$id = $_POST['sid'];
//ket noi csdl
require_once '../../../php/connect.php';


$update_sql = "UPDATE phanloaisanpham SET loaisanpham = '$loaisanpham' WHERE id = $id";


//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong

    header("Location: ../../FE/quanLyKhoHang/viewLoaiSanPham.php");

};



?>