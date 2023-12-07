<?php
//nhan du lieu tu form

$tensanpham = $_POST['tensanpham'];
$masanpham = $_POST['masanpham'];
$gianhapvao = $_POST['gianhapvao'];
$giabanle = $_POST['giabanle'];
$giabansi = $_POST['giabansi'];
$soluong = $_POST['soluong'];
$file = $_FILES['anhsanpham'];


$file_name = $file['name'];

move_uploaded_file($file['tmp_name'],'../uploads/'.$file_name);


//ket noi csdl
require_once '../connect.php';

if (!$tensanpham || !$masanpham || !$giabanle || !$giabansi || !$gianhapvao || !$soluong ||!$file_name)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    $search = "SELECT * FROM sanpham WHERE (masanpham = '$masanpham') ";

    $query = mysqli_query($conn, $search);
    $q=0;
    while ($r0 = mysqli_fetch_assoc($query))
    {
        if($r0['tensanpham'] != $tensanpham)
        {
            $q = 1;
        }
        
    };
    if($q == 1)
    {
        echo "Mã sản phẩm đã tồn tại <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
$addsql = "INSERT INTO sanpham
(tensanpham,masanpham, gianhapvao, giabanle, giabansi, soluong, anhsanpham) VALUES ('$tensanpham','$masanpham',$gianhapvao,$giabanle,$giabansi,$soluong,'$file_name')";



//thuc thi cau lenh them
if(mysqli_query($conn, $addsql)){

    header("Location: viewSanPham.php");

};



?>