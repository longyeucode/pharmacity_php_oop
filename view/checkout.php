<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Trang thanh toán</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./assest/image/logo.png" style="width:100%; height:auto;">
    <style>
        /* Custom styles */
        body {
            background-color: #e6f7ff; /* Màu xanh nhạt */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin-top: 50px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control[readonly] {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">Đây là trang thanh toán</h1>
        <form action="?action=process_checkout" method="post" id="checkoutForm">
            <?php if (isset($_SESSION['name']) && ($_SESSION['phonenumber']) && ($_SESSION['address']) && ($_SESSION['email'])) : ?>
                <div class="form-group">
                    <label for="name">Tên người mua</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $_SESSION['name'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="phonenumber">Số điện thoại</label>
                    <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo $_SESSION['phonenumber'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $_SESSION['address'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email'] ?>" readonly>
                </div>
            <?php endif ?>
            <div class="form-group">
                <label for="quantity">Số lượng</label>
                <input type="text" class="form-control" id="quantity" name="quantity" value="<?php echo $quantity ?>" readonly>
            </div>
            <div class="form-group">
                <label for="total_price">Tổng tiền</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="total_price" name="total_price" value="<?php echo $sum ?>" readonly>
                    <div class="input-group-append">
                        <span class="input-group-text">VND</span>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary btn-block" onclick="submitFormAndRedirect()">Thanh toán</button>
        </form>
    </div>

    <!-- Bootstrap JS and jQuery (if needed) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function submitFormAndRedirect() {
            document.getElementById('checkoutForm').submit();
        }
    </script>
</body>

</html>
