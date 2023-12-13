<?php include 'header.html'; ?>

<div class="container">
    <h1>Quản lý khuyến mại</h1>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="addMaKhuyenMai.php?makhuyenmai=<?php echo $makhuyenmai ?>&giam=<?php echo $giam ?>&ngaybatdau=<?php echo $ngaybatdau ?>&ngayketthuc=<?php echo $ngayketthuc ?>">Thêm mã khuyến mại</a></li>
                <li class="active"><a href="viewMaKhuyenMai.php">Xem danh sách mã khuyến mại</a></li>


            </ul>
        </div>
    </nav>



    <table class="table table-striped">
        <thead class="thead-style">
            <tr>

                <th>Mã khuyến mại</th>
                <th>Giảm (%)</th>
                <th>Ngày bắt đầu</th>
                <th>Ngày kết thúc</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>

            <?php

            //ket noi csdl
            require_once '../../../php/connect.php';


            $view_sql1 = "SELECT * FROM thongtinkhuyenmai";

            $result1 = mysqli_query($conn, $view_sql1);


            while ($r1 = mysqli_fetch_assoc($result1)) {
            ?>

                <tr>

                    <td><?php echo $r1['makhuyenmai'] ?></td>
                    <td><?php echo $r1['giam'] ?></td>
                    <td><?php echo $r1['ngaybatdau'] ?></td>
                    <td><?php echo $r1['ngayketthuc'] ?></td>
                    
                    <td><a href="viewChiTietSanPham.php?sid=<?php echo $r1['id'] ?>">Chi tiết</a>
                        <a href="editSanPham.php?sid=<?php echo $r1['id'] ?>" class="btn btn-info">Sửa</a>

                        <a onclick="return confirm('Sản phẩm này chỉ có thể xóa khi chưa nhập kho?')" href="../../BE/quanLyKhoHang/deleteSanPham.php?sid=<?php echo $r1['id'] ?>" class="btn btn-danger">Xóa</a>

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
