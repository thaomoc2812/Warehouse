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

    $search = "SELECT * FROM nhanvien WHERE (sdt = '$sdt') ";

    $query = mysqli_query($conn, $search);
    $q=0;
    while ($r0 = mysqli_fetch_assoc($query))
    {
        if($r0['sdt'] == $sdt)
        {
            $q = 1;
        }
        
    };
    if($q == 1)
    {
        echo "Số điện thoại đã tồn tại <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    
    $search_sql = "SELECT * FROM nhomquyen WHERE tennhomquyen = '$vitri'";
    $result = mysqli_query($conn, $search_sql);
    if($r = mysqli_fetch_assoc($result))
    $vt = $r['id'];
    


$addsql = "INSERT INTO nhanvien
(hoten,sdt, diachi, vitri, trangthai) VALUES ('$hoten','$sdt','$diachi',$vt,1)";



//thuc thi cau lenh them
if(mysqli_query($conn, $addsql)){

    header("Location: ../../FE/quanLyNhanVien/viewNhanVien.php");

};



?>