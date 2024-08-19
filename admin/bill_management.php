<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản lý hóa đơn</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <header class="text-center mb-4">
            <h1>Đây là trang quản lí hóa đơn</h1>
        </header>

        <nav class="mb-4">
            <a href="admin.php?page_current=1&search=" class="btn btn-secondary">Quay về trang admin</a>
            <a href="user_management.php?page_current=1&search=" class="btn btn-primary">Xem quản lí khách hàng</a>
            <a href="comment_management.php?page_current=1&search=" class="btn btn-primary">Xem quản lí bình luận</a>
            <a href="product_management.php?page_current=1&search=" class="btn btn-primary">Xem trang quản lí sản phẩm</a>
            <a href="news_management.php?page_current=1&search=" class="btn btn-primary">Xem trang quản lí tin tức</a>
        </nav>

        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'project1');
        mysqli_set_charset($connect, 'utf8');

        $sql = "SELECT * FROM bill";
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
                    <th>Phone number</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Name product</th>
                    <th>Quantity</th>
                    <th>Sum</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $each) : ?>
                    <tr>
                        <td><?php echo $each['id']; ?></td>
                        <td><?php echo $each['name']; ?></td>
                        <td><?php echo $each['phonenumber']; ?></td>
                        <td><?php echo $each['address']; ?></td>
                        <td><?php echo $each['email']; ?></td>
                        <td><span>Sản phẩm loại 1</span></td>
                        <td><?php echo $each['quantity']; ?></td>
                        <td><?php echo $each['sum'] . '00' . 'vnd'; ?></td>
                        <td>
                            <?php if ($each['status'] == 1) : ?>
                                <a href="../view/update_status.php?id=<?php echo $each['id'] ?>" class="btn btn-success">Xác nhận</a>
                            <?php else : ?>
                                <span class="badge badge-success">Đã xác nhận</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Thêm liên kết đến Bootstrap JS và Popper.js (nếu cần) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
