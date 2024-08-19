<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí tài khoản</title>
    <link rel="icon" href="./path/to/your/logo.png" type="image/png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-image: url(./assest/image/banner_form.png);
            background-color: #f4f4f4;
        }

        .form_signup {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .info_user {
            display: flex;
            justify-content: space-between;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #333;
            display: flex;
            align-items: center;
        }

        input {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            flex: 1; /* Để input mở rộng đến cuối container */
        }

        button {
            padding: 10px;
            background-color: #1B6FBC;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button a {
            text-decoration: none;
            color: white;
        }

        button:hover {
            transition: 0.5s;
            opacity: 70%;
        }

        span {
            text-align: center;
            margin: 10px 0;
            color: #333;
        }

        .bx {
            font-size: 20px;
            padding: 5px;
        }

        .phone_number {
            margin: 0px 5px;
        }

        .email {
            margin: 0px 5px;
        }

    </style>
</head>

<body>
    <div class="form_signup">
        <h1>Đăng kí</h1>
        <?php
        if (isset($_GET['error'])) {
            echo '<div style="color: red;">' . $_GET['error'] . '</div>';
        }
        ?>
        <form action="index.php?action=process_sign_up" method="POST"
        method="POST" enctype="multipart/form-data">
            <label for="name"><i class='bx bxs-user'></i>Tên</label>
            <input type="text" name="name" placeholder="Nhập email của bạn tại đây." required>

            <label for="photo"><i class='bx bxs-file-image'></i>Ảnh người dùng</label>
            <input type="file" name="photo" required>

            <div class="info_user">
                <div class="email">
                    <label for="email"><i class='bx bxs-user'></i>Email</label>
                    <input type="text" name="email" placeholder="Nhập email của bạn tại đây." required>
                </div>

                <div class="phone_number">
                    <label for="phonenumber"><i class='bx bxs-phone'></i>Số điện thoại</label>
                    <input type="text" name="phonenumber" placeholder="Nhập số điện thoại của bạn tại đây." required>
                </div>
            </div>
            <label for="address"><i class='bx bxs-map'></i>address</label>
            <input type="text" name="address" placeholder="Nhập địa chỉ của bạn tại đây." required>

            <label for="password"><i class='bx bxs-user'></i>Mật khẩu</label>
            <input type="text" name="password" placeholder="Nhập mật khẩu của bạn tại đây." required>

            <button type="submit">Đăng kí tài khoản</button>
            <span>Hoặc</span>
            <button>
                <a href="index.php?action=sign_in">Đăng nhập tài khoản</a>
            </button>
        </form>
    </div>
</body>

</html>