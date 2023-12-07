<?php include 'header.html'; ?>

  <div class="container">
    <h1>Thêm sản phẩm</h1>
    <form action="../../BE/quanLyKhoHang/addSanPham.php" method="post" enctype="multipart/form-data">

     
        <div class="form-group">
            <label for="masanpham">Mã sản phẩm</label>
            <input type="text" id ="masanpham" class="form-control" name="masanpham">
        </div>
        <div class="form-group">
          <label for="tensanpham">Tên sản phẩm</label>
          <input type="text" id="tensanpham" name="tensanpham" class="form-control">
      </div>


      <div class="form-group">
        <label for="anhsanpham">Ảnh sản phẩm</label>
        <input type="file" id="anhsanpham" name="anhsanpham" class="form-control">
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
   