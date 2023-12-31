<?php

$nvid = $_GET['sid'];

require_once '../connect.php';

$edit_sql = "SELECT * FROM sanpham WHERE id = $nvid";

$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name ="viewport" content="width= device-width,initial-scale=1.0">
        <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <script src="../../../js/script_admin.js"></script>
        <link rel="stylesheet" href="../../../../css/dashMain.css">
        <link rel="stylesheet" href="../../../../css/style2.css">
        <link rel="stylesheet" href="../../../../css/entypo.css">
      
    </head>

    <body class="page-body  page-fade" onload="collapseSidebar()">

      <div class="page-container sidebar-collapsed" id="navbarcollapse">
  
          <div class="sidebar-menu">
  
              <header class="logo-env">
  
                  <!-- logo -->
  
  
                  <!-- logo collapse icon -->
                  <div class="sidebar-collapse" onclick="collapseSidebar()">
                      <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                          <i class="entypo-menu"></i>
                      </a>
                  </div>
              </header>
              <ul id="main-menu" class="">
  
                  <li id="dash"><a href="../../html/admin/home.php"><i class="entypo-gauge"></i><span>Home</span></a></li>
  
                  <!-- <li id="regis"><a href="new_entry.php"><i class="entypo-user-add"></i><span>New Registration</span></a> -->
  
                  <!-- <li id="paymnt"><a href="payments.php"><i class="entypo-star"></i><span>Payments</span></a></li> -->
  
                  <li class="" id="staffhassubopen"><a href="#" onclick="memberExpand(1)"><i class="entypo-users"></i><span>Quản lý nhân viên</span></a>
                    <ul id="staffExpand">
                      <li class="active">
                        <a href="../../html/admin/quanLyNhanVien/createTaiKhoanNhanVien.html"><span>Tạo tài khoản nhân viên</span></a>
                      </li>
                      <li class="active">
                        <a href="../../html/admin/quanLyNhanVien/addNhanVien.html"><span>Thêm nhân viên</span></a>
                      </li>
          
                      <li>
                        <a href="../quanLyNhanVien/viewNhanVien.php"><span>Xem danh sách nhân viên</span></a>
                      </li>
                      <li class="active">
                        <a href="../../html/admin/quanLyNhanVien/searchNhanVien.html"><span>Tìm kiếm nhân viên</span></a>
                      </li>
                    </ul>
                  </li>
          
                  <!-- <li id="health_status"><a href="new_health_status.php"><i class="entypo-user-add"></i><span>Health Status</span></a> -->
          
                  <li class="" id="roomhassubopen"><a href="#" onclick="memberExpand(2)"><i class="entypo-quote"></i><span>Quản lý kho hàng</span></a>
          
                    <ul id="roomExpand">
                      <li class="active">
                        <a href="../../html/admin/quanLyKhoHang/addSanPham.html"><span>Thêm sản phẩm</span></a>
                      </li>
          
                      <li><a href="viewSanPham.php"><span>Xem danh sách sản phẩm</span></a></li>
                      <li><a href="../../html/admin/quanLyKhoHang/searchSanPham.html"><span>Tìm kiếm sản phẩm</span></a></li>
                      <li><a href="viewSanPhamTonKho.php"><span>Sản phẩm tồn kho</span></a></li>
          
                    </ul>
          
                  <li class="" id="devicehassubopen"><a href="#" onclick="memberExpand(3)"><i class="entypo-box"></i><span>Quản lý khách hàng</span></a>
          
                    <ul id="deviceExpand">
                      <!-- <li class="active">
                        <a href="../admin/quanLyTrangThietBi/addTrangThietBi.html"><span>Thêm trang thiết bị</span></a>
                      </li>
          
                      <li>
                        <a href="../../php/quanLyTrangThietBi/viewTrangThietBi.php"><span>Xem danh sách trang thiết bị</span></a>
                      </li>
          
                      <li>
                        <a href="../admin/quanLyTrangThietBi/searchTrangThietBi.html"><span>Tìm kiếm trang thiết bị</span></a>
                      </li> -->
          
                    </ul>
          
                  <li class="" id="packagehassubopen"><a href="#" onclick="memberExpand(4)"><i class="entypo-alert"></i><span>Quản lý đơn hàng</span></a>
          
                    <ul id="packageExpand">
                      <!-- <li class="active">
                        <a href="../admin/quanLyGoiTap/addGoiTap.html"><span>Thêm gói tập</span></a>
                      </li>
          
                      <li>
                        <a href="../../php/quanLyGoiTap/viewGoiTap.php"><span>Xem danh sách gói tập</span></a>
                      </li>
          
                      <li>
                        <a href="../admin/quanLyGoiTap/searchGoiTap.html"><span>Tìm kiếm gói tập</span></a>
                      </li> -->
          
                    </ul>
          
                  </li>
          
                  <li class="" id="memberhassubopen"><a href="#" onclick="memberExpand(5)"><i class="entypo-star"></i><span>Quản lý doanh thu</span></a>
          
                    <ul id="memExpand">
                      <!-- <li class="active">
                        <a href="../admin/quanLyHoiVien/addHoiVien.html"><span>Thêm hội viên</span></a>
                      </li>
          
                      <li>
                        <a href="../../php/quanLyHoiVien/viewHoiVien.php"><span>Xem danh sách hội viên</span></a>
                      </li>
          
                      <li>
                        <a href="../admin/quanLyHoiVien/searchHoiVien.html"><span>Tìm kiếm hội viên</span></a>
                      </li>
          
                      <li>
                        <a href="../../php/quanLyHoiVien/viewDangKy.php"><span>Duyệt đăng ký gói tập</span></a>
                      </li>
          
                      <li>
                        <a href="../../php/quanLyHoiVien/viewPhanHoi.php"><span>Xem phản hồi</span></a>
                      </li> -->
          
                    </ul>
          
                  </li>
          
                 
                  <li><a href="../../html/dangNhap.html"><i class="entypo-logout"></i><span>Đăng xuất</span></a></li>
          
                </ul>
              </div>
          
              <div class="main-content">
          
                <div class="row">
          
                  <!-- Profile Info and Notifications -->
                  <div class="col-md-6 col-sm-8 clearfix">
          
                  </div>
          
          
                  <!-- Raw Links -->
                  <div class="col-md-6 col-sm-4 clearfix hidden-xs">
          
                    <ul class="list-inline links-list pull-right">
          
                      <li>
                        <a href="../../../html/dangNhap.html">
                          Log Out <i class="entypo-logout right"></i>
                        </a>
                      </li>
                    </ul>
          
                  </div>
          
                </div>

<body>
<div class="container">
        <h1>Sửa thông tin sản phẩm</h1>
        <form action="updateSanPham.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="sid" value="<?php echo $row['id']?>" id ="">
            <div class="form-group">
            <label for="masanpham">Mã sản phẩm</label>
            <input type="text" id ="masanpham" class="form-control" name="masanpham" value="<?php echo $row['masanpham']?>">
        </div>
        <div class="form-group">
          <label for="tensanpham">Tên sản phẩm</label>
          <input type="text" id="tensanpham" name="tensanpham" class="form-control" value="<?php echo $row['tensanpham']?>">
      </div>


      <div class="form-group">
        <label for="anhsanpham">Ảnh sản phẩm</label>
        <input type="file" id="anhsanpham" name="anhsanpham" class="form-control" value="<?php echo $row['anhsanpham']?> >
        
    </div>

        <div class="form-group">
            <label for="gianhapvao">Giá nhập vào</label>
            <input type="int" name="gianhapvao" id="gianhapvao" class="form-control" value="<?php echo $row['gianhapvao']?>">
        </div>

        <div class="form-group">
            <label for="giabansi">Giá bán sỉ</label>
            <input type="int" id="giabansi" name="giabansi" class="form-control" value="<?php echo $row['giabansi']?>">
        </div>

        <div class="form-group">
          <label for="giabanle">Giá bán lẻ</label>
          <input type="int" id="giabanle" name="giabanle" class="form-control" value="<?php echo $row['giabanle']?>">
      </div>
      <div class="form-group">
        <label for="soluong">Số lượng</label>
        <input type="int" id="soluong" name="soluong" class="form-control" value="<?php echo $row['soluong']?>">
    </div>

      
            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>

        </form>
    </div>

    </body>
</html>