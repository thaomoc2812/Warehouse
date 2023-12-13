<?php include 'header.html'; ?>

<div class="container">
    <h1>Quản lý lô hàng</h1>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"><a href="addLoHang.php">Thêm lô hàng</a></li>
                <li><a href="viewLoHang.php">Xem danh sách lô hàng</a></li>
                <li><a href="nhapKho.php">Nhập kho</a></li>


            </ul>
        </div>
    </nav>

    <form action="../../BE/quanLyKhoHang/addLoHang.php" method="post">

        <div class="form-group">
            <label for = "tennhacungcap">Nhà cung cấp:</label> <br>

            <select id="tennhacungcap" name="tennhacungcap">
                <?php //ket noi csdl

                require_once '../../../php/connect.php';


                $view_sql1 = "SELECT * FROM nhacungcap WHERE trangthai = 1";
                $result1 = mysqli_query($conn, $view_sql1);
                while ($r1 = mysqli_fetch_assoc($result1)) {
                ?>
                    <option><?php echo  $r1['tennhacungcap'] ?> </option><br><?php
                                                                        } ?>
            </select><br>
        </div>
        <div class="form-group">
            <label for="malohang">Mã lô hàng</label>
            <input type="text" id="malohang" class="form-control" name="malohang">
        </div>

        <div class="form-group">
            <label for="ngaynhaphang">Ngày nhập hàng</label>
            <input type="date" id="ngaynhaphang" class="form-control" name="ngaynhaphang" value = "<?php echo date("Y-m-d");?>" readonly>
        </div>
        <div class="form-group">
            <label for="tennhanvien">Nhân viên</label>
            <input type="text" id="tennhanvien" class="form-control" name="tennhanvien" value = "admin" readonly >
        </div>

        <button type="submit" class="btn btn-primary">Thêm</button>

    </form>
</div>



</body>

</html>