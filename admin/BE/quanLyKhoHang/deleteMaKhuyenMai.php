<?php
//nhan du lieu tu form

$makhuyenmai = $_GET['makhuyenmai'];
require_once '../../../php/connect.php';



$delete_sql1 = "DELETE FROM khuyenmai WHERE makhuyenmai = '$makhuyenmai'";
$delete_sql2 = "DELETE FROM thongtinkhuyenmai WHERE makhuyenmai = '$makhuyenmai'";
if (mysqli_query($conn, $delete_sql1) && mysqli_query($conn, $delete_sql2))
{
    header("Location: ../../FE/quanLyKhoHang/quanLyKhuyenMai.php");
};
?>