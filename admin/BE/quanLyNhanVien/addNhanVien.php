<?php
//nhan du lieu tu form

$hoten = $_POST['hoten'];
$sdt = $_POST['sdt'];
$diachi = $_POST['diachi'];
$vitri = $_POST['vitri'];

//ket noi csdl
require_once '../../../php/connect.php';

if (!$hoten || !$diachi || !$sdt || !$vitri)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    if (!preg_match("/^[0-9]{10}$/", $sdt)) {
        echo "Số điện thoại không hợp lệ. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    $search_sql = "SELECT * FROM nhomquyen WHERE tennhomquyen = '$vitri'";
    $result = mysqli_query($conn, $search_sql);
    if($r = mysqli_fetch_assoc($result))
    $vt = $r['id'];
    


$addsql = "INSERT INTO nhanvien
(hoten,sdt, diachi, vitri) VALUES ('$hoten','$sdt','$diachi',$vt)";



//thuc thi cau lenh them
if(mysqli_query($conn, $addsql)){

    header("Location: ../../FE/quanLyNhanVien/viewNhanVien.php");

};



?>