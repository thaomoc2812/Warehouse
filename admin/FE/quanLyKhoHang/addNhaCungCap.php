<?php include 'header.html'; ?>

<div class="container">
    <h1>Quản lý nhà cung cấp</h1>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active"><a href="addNhaCungCap.php">Thêm nhà cung cấp</a></li>
                <li><a href="viewNhaCungCap.php">Xem danh sách nhà cung cấp</a></li>


            </ul>
        </div>
    </nav>

    <form action="../../BE/quanLyKhoHang/addNhaCungCap.php" method="post">

        
        <div class="form-group">
            <label for="manhacungcap" >Mã nhà cung cấp</label>
            <input type="text" id="manhacungcap" class="form-control" name="manhacungcap">
        </div>

        <div class="form-group">
            <label for="tennhacungcap" >Tên nhà cung cấp</label>
            <input type="text" id="tennhacungcap" class="form-control" name="tennhacungcap">
        </div>

        <div class="form-group">
            <label for="sdt" >Số điện thoại liên hệ</label>
            <input type="text" id="sdt" class="form-control" name="sdt">
        </div>
        <div class="form-group">
            <label for="diachi" >Địa chỉ</label>
            <input type="text" id="diachi" class="form-control" name="diachi">
        </div>


        <button type="submit" class="btn btn-primary">Thêm</button>

    </form>
</div>



</body>

</html>