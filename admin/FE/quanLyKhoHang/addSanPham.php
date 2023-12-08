<?php include 'header.html'; ?>

<div class="container">
    <h1>Thêm sản phẩm</h1>
    <form action="../../BE/quanLyKhoHang/addSanPham.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label>Danh mục sản phẩm:</label> </br>
            <select id="loaisanpham" name="loaisanpham" style="width: 30%; height: 30px;">
                <?php //ket noi csdl

                require_once '../../../php/connect.php';


                $view_sql1 = "SELECT * FROM phanloaisanpham";
                $result1 = mysqli_query($conn, $view_sql1);
                while ($r1 = mysqli_fetch_assoc($result1)) {
                ?>

                    <option style="pointer-events: none;background-color: gray;"><?php echo  $r1['loaisanpham'] ?><br>


                        <?php
                        $loaisanpham = $r1['loaisanpham'];
                        $search_sql = "SELECT * FROM phanloaisanpham WHERE loaisanpham = '$loaisanpham'";
                        $result = mysqli_query($conn, $search_sql);
                        if ($r = mysqli_fetch_assoc($result))
                            $idloaisanpham = $r['id'];
                        $view_sql2 = "SELECT * FROM danhmucsanpham WHERE idphanloai = $idloaisanpham";
                        $result2 = mysqli_query($conn, $view_sql2);
                        while ($r2 = mysqli_fetch_assoc($result2)) {
                        ?>
                    <option><?php echo  $r2['tendanhmuc'] ?> </option><br>
                <?php
                        } ?>

                </option>

                <br><?php
                } ?>
            </option>

            </select><br>
        </div>

        <div class="form-group">
            <label for="masanpham">Mã sản phẩm</label>
            <input type="text" id="masanpham" class="form-control" name="masanpham">
        </div>
        <div class="form-group">
            <label for="tensanpham">Tên sản phẩm</label>
            <input type="text" id="tensanpham" name="tensanpham" class="form-control">
        </div>
            
        

        <div class="form-group">
            <label for="anhsanphamchinh">Ảnh sản phẩm</label>
            <input type="file" id="anhsanphamchinh" name="anhsanphamchinh" class="form-control">
        </div>

        <div class="form-group">
            <label for="gianhapvao">Giá nhập vào</label>
            <input type="int" name="gianhapvao" id="gianhapvao" class="form-control">
        </div>

        <div class="form-group">
            <label for="giabansi">Giá bán sỉ</label>
            <input type="int" id="giabansi" name="giabansi" class="form-control">
        </div>

        <div class="form-group">
            <label for="giabanle">Giá bán lẻ</label>
            <input type="int" id="giabanle" name="giabanle" class="form-control">
        </div>
        <div class="form-group">
            <label for="soluong">Số lượng</label>
            <input type="int" id="soluong" name="soluong" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Thêm</button>

    </form>
</div>
</body>

</html>