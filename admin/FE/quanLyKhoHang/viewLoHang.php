<?php include 'header.html'; ?>

<div class="container">
    <h1>Quản lý lô hàng</h1>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="addLoHang.php">Thêm lô hàng</a></li>
                <li class="active"><a href="viewLoHang.php">Xem danh sách lô hàng</a></li>
                <li><a href="nhapKho.php">Nhập kho</a></li>


            </ul>
        </div>
    </nav>

    <table class="table table-striped">
        <thead class="thead-style">
            <tr>

                <th>Mã lô hàng</th>
                <th>Ngày nhập hàng</th>
                <th>Tên nhà cung cấp</th>
                <th>Nhân viên</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>

            <?php

            //ket noi csdl
            require_once '../../../php/connect.php';


            $view_sql = "SELECT * FROM lohang";

            $result = mysqli_query($conn, $view_sql);


            while ($r = mysqli_fetch_assoc($result)) {
            ?>

                <tr>

                    <td><?php echo $r['malohang'] ?></td>
                    <td><?php echo $r['ngaynhaphang'] ?></td>
                    <td><?php
                        $idnhacungcap = $r['idnhacungcap'];
                        $search_sql1 = "SELECT * FROM nhacungcap WHERE id = $idnhacungcap";
                        $result1 = mysqli_query($conn, $search_sql1);
                        if ($r1 = mysqli_fetch_assoc($result1))
                            echo $r1['tennhacungcap'] ?></td>

                    <td><?php 
                    $idnhanvien = $r['idnhanvien'];
                    if($idnhanvien == 0) echo "admin";
                    else {
                        $search_sql2 = "SELECT * FROM nhanvien WHERE id = $idnhanvien";
                        $result2 = mysqli_query($conn, $search_sql2);
                        if ($r2 = mysqli_fetch_assoc($result2))
                            echo $r2['hoten'] ;
                    }
                   ?></td>
                    <td><a href="viewChiTietLoHang.php?sid=<?php echo $r['id'] ?>">Chi tiết</a>
                        <a onclick="return confirm('Bạn có muốn xóa lô hàng này không?')" href="../../BE/quanLyKhoHang/deleteLoHang.php?sid=<?php echo $r['id'] ?>" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>


</div>



<style>
    .thead-style {
        background-color: black;
        color: white;
    }
</style>
</body>

</html>