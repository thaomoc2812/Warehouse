<?php
//nhan du lieu tu form
$link = $_GET['link'];
$makhuyenmai = $_GET['makhuyenmai'];
$giam = $_GET['giam'];
$ngaybatdau = $_GET['ngaybatdau'];
$ngayketthuc = $_GET['ngayketthuc'];
$key1 = $_POST['key1'];
$key2="";
$key3="";

//ket noi csdl
require_once '../../../php/connect.php';
function convertToNonAccent($str)
{
    $str = iconv('UTF-8', 'ASCII//IGNORE', $str);
    $str = preg_replace('/[^a-zA-Z0-9]/', '', $str); // Loại bỏ các ký tự không phải chữ cái hoặc số
    return $str;
}

$search_sql = "SELECT * FROM thongtinkhuyenmai WHERE makhuyenmai = '$makhuyenmai'";
$result = mysqli_query($conn, $search_sql);
if ($r = mysqli_fetch_assoc($result))
    $idthongtinkhuyenmai = $r['id'];
// Sử dụng hàm

$chuoiKhongDau = convertToNonAccent($key1);
if($link == "addMaKhuyenMai")
header("Location: ../../FE/quanLyKhoHang/addMaKhuyenMai.php?makhuyenmai=$makhuyenmai&giam=$giam&ngaybatdau=$ngaybatdau&ngayketthuc=$ngayketthuc&key1=$chuoiKhongDau&key2=$key2&key3=$key3");

if ( $link == "viewChiTietMaKhuyenMai")
{

    header("Location: ../../FE/quanLyKhoHang/viewChiTietMaKhuyenMai.php?sid=$idthongtinkhuyenmai&key=$chuoiKhongDau");
};

if ( $link == "viewChiTietMaKhuyenMaiDangChay")
{

    header("Location: ../../FE/quanLyKhoHang/viewChiTietMaKhuyenMai.php?sid=$idthongtinkhuyenmai&key=$chuoiKhongDau");
};
?>