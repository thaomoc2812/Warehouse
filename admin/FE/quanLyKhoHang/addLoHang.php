<?php include 'header.html'; ?>

<div class="container">
    <h1>Quản lý lô hàng</h1>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"><a href="addLoHang.php">Thêm lô hàng</a></li>
                <li><a href="viewLoHang.php">Xem danh sách lô hàng</a></li>


            </ul>
        </div>
    </nav>

    <form action="../../BE/quanLyKhoHang/addLoHang.php" method="post">

        <div class="form-group">
            <label for = "tennhacungcap">Nhà cung cấp:</label> <br>

            <select id="tennhacungcap" name="tennhacungcap">
                <?php //ket noi csdl

                require_once '../../../php/connect.php';


                $view_sql1 = "SELECT * FROM nhacungcap";
                $result1 = mysqli_query($conn, $view_sql1);
                while ($r1 = mysqli_fetch_assoc($result1)) {
                ?>
                    <option><?php echo  $r1['tennhacungcap'] ?> </option><br><?php
                                                                        } ?>
            </select><br>
        </div>
        <div class="form-group">
            <label for="manhacungcap">Mã lô hàng</label>
            <input type="text" id="manhacungcap" class="form-control" name="manhacungcap">
        </div>

        <div class="form-group">
            <label for="soluong">Số lượng</label>
            <input type="int" id="soluong" class="form-control" name="soluong">
        </div>

        <div class="form-group">
            <label for="gianhapvao">Giá nhập vào</label>
            <input type="int" id="gianhapvao" class="form-control" name="gianhapvao">
        </div>
        <div class="form-group">
            <label for="giabanra">Giá bán ra</label>
            <input type="text" id="giabanra" class="form-control" name="giabanra">
        </div>


        <button type="submit" class="btn btn-primary">Thêm</button>

    </form>
</div>



</body>

</html>