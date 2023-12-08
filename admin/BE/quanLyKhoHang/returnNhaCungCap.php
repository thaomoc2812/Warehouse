<?php

$nvid = $_GET['sid'];
//ket noi csdl
require_once '../../../php/connect.php';

$update_sql = "UPDATE nhacungcap SET trangthai = 1 WHERE id = $nvid";

if (mysqli_query($conn, $update_sql))
{
    header("Location: ../../FE/quanLyKhoHang/viewNhaCungCap.php");
};
?>