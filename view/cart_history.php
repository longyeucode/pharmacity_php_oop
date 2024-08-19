<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'project1');
mysqli_set_charset($connect, 'utf8');

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    $sql = "SELECT * FROM bill WHERE email = '$email'";
    $result = mysqli_query($connect, $sql);
}
?>

<style>
    
/* Định nghĩa lớp CSS để thêm viền màu đen cho bảng */
.custom-table-border {
    border: 2px solid #000; /* Màu đen */
}

.purchase-history {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.purchase-item {
    background-color: #f9f9f9;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
}
section {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
            background-color: #3586ff;
            overflow: hidden;
        }

        .air {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url(https://1.bp.blogspot.com/-xQUc-TovqDk/XdxogmMqIRI/AAAAAAAACvI/AizpnE509UMGBcTiLJ58BC6iViPYGYQfQCLcBGAsYHQ/s1600/wave.png);
            background-size: 1000px 100px
        }

        .air.air1 {
            animation: wave 30s linear infinite;
            z-index: 1000;
            opacity: 1;
            animation-delay: 0s;
            bottom: 0;
        }

        .air.air2 {
            animation: wave2 15s linear infinite;
            z-index: 999;
            opacity: 0.5;
            animation-delay: -5s;
            bottom: 10px;
        }

        .air.air3 {
            animation: wave 30s linear infinite;
            z-index: 998;
            opacity: 0.2;
            animation-delay: -2s;
            bottom: 15px;
        }

        .air.air4 {
            animation: wave2 5s linear infinite;
            z-index: 997;
            opacity: 0.7;
            animation-delay: -5s;
            bottom: 20px;
        }

        @keyframes wave {
            0% {
                background-position-x: 0px;
            }

            100% {
                background-position-x: 1000px;
            }
        }

        @keyframes wave2 {
            0% {
                background-position-x: 0px;
            }

            100% {
                background-position-x: -1000px;
            }
        }
        .table-striped{
            background-color:#Ffff;
        }
</style>

<!-- Thêm các liên kết Bootstrap vào trang của bạn -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<section>
        <div class='air air1'></div>
        <div class='air air2'></div>
        <div class='air air3'></div>
        <div class='air air4'></div>
    </section>
<div class="container">
    <a href="index.php" class="btn btn-primary mb-3">Quay về trang chủ</a>
    <h1 class="mb-4">Lịch sử mua hàng</h1>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Tên sản phẩm</th>
                    <th>Quantity</th>
                    <th>Sum</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($each = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?php echo $each['name'] ?></td>
                        <td><?php echo $each['phonenumber'] ?></td>
                        <td><?php echo $each['address'] ?></td>
                        <td>Sản phẩm thuốc</td>
                        <td><?php echo $each['quantity'] ?></td>
                        <td><?php echo $each['sum'] ?> VND</td>
                        <td><?php echo $each['email'] ?></td>
                        <td>
                            <?php if ($each['status'] == 1) : ?>
                                <b style="color:red;">đơn hàng của bạn chưa được xác nhận</b>
                            <?php elseif ($each['status'] == 2) : ?>
                                <b style="color:green;">đơn hàng của bạn đã được xác nhận</b>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
