<?php

$connect = mysqli_connect('localhost', 'root', '', 'project1');
mysqli_set_charset($connect, 'utf8');

// Kiểm tra kết nối
if (!$connect) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

// Truy vấn SQL để lấy số lượng hóa đơn từ bảng "bill"
$sql = "SELECT COUNT(*) AS total_bills FROM bill";

$result = mysqli_query($connect, $sql);

if ($result) {
    // Lấy kết quả từ truy vấn
    $row = mysqli_fetch_assoc($result);
    $totalBills = $row["total_bills"];
    
    // echo "Tổng số hóa đơn: " . $totalBills;
} else {
    echo "Lỗi truy vấn: " . mysqli_error($connect);
}

// Đóng kết nối đến cơ sở dữ liệu
mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thống kê hóa đơn tháng này</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<a href="admin.php?page_current=1&search=" class="btn btn-secondary">Quay về trang admin</a>
    <h2>Thống kê số lượng hóa đơn</h2>
    <table>
        <tr>
            <th>Tổng số hóa đơn tháng này</th>
        </tr>
        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'project1');
        mysqli_set_charset($connect, 'utf8');

        // Kiểm tra kết nối
        if (!$connect) {
            die("Kết nối không thành công: " . mysqli_connect_error());
        }

        $sql = "SELECT COUNT(*) AS total_bills FROM bill";
        $result = mysqli_query($connect, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $totalBills = $row["total_bills"];

            echo "<tr><td>$totalBills</td></tr>";
        } else {
            echo "<tr><td colspan='1'>Lỗi truy vấn: " . mysqli_error($connect) . "</td></tr>";
        }

        mysqli_close($connect);
        ?>
    </table>
</body>
</html>
