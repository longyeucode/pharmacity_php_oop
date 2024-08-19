<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản lý bình luận</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <header class="text-center mb-4">
            <h1>Đây là trang quản lí bình luận</h1>
        </header>

        <nav class="mb-4">
            <a href="admin.php?page_current=1&search=" class="btn btn-secondary">Quay về trang admin</a>
            <a href="user_management.php?page_current=1&search=" class="btn btn-primary">Xem quản lí khách hàng</a>
            <a href="product_management.php?page_current=1&search=" class="btn btn-primary">Xem trang quản lí sản phẩm</a>
            <a href="news_management.php?page_current=1&search=" class="btn btn-primary">Xem trang quản lí tin tức</a>
            <a href="bill_management.php?page_current=1&search=" class="btn btn-primary">Xem trang quản lí hóa đơn</a>
        </nav>

        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'project1');
        mysqli_set_charset($connect, 'utf8');

        $sql = "SELECT * FROM comment";
        $result = mysqli_query($connect, $sql);
        ?>

        <?php
        session_start();
        if (isset($_SESSION['name'])) {
            $name = $_SESSION['name'];
            echo 'Chào mừng' . ' ' . '<b>' . $name . '</b>' . ' ' . 'đã trở lại';
            echo '<a href="../index.php?action=sign_out" class="btn btn-danger ml-2">Đăng xuất</a>';
            echo '</br>';
        } else {
            echo '<a href="?action=sign_up" class="btn btn-success">Đăng kí</a>';
            echo 'Hoặc';
            echo '<a href="?action=sign_in" class="btn btn-primary ml-2">Đăng nhập</a>';
        }
        ?>

        <br>

        <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Content</th>
                    <th>Del</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $each) {
                    echo '<tr>';
                    echo '<td>' . $each['id'] . '</td>';
                    echo '<td>' . $each['name'] . '</td>';
                    echo '<td>' . $each['date'] . '</td>';
                    echo '<td>' . $each['content'] . '</td>';
                    echo '<td>
                            <a href="../index.php?action=delete_comment&id=' . $each['id'] . '" class="btn btn-danger">
                                Del
                            </a>
                          </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Thêm liên kết đến Bootstrap JS và Popper.js (nếu cần) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
