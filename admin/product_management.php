<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản lý sản phẩm</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h1>Đây là trang quản lý sản phẩm</h1>

        <a href="admin.php?page_current=1&search=" class="btn btn-secondary">Quay về trang admin</a>
        <a href="user_management.php?page_current=1&search=" class="btn btn-primary">Xem quản lí khách hàng</a>
        <a href="news_management.php?page_current=1&search=" class="btn btn-primary">Xem quản lí tin tức</a>
        <a href="comment_management.php?page_current=1&search=" class="btn btn-primary">Xem quản lí bình luận</a>
        <a href="bill_management.php?page_current=1&search=" class="btn btn-primary">Xem trang quản lí hóa đơn</a>

        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'project1');
        mysqli_set_charset($connect, 'utf8');

        $page = 1;

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }

        $sql_number_of_products = "SELECT count(*) FROM product";
        $product_count_array = mysqli_query($connect, $sql_number_of_products);
        $product_count_result = mysqli_fetch_array($product_count_array);

        $product_count = $product_count_result['count(*)'];

        $products_per_page = 10;

        $total_pages = ceil($product_count / $products_per_page);

        $offset = $products_per_page * ($page - 1);


        $search = ' ';

        if (isset($_GET['search'])) {
            $search = $_GET['search'];
        }

        $sql = "SELECT * FROM product
        WHERE name LIKE '%$search%'
        LIMIT $products_per_page 
        OFFSET $offset";

        $result = mysqli_query($connect, $sql);

        $each = mysqli_fetch_array($result);
        ?>

        <?php
        session_start();
        if (isset($_SESSION['name'])) {
            $name = $_SESSION['name'];
            echo '<p class="mt-3">Chào mừng <b>' . $name . '</b></p>';
            echo '<a href="../index.php?action=sign_out" class="btn btn-danger mb-3">Đăng xuất</a>';
        } else {
            echo '<a href="?action=sign_up" class="btn btn-success">Đăng ký</a>';
            echo '<span class="ml-2">Hoặc</span>';
            echo '<a href="?action=sign_in" class="btn btn-primary ml-2">Đăng nhập</a>';
        }
        ?>

        <form action="" class="mt-3 mb-3">
            <input type="search" name="search" value="<?php echo $search ?>" class="form-control" placeholder="Tìm kiếm sản phẩm">
        </form>

        <a href="../index.php?action=create" class="btn btn-success mb-3">Thêm sản phẩm</a>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Del</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $each) { ?>
                    <tr>
                        <td><?php echo $each['id'] ?></td>
                        <td><?php echo $each['name'] ?></td>
                        <td>
                            <img src="../<?php echo $each['photo']; ?>" alt="Lỗi" style="height: 50px" class="img-fluid">
                        </td>
                        <td><?php echo $each['price'] ?> VND</td>
                        <td>
                            <a href="../index.php?action=edit&id=<?php echo $each['id'] ?>" class="btn btn-warning">
                                Edit
                            </a>
                        </td>
                        <td>
                            <a href="../index.php?action=delete&id=<?php echo $each['id'] ?>" class="btn btn-danger">
                                Del
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="pagination">
            <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                <a href="?page=<?php echo $i ?>&search=<?php echo $search ?>" class="btn btn-light"><?php echo $i ?></a>
            <?php } ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>