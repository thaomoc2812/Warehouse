<?php

$nvid = $_GET['sid'];
//ket noi csdl
require_once '../../../php/connect.php';

$delete_sql = "DELETE FROM phanloaisanpham WHERE id = $nvid";

if (mysqli_query($conn, $delete_sql))
{
    header("Location: ../../FE/quanLyKhoHang/viewLoaiSanPham.php");
};
?>