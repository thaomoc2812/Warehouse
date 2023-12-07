<?php

$quyenTruyCapid = $_GET['idquyentruycap'];

//ket noi csdl
require_once '../../../php/connect.php';

$delete_sql = "DELETE FROM phanquyen 
WHERE idquyentruycap = $quyenTruyCapid";

if (mysqli_query($conn, $delete_sql))
{
    header("Location: ../../FE/quanLyNhanVien/viewNhomQuyen.php");
};
?>