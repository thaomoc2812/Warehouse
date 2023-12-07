<?php


//nhan du lieu tu form
$sdt = $_POST['sdt'];
$matkhau = $_POST['matkhau'];


//ket noi csdl
require_once 'connect.php';

$red=0;

//----------------admin--------------------
if ($sdt=='admin' && $matkhau=='admin123') {
    $red = 1;
    header("Location: ../admin/home.php");
}


//---------------------staff-------------------------
$search_nhanvien = "SELECT * FROM nhanvien WHERE (sdt = '$sdt')";

$query = mysqli_query($conn, $search_nhanvien);


while ($r = mysqli_fetch_assoc($query))
{
    if  ($sdt == $r['sdt'] && $matkhau == $r['matkhau'] )
    {
        $red = 1;
        header("Location: ../html/staff/home.html?user=$sdt");
    }
    
};


//---------------------customer-------------------

// $search_khach = "SELECT * FROM khachhang WHERE (sdt = '$sdt')";

// $query = mysqli_query($conn, $search_khach);


// while ($r = mysqli_fetch_assoc($query))
// {
//     if  ($sdt == $r['sdt'] && $matkhau == $r['matkhau'] )
//     {
//         $red = 1;
//         header("Location: customer/home.php?user=$sdt");
//     }
    
// };



//-----------------Error------------------------------
if($red == 0)
{
    header("Location: ../html/thongBaoLoiDangNhap.html");
}


 
    ?>
