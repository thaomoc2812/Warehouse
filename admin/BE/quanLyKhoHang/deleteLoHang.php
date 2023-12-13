<?php

$nvid = $_GET['sid'];
//ket noi csdl
require_once '../../../php/connect.php';


$search_sql = "SELECT * FROM thongtinlohang WHERE idlohang = $nvid";
$result = mysqli_query($conn, $search_sql);
if($r = mysqli_fetch_assoc($result))
{
    echo "Không thể xóa lô hàng này vì chứa sản phẩm. Xóa sản phẩm và thử lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

$delete_sql = "DELETE FROM lohang WHERE id = $nvid";



if (mysqli_query($conn, $delete_sql))
{
    header("Location: ../../FE/quanLyKhoHang/viewLoHang.php");
};
?>