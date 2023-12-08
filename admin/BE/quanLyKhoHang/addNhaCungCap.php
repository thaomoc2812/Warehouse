<?php
//nhan du lieu tu form

$tennhacungcap = $_POST['tennhacungcap'];
$manhacungcap = $_POST['manhacungcap'];
$sdt = $_POST['sdt'];
$diachi = $_POST['diachi'];

//ket noi csdl
require_once '../../../php/connect.php';

if (!$tennhacungcap || !$manhacungcap || !$sdt|| !$diachi )
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    $search = "SELECT * FROM nhacungcap WHERE (manhacungcap = '$manhacungcap') ";

    $query = mysqli_query($conn, $search);
    $q=0;
    while ($r0 = mysqli_fetch_assoc($query))
    {
        if($r0['manhacungcap'] == $manhacungcap)
        {
            $q = 1;
        }
        
    };
    
    if($q == 1)
    {
        echo "Mã nhà cung cấp đã tồn tại <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    if (!preg_match("/^[0-9]{10}$/", $sdt)) {
        echo "Số điện thoại không hợp lệ. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

$addsql = "INSERT INTO nhacungcap
(manhacungcap, tennhacungcap, sdt, diachi, trangthai) VALUES ('$manhacungcap','$tennhacungcap','$sdt','$diachi',1)";



//thuc thi cau lenh them
if(mysqli_query($conn, $addsql)){

    header("Location: ../../FE/quanLyKhoHang/viewNhaCungCap.php");

};



?>