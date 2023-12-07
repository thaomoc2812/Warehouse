<?php include 'header.html'; ?>


      <div class="container">
        <h1>Danh sách đánh giá nhân viên theo từng tháng</h1> 

<canvas id="myChart" width="400" height="200"></canvas>

<script>
    // Dữ liệu biểu đồ (ví dụ)
    var data = {
        labels: ['Kiều Phương Thảo', 'Trần Văn A', 'Nguyễn Thị B'],
        datasets: [{
            label: 'Tổng số ca làm trong tháng 10',
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
    <style>
    .thead-style {
        background-color: black;
        color: white;
    }
    </style>
</body>
</html>


