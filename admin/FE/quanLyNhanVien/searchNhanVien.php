<?php include 'header.html'; ?>

            <div class="container">
            <h1>Tìm kiếm nhân viên</h1> 
            <form action="searchNhanVien.php" method="post">
                <div class="form-group">
                    <input type="text" placeholder="Nhập tên hoặc địa chỉ, số điện thoại, vị trí" id ="key" class="form-control" name="key">
                </div>

                <button type="submit" class="btn btn-primary">Tìm</button>
            </form>      
                <table class="table table-striped">
                    <thead class="thead-style">
                        <tr>
                            <th>Họ và tên</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Vị trí</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        //nhan du lieu tu form
                        $key = $_POST['key'];


                        //ket noi csdl
                        require_once '../../../php/connect.php';



                        $search_sql = "SELECT * FROM nhanvien WHERE 
                        (hoten LIKE '%$key%')
                        OR (diachi LIKE '%$key%')
                        OR (sdt LIKE '%$key%')
                        OR (vitri LIKE '%$key%')
                        ";



                        $result = mysqli_query($conn, $search_sql);

                        while ($r = mysqli_fetch_assoc($result))
                        {
                        ?>
                            <tr>
                            <td><?php echo $r['hoten'] ?></td>
                            <td><?php echo $r['sdt'] ?></td>
                            <td><?php echo $r['diachi'] ?></td>
                            <td><?php echo $r['vitri'] ?></td>
                                <td><a href="editNhanVien.php?sid=<?php echo $r['id'] ?>" class="btn btn-info">Sửa</a>
                                <a onclick="return confirm('Bạn có muốn xóa nhân viên này không?')" href="deleteNhanVien.php?sid=<?php echo $r['id'] ?>" class="btn btn-danger">Xóa</a></td>
                            </tr>
                        <?php
                    }
                ?>

                </tbody>
            </table>

</body>
</html>