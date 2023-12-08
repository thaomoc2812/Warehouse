<?php
//nhan du lieu tu form
$tendanhmuc = $_POST['tendanhmuc'];
$id = $_POST['sid'];
//ket noi csdl
require_once '../../../php/connect.php';


$update_sql = "UPDATE danhmucsanpham SET tendanhmuc = '$tendanhmuc' WHERE id = $id";


//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong

    header("Location: ../../FE/quanLyKhoHang/viewDanhMuc.php");

};



?>