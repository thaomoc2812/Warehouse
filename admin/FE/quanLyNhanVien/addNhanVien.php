<?php include 'header.html'; ?>

                <div class="container">
                  <h1>Form thêm nhân viên</h1>
                  <form action="../../BE/quanLyNhanVien/addNhanVien.php" method="post">
          
                   
                      <div class="form-group">
                          <label for="hoten">Họ tên</label>
                          <input type="text" id ="hoten" class="form-control" name="hoten">
                      </div>
                      <div class="form-group">
                        <label for="sdt">Số điện thoại</label>
                        <input type="text" id="sdt" name="sdt" class="form-control">
                    </div>
                      <div class="form-group">
                          <label for="diachi">Địa chỉ</label>
                          <input type="text" name="diachi" id="diachi" class="form-control">
                      </div>
                      
                      <div class="form-group">
                        <label>Vị trí:</label>
														
															<select id="vitri" name="vitri" >
                              <?php //ket noi csdl
                              
                              require_once '../../../php/connect.php';


                              $view_sql1="SELECT * FROM nhomquyen";
                              $result1 = mysqli_query($conn, $view_sql1);
                              while ($r1 = mysqli_fetch_assoc($result1))
                              {
                              ?>
                              <option><?php echo  $r1['tennhomquyen']?> </option><br><?php 
                              }?>
															</select><br>
                    </div>
          
                      <button type="submit" class="btn btn-primary">Thêm</button>
          
                  </form>
              </div>
          


</body>
</html>
   