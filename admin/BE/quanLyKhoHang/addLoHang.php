<?php
//nhan du lieu tu form

$tennhacungcap = $_POST['tennhacungcap'];
$malohang = $_POST['malohang'];
$ngaynhaphang = $_POST['ngaynhaphang'];
$tennhanvien= $_POST['tennhanvien'];


//ket noi csdl
require_once '../../../php/connect.php';

if (!$tennhacungcap || !$malohang || !$ngaynhaphang) {
    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

$search = "SELECT * FROM lohang WHERE (malohang = '$malohang') ";

$query = mysqli_query($conn, $search);
$q = 0;
while ($r0 = mysqli_fetch_assoc($query)) {
    if ($r0['malohang'] == $malohang) {
        $q = 1;
    }
};
if ($q == 1) {
    echo "Mã lô hàng này đã tồn tại <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
$search_sql = "SELECT * FROM nhacungcap WHERE tennhacungcap = '$tennhacungcap'";
$result = mysqli_query($conn, $search_sql);
if ($r = mysqli_fetch_assoc($result))
    $idnhacungcap = $r['id'];
if($tennhanvien == 'admin')
{
$addsql = "INSERT INTO lohang
(malohang,ngaynhaphang, idnhacungcap) VALUES ('$malohang','$ngaynhaphang', $idnhacungcap)";
}


//thuc thi cau lenh them
if (mysqli_query($conn, $addsql)) {
   header("Location: ../../FE/quanLyKhoHang/viewLoHang.php");
};
