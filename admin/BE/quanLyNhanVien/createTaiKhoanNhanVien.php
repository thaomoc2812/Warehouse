


<?php
//nhan du lieu tu form
$sdt = $_POST['sdt'];
$matkhau = $_POST['matkhau'];


//ket noi csdl
require_once '../../../php/connect.php';



if (!$sdt || !$matkhau)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }


    if (!preg_match("/^[0-9]{10}$/", $sdt)) {
        echo "Số điện thoại không hợp lệ. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

$search_sql = "SELECT * FROM nhanvien WHERE 
(sdt = '$sdt')
";


$result = mysqli_query($conn, $search_sql);
$q=0;


while ($r = mysqli_fetch_assoc($result))
{
    $key = $r['sdt'] ;
    if  ($sdt == $key)
    {
        $q++;
    }


};

if($q == 0)
{
    echo "Chưa có nhân viên này trong danh sách.Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
}

else
{
    $addsql = "UPDATE nhanvien SET matkhau = '$matkhau' WHERE sdt = $sdt";
    if( mysqli_query($conn, $addsql)){
    
        echo "Tạo tài khoản thành công  <a href='javascript: history.go(-1)'>Trở lại</a>";
    
    };
}



 
    ?>


