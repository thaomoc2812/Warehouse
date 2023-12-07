<?php
//nhan du lieu tu form
$tensanpham = $_POST['tensanpham'];
$masanpham = $_POST['masanpham'];
$gianhapvao = $_POST['gianhapvao'];
$giabanle = $_POST['giabanle'];
$giabansi = $_POST['giabansi'];
$soluong = $_POST['soluong'];
$file = $_FILES['anhsanpham'];


$nvid = $_POST['sid'];

//ket noi csdl
require_once '../connect.php';

$search = "SELECT * FROM sanpham WHERE (masanpham = '$masanpham') ";

$query = mysqli_query($conn, $search);
$q=0;
while ($r0 = mysqli_fetch_assoc($query))
{
    if($r0['tensanpham'] != $tensanpham && $r0['id'] != $nvid)
    {
        $q = 1;
    }
    
};
if($q == 1 )
{
    echo "Mã sản phẩm đã tồn tại <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

$file_name = $file['name'];

move_uploaded_file($file['tmp_name'],'../uploads/'.$file_name);

$update_sql = "UPDATE sanpham SET tensanpham = '$tensanpham', masanpham = '$masanpham', anhsanpham = '$file_name', gianhapvao = $gianhapvao,giabansi = $giabansi,giabanle = $giabanle,soluong = $soluong  WHERE id = $nvid";



//thuc thi cau lenh them
if(mysqli_query($conn, $update_sql)){
    //in thong bao thanh cong
    header("Location: viewSanPham.php");

};



?>