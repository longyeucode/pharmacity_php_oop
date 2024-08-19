<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            text-align: center;
        }

        h1 {
            color: #007bff;
        }

        a {
            text-decoration: none !important;
            display: block;
            margin: 10px 0;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }

        a:hover {
            color: white !important;
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Đây là giao diện Admin</h1>

        <a href="user_management.php?page_current=1&search=">Xem quản lý khách hàng</a>

        <a href="news_management.php?page_current=1&search=">Xem quản lý tin tức</a>

        <a href="comment_management.php?page_current=1&search=">Xem quản lý bình luận</a>

        <a href="product_management.php?page_current=1&search=">Xem quản lý sản phẩm</a>

        <a href="bill_management.php?page_current=1&search=">Xem quản lý đơn hàng</a>

        <a href="thongke.php?page_current=1&search=">Xem thống kê</a>
    </div>

    <!-- Thêm liên kết đến Bootstrap JS và Popper.js (nếu cần) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
