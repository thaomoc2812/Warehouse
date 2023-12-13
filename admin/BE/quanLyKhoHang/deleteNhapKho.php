<?php

$idlohang = $_GET['idlohang'];
$masanpham = $_GET['masanpham'];
//ket noi csdl
require_once '../../../php/connect.php';




$delete_sql = "DELETE FROM thongtinlohang WHERE idlohang = $idlohang AND masanpham = '$masanpham'";


if (mysqli_query($conn, $delete_sql))
{
    
    header("Location: ../../FE/quanLyKhoHang/nhapKho.php");
};
?>