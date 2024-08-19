<?php
$connect = mysqli_connect('localhost', 'root', '', 'project1');
mysqli_set_charset($connect, 'utf8');

$query = "SELECT * FROM brand";
$result = mysqli_query($connect, $query);

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Đây là trang thêm sản phẩm</h1>
        <form action="?action=store" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control-file" id="photo" name="photo">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>

            <div class="form-group">
                <label for="brand">Thương hiệu</label>
                <select class="form-control" id="brand" name="FK_id_brand">
                    <?php foreach ($result as $each) { ?>
                        <option value="<?php echo $each['id_brand'] ?>">
                            <?php echo $each['brand_name'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <?php
            $connect = mysqli_connect('localhost', 'root', '', 'project1');
            mysqli_set_charset($connect, 'utf8');

            $query = "SELECT * FROM category";
            $result = mysqli_query($connect, $query);

            mysqli_close($connect);
            ?>

            <div class="form-group">
                <label for="brand">Danh mục</label>
                <select class="form-control" id="category" name="FK_id_category">
                    <?php foreach ($result as $each) { ?>
                        <option value="<?php echo $each['id_category'] ?>">
                            <?php echo $each['name_category'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
        </form>
    </div>

    <!-- Bootstrap JS and jQuery (if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>