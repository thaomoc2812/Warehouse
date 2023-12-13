<?php

$nvid = $_GET['sid'];
$idlohang = $_GET['idlohang'];
$masanpham = $_GET['masanpham'];
//ket noi csdl
require_once '../../../php/connect.php';




$delete_sql = "DELETE FROM thongtinlohang WHERE id = $nvid";



if (mysqli_query($conn, $delete_sql)) {
        header("Location: ../../FE/quanLyKhoHang/nhapKhoSanPhamThem.php?idlohang=$idlohang&masanpham=$masanpham");
};
