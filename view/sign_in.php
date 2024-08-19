<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập tài khoản</title>
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

        .form_login  h1 {
            text-align: center;
            color: #333;
        }

        .form_login {
            width: 350px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form_login  form {
            display: flex;
            flex-direction: column;
        }

        .form_login  label {
            margin-bottom: 8px;
            color: #333;
        }

        .form_login  input {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form_login  button {
            padding: 10px;
            background-color: #1B6FBC;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 10px;
        }

        .form_login  span {
            display: flex;
            justify-content: center;
        }

        .bx {
            font-size: 20px;
            padding: 5px;
            transform: translateY(1.5px);
        }

        .form_login  button a {
            text-decoration: none;
            color: white;
        }

        .form_login  button:hover {
            transition: 0.5s;
            opacity: 70%;
        }
    </style>
</head>

<body>
    <div class="form_login">
        <h1>Đăng nhập</h1>
        <form action="index.php?action=process_sign_in" method="POST">
            <label for="gmail"><i class='bx bxs-user'></i>Email</label>
            <input type="text" name="email" placeholder="Nhập email của bạn tại đây." required>

            <label for="gmail"><i class='bx bxs-lock-alt'></i>Mật khẩu</label>
            <input type="password" name="password" placeholder="Nhập mật khẩu của bạn tại đây." required>

            <button type="submit">Đăng nhập tài khoản</button>
            <span>Hoặc</span>
            <button>
                <a href="index.php?action=sign_up">Đăng kí tài khoản</a>
            </button>
        </form>
    </div>
</body>

</html>