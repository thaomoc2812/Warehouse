<?php
//nhan du lieu tu form

$makhuyenmai = $_POST['makhuyenmai'];
$giam = $_POST['giam'];
$ngaybatdau = $_POST['ngaybatdau'];
$ngayketthuc = $_POST['ngayketthuc'];
$key1="";
$key2="";
$key3="";

require_once '../../../php/connect.php';

if (!$makhuyenmai || $makhuyenmai == "."||!$giam || $giam == "."||!$ngaybatdau || $ngaybatdau == "."||!$ngayketthuc || $ngayketthuc == ".") {
    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}
$search = "SELECT * FROM thongtinkhuyenmai WHERE (makhuyenmai = '$makhuyenmai') ";

$query = mysqli_query($conn, $search);
$q = 0;
while ($r0 = mysqli_fetch_assoc($query)) {
    if ($r0['makhuyenmai'] == $makhuyenmai) {
        $q = 1;
    }
};
if ($q == 1) {
    $update_sql = "UPDATE thongtinkhuyenmai SET giam = $giam, ngaybatdau = '$ngaybatdau', ngayketthuc = '$ngayketthuc' WHERE makhuyenmai = '$makhuyenmai'";


//thuc thi cau lenh them
if (mysqli_query($conn, $update_sql)) {
    
    header("Location: ../../FE/quanLyKhoHang/addMaKhuyenMai.php?makhuyenmai=$makhuyenmai&giam=$giam&ngaybatdau=$ngaybatdau&ngayketthuc=$ngayketthuc");
};
}
else{
$addsql = "INSERT INTO thongtinkhuyenmai (makhuyenmai,giam,ngaybatdau,ngayketthuc) VALUES ('$makhuyenmai',$giam,'$ngaybatdau','$ngayketthuc')";

//thuc thi cau lenh them
if (mysqli_query($conn, $addsql)) {
   header("Location: ../../FE/quanLyKhoHang/addMaKhuyenMai.php?makhuyenmai=$makhuyenmai&giam=$giam&ngaybatdau=$ngaybatdau&ngayketthuc=$ngayketthuc&key1=$key1&key2=$key2&key3=$key3");
};
}





