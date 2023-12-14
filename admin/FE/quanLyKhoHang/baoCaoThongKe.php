

<?php include 'header.html'; ?>


      <div class="container">
        <h1>Danh sách thống kê lượng bán sản phẩm theo từng tháng</h1> 

<canvas id="myChart" width="400" height="200"></canvas>

<script>
    // Dữ liệu biểu đồ (ví dụ)
    var data = {
        labels: ['SP01', 'SP02', 'SP03'],
        datasets: [{
            label: 'Tổng lượng bán trong tháng 11',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1,
            data: [20, 30, 10]
        }]
    };

    // Cấu hình biểu đồ
    var options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Tạo biểu đồ cột
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
</script>
      </div>

      <div class="container">
        <h1>Danh sách thống kê lượng truy cập sản phẩm theo từng tháng</h1> 

<canvas id="myChart2" width="400" height="200"></canvas>

<script>
    // Dữ liệu biểu đồ (ví dụ)
    var data = {
        labels: ['SP01', 'SP02', 'SP03'],
        datasets: [{
            label: 'Tổng lượng truy cập trong tháng 11',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1,
            data: [150, 300, 290]
        }]
    };

    // Cấu hình biểu đồ
    var options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Tạo biểu đồ cột
    var ctx = document.getElementById('myChart2').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
</script>
      </div>



    </div>
    <style>
    .thead-style {
        background-color: black;
        color: white;
    }
    </style>
</body>
</html>


