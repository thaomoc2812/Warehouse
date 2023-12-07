<?php include 'header.html'; ?>

<div class="container">
  <h1>Phân loại sản phẩm</h1>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="active"><a href="addLoaiSanPham.php">Thêm loại sản phẩm</a></li>
        <li><a href="viewLoaiSanPham.php">Xem danh sách loại sản phẩm</a></li>


      </ul>
    </div>
  </nav>

  <form action="../../BE/quanLyKhoHang/addLoaiSanPham.php" method="post">


    <div class="form-group">
      <label>Loại sản phẩm</label>
      <input type="text" id="tenLoaiSanPham" class="form-control" name="tenLoaiSanPham">
    </div>



    <button type="submit" class="btn btn-primary">Thêm</button>

  </form>
</div>



</body>

</html>