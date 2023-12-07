
<?php include 'header.html'; ?>


        <div class="container">
                  <h1>Phân loại sản phẩm</h1>

                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a href="addLoaiSanPham.php">Thêm loại sản phẩm</a></li>
                        <li class="active"><a href="addLoaiSanPham.php">Xem danh sách loại sản phẩm</a></li>
             
                        
                      </ul>
                    </div>
                  </nav>
            
                  
              </div>
      <div class="container">    
            <table class="table table-striped">
                <thead class="thead-style">
                <tr>
                 
                    <th>Loại sản phẩm</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
      
                <?php

                    //ket noi csdl
                    require_once '../../../php/connect.php';


                    $view_sql="SELECT * FROM phanloaisanpham";

                    $result = mysqli_query($conn, $view_sql);
                    

                    while ($r = mysqli_fetch_assoc($result))
                    {
                        ?>

                        <tr>
                            
                            <td><?php echo $r['loaisanpham'] ?></td>
                            <td><a href="editLoaiSanPham.php?sid=<?php echo $r['id'] ?>" class="btn btn-info">Sửa</a>
                             <a onclick="return confirm('Bạn có muốn xóa loại sản phẩm này không?')" href="../../BE/quanLyKhoHang/deleteLoaiSanPham.php?sid=<?php echo $r['id'] ?>" class="btn btn-danger">Xóa</a></td>
                        </tr>
                        <?php
                    }
                ?>

                </tbody>
            </table>


    </div>
    <style>
    .thead-style {
        background-color: black;
        color: white;
    }
    </style>
</body>
</html>


