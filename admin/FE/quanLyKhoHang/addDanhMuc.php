<?php include 'header.html'; ?>

<div class="container">
    <h1>Quản lý danh mục sản phẩm</h1>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"><a href="addDanhMuc.php">Thêm danh mục</a></li>
                <li><a href="viewDanhMuc.php">Xem danh sách danh mục</a></li>


            </ul>
        </div>
    </nav>

    <form action="../../BE/quanLyKhoHang/addDanhMuc.php" method="post">

        <div class="form-group">
            <label>Loại sản phẩm:</label> </br>

            <select id="loaisanpham" name="loaisanpham" style = "width: 30%; height: 30px;">
                <?php //ket noi csdl

                require_once '../../../php/connect.php';


                $view_sql1 = "SELECT * FROM phanloaisanpham";
                $result1 = mysqli_query($conn, $view_sql1);
                while ($r1 = mysqli_fetch_assoc($result1)) {
                ?>
                    <option><?php echo  $r1['loaisanpham'] ?> </option><br><?php
                                                                        } ?>
            </select><br>
        </div>
        <div class="form-group">
            <label>Tên danh mục</label>
            <input type="text" id="tenDanhMuc" class="form-control" name="tenDanhMuc">
        </div>



        <button type="submit" class="btn btn-primary">Thêm</button>

    </form>
</div>



</body>

</html>