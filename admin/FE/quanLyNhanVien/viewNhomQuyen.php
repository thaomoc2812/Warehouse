<?php include 'header.html'; ?>
                
                <div class="container">
                  <h1>Quản lý phân quyền</h1>

                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a href="addNhomQuyen.php">Thêm Nhóm quyền</a></li>
                        <li class="active"><a href="addNhomQuyen.php">Xem danh sách nhóm quyền</a></li>
             
                        
                      </ul>
                    </div>
                  </nav>
            
                  
              </div>
          
              <div class="container">

            <?php //ket noi csdl
                    require_once '../../../php/connect.php';


                    $view_sql1="SELECT * FROM nhomquyen";

                    $result1 = mysqli_query($conn, $view_sql1);
                    while ($r1 = mysqli_fetch_assoc($result1))
                    {
                    
                    ?>

                        <table class="table table-striped">
                            <thead class="thead-style">
                            <tr>
                            
                                <th>Nhóm quyền</th>
                                <th ><?php echo  $r1['tennhomquyen']?> </th>
                                <th style = "text-align: right;">
                                <a  href="editNhomQuyen.php?idnhomquyen=<?php echo $r1['id'] ?>"  class="btn btn-info">Sửa</a>
                                <a onclick="return confirm('Xóa nhóm quyền này sẽ khiến các nhân viên của nhóm bị hạn chế các chức năng tương ứng. Chắc chắn xóa?')" href="../../BE/quanLyNhanVien/deleteNhomQuyen.php?idnhomquyen=<?php echo $r1['id'] ?>"  class="btn btn-danger">Xóa</a>
                              </th>
                             
                                
                                
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $idNQ = $r1['id'];
                            $view_sql2 = "SELECT * FROM phanquyen
                            JOIN quyentruycap ON quyentruycap.id = phanquyen.idquyentruycap
                            WHERE phanquyen.idnhomquyen = $idNQ ";
                            $result2 = mysqli_query($conn, $view_sql2);
                             while ($r2 = mysqli_fetch_assoc($result2))
                             {
                              $idQTC = $r2['id'];
                              $view_sql3 = "SELECT * FROM quyentruycap
                              WHERE id = $idQTC ";
                              $result3 = mysqli_query($conn, $view_sql3);
                              $r3 = mysqli_fetch_assoc($result3)
                                 ?>
         
                                 <tr>
                                     
                                     <td ><?php echo $r3['tenquyentruycap'] ?></td>
                                     <td></td>
                                     <td></td>

                                      
                                 </tr>
                                 <?php
                             }?>
                          

                            </tbody>
                            
                        </table>
                  <?php 
                    }?>

    </div>
    <style>
    .thead-style {
        background-color: gray;
        color: white;
    }
    </style>

</body>
</html>
   