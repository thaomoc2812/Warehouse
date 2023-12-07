<?php include 'header.html'; ?>
                
                <div class="container">
                  <h1>Quản lý phân quyền</h1>

                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="addNhomQuyen.php">Thêm Nhóm quyền</a></li>
                        <li><a href="viewNhomQuyen.php">Xem danh sách nhóm quyền</a></li>
             
                        
                      </ul>
                    </div>
                  </nav>
            
                  <form action="../../BE/quanLyNhanVien/addNhomQuyen.php" method="post">
          
                   
                      <div class="form-group">
                          <label>Tên nhóm quyền</label>
                          <input type="text" id ="tenNhomQuyen" class="form-control" name="tenNhomQuyen">
                      </div>
                      <div class="form-group">
                        <label>Các chức năng</label><br>
                        <input type="checkbox" id="boxThemSanPham" name="boxThemSanPham"> Thêm sản phẩm <br>
                        <input type="checkbox" id="boxTimKiemSanPham" name="boxTimKiemSanPham"> Tìm kiếm sản phẩm <br>
                        <input type="checkbox" id="boxXemDanhSachSanPham" name="boxXemDanhSachSanPham"> Xem danh sách sản phẩm <br>
                        <input type="checkbox" id="boxXoaSuaSanPham" name="boxXoaSuaSanPham"> Xóa/sửa sản phẩm <br>
                        <input type="checkbox" id="boxQuanLyDonHang" name="boxQuanLyDonHang"> Quản lý đơn hàng <br>
                        <input type="checkbox" id="boxQuanLyXacNhanDonHang" name="boxQuanLyXacNhanDonHang"> Quản lý xác nhận đơn hàng <br>
                        <input type="checkbox" id="boxQuanLyDonHangBiHoanLai" name="boxQuanLyDonHangBiHoanLai"> Quản lý đơn hàng bị hoàn lại<br>
                        <input type="checkbox" id="boxQuanLyKhachHang" name="boxQuanLyKhachHang"> Quản lý khách hàng <br>
                        <input type="checkbox" id="boxQuanLySoLuongTonKho" name="boxQuanLySoLuongTonKho"> Quản lý số lượng tồn kho <br>
                        <input type="checkbox" id="boxQuanLyLoHangSanPham" name="boxQuanLyLoHangSanPham"> Quản lý lô hàng sản phẩm <br>
                        <input type="checkbox" id="boxPhanLoaiSanPham" name="boxPhanLoaiSanPham"> Phân loại sản phẩm <br>
                        <input type="checkbox" id="boxQuanLyNhaCungCap" name="boxQuanLyNhaCungCap"> Quản lý nhà cung cấp <br>
                    </div>
                  
          
                      <button type="submit" class="btn btn-primary">Thêm</button>
          
                  </form>
              </div>
          


</body>
</html>
   