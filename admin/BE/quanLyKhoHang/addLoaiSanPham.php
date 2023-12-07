<?php
//nhan du lieu tu form

$tenloaisanpham = $_POST['tenLoaiSanPham'];


//ket noi csdl
require_once '../../../php/connect.php';

if (!$tenloaisanpham) {
    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

$search = "SELECT * FROM phanloaisanpham WHERE (loaisanpham = '$tenloaisanpham') ";

$query = mysqli_query($conn, $search);
$q = 0;
while ($r0 = mysqli_fetch_assoc($query)) {
    if ($r0['loaisanpham'] == $tenloaisanpham) {
        $q = 1;
    }
};
if ($q == 1) {
    echo "Loại sản phẩm này đã tồn tại <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
$addsql = "INSERT INTO phanloaisanpham
(loaisanpham) VALUES ('$tenloaisanpham')";



//thuc thi cau lenh them
if (mysqli_query($conn, $addsql)) {
    header("Location: ../../FE/quanLyKhoHang/viewLoaiSanPham.php");
};
