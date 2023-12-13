<?php
//nhan du lieu tu form

$makhuyenmai = $_GET['makhuyenmai'];
$giam = $_GET['giam'];
$ngaybatdau = $_GET['ngaybatdau'];
$ngayketthuc = $_GET['ngayketthuc'];
$idsoluong = $_GET['idsoluong'];
$key1 = $_GET['key1'];
$key2 = $_GET['key2'];
$key3 = $_GET['key3'];


require_once '../../../php/connect.php';



$delete_sql = "DELETE FROM khuyenmai WHERE idsoluong = $idsoluong";



if (mysqli_query($conn, $delete_sql))
{
    header("Location: ../../FE/quanLyKhoHang/addMaKhuyenMai.php?makhuyenmai=$makhuyenmai&giam=$giam&ngaybatdau=$ngaybatdau&ngayketthuc=$ngayketthuc&key1=$key1&key2=$key2&key3=$key3");
};
?>