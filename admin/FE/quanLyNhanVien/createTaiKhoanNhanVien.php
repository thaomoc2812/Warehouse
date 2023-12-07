<?php include 'header.html'; ?>

      <div class="container">
        <h1>Tạo tài khoản nhân viên</h1>
        <form action="../../BE/quanLyNhanVien/createTaiKhoanNhanVien.php" method="post">
            <div class="form-group">
                <label for="sdt">Số điện thoại</label>
                <input type="text" id ="sdt" class="form-control" name="sdt">
            </div>

    
            <div class="form-group">
              <label for="matkhau">Mật khẩu</label>
              <input type="text" id="matkhau" name="matkhau" class="form-control">
          </div>

            <button type="submit" class="btn btn-primary">Tạo</button>

        </form>
    </div>


</body>
</html>
   