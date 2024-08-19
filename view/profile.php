<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao diện khách hàng</title>
    <link rel="stylesheet" href="./assest/css/style.css">
    <link rel="icon" type="image/png" href="./assest/image/logo.png" style="width:100%; height:auto;">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    <style>
        
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 500px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .profile-image {
            max-height: 200px;
            border-radius: 50%;
            display: block;
            margin: 0 auto;
            margin-bottom: 15px;
        }

        .btn {
            display: block;
            width: 50%;
            margin: 0 auto;
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

        .card-body p {
            padding: 10px 0px;
        }

        .container a {
            color:#3586ff;
            padding: 10px 0px;
            text-decoration: none;
        }

    </style>
</head>

<body>
    <section>
        <div class='air air1'></div>
        <div class='air air2'></div>
        <div class='air air3'></div>
        <div class='air air4'></div>
    </section>
    <div class="container mt-4">
        <h1 class="mb-4">Giao diện khách hàng</h1>
        <a href="index.php" class="btn btn-primary mb-4">Quay trở lại trang chủ</a>

        <?php
        session_start();
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $name = $_SESSION['name'];
            $email = $_SESSION['email'];
            $photo = $_SESSION['photo'];
            $phonenumber = $_SESSION['phonenumber'];
            $address = $_SESSION['address'];
        ?>
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">Xin chào <?php echo $name ?></h2>
                    <p class="card-text">Email: <?php echo $email ?></p>
                    <img src="<?php echo $photo ?>" class="profile-image" alt="Your photo">
                    <p class="card-text">Số điện thoại: <?php echo $phonenumber ?></p>
                    <p class="card-text">Địa chỉ: <?php echo $address ?></p>
                </div>
            </div>
        <?php } ?>

        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'project1');
        mysqli_set_charset($connect, 'utf8');

        $sql = "SELECT * FROM account WHERE email = '$email'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        ?>

        <i class='bx bxs-cog'></i><a href="index.php?action=edit_account&id=<?php echo $each['id'] ?>" class="btn btn-warning">Cài đặt tài khoản</a>

        <a href="index.php?action=cart_history" class="btn btn-primary mb-4">lịch sử mua hàng</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>