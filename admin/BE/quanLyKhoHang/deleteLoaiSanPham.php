<?php

$nvid = $_GET['sid'];
//ket noi csdl
require_once '../../../php/connect.php';
    
$search_sql = "SELECT * FROM danhmucsanpham WHERE idphanloai = $nvid";
$result = mysqli_query($conn, $search_sql);
if($r = mysqli_fetch_assoc($result))
{
    echo "Không thể xóa loại sản phẩm này vì chứa danh mục con. Xóa danh mục con và thử lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}


$delete_sql = "DELETE FROM phanloaisanpham WHERE id = $nvid";

if (mysqli_query($conn, $delete_sql))
{
    header("Location: ../../FE/quanLyKhoHang/viewLoaiSanPham.php");
};
?>