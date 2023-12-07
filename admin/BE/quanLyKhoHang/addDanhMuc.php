<?php
//nhan du lieu tu form

$loaisanpham = $_POST['loaisanpham'];
$tendanhmuc = $_POST['tenDanhMuc'];


//ket noi csdl
require_once '../../../php/connect.php';

if (!$loaisanpham || !$tendanhmuc) {
    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

$search = "SELECT * FROM danhmucsanpham WHERE (tendanhmuc = '$tendanhmuc') ";

$query = mysqli_query($conn, $search);
$q = 0;
while ($r0 = mysqli_fetch_assoc($query)) {
    if ($r0['tendanhmuc'] == $tendanhmuc) {
        $q = 1;
    }
};
if ($q == 1) {
    echo "Tên danh mục này đã tồn tại <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
$search_sql = "SELECT * FROM phanloaisanpham WHERE loaisanpham = '$loaisanpham'";
$result = mysqli_query($conn, $search_sql);
if ($r = mysqli_fetch_assoc($result))
    $idloaisanpham = $r['id'];



$addsql = "INSERT INTO danhmucsanpham
(tendanhmuc,idphanloai) VALUES ('$tendanhmuc',$idloaisanpham)";



//thuc thi cau lenh them
if (mysqli_query($conn, $addsql)) {
    header("Location: ../../FE/quanLyKhoHang/viewDanhMuc.php");
};
