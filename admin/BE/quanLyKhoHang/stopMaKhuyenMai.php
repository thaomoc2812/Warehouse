<?php
//nhan du lieu tu form

$makhuyenmai = $_GET['makhuyenmai'];

//ket noi csdl
require_once '../../../php/connect.php';

$today = date("Y-m-d");
$update_sql = "UPDATE thongtinkhuyenmai SET ngayketthuc = '$today' WHERE makhuyenmai = '$makhuyenmai'";


//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong

    header("Location: ../../FE/quanLyKhoHang/viewMaKhuyenMai.php");

};



?>

