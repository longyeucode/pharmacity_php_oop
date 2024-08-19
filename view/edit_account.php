<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sửa thông tin khách hàng</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<style>/* Custom styles */
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
}

.container {
  margin-top: 50px;
}

h1 {
  color: #0066cc;
}

.form-container {
  max-width: 500px;
  margin: auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 20px;
}

label {
  color: #0066cc;
  font-weight: bold;
}

.old-photo {
  height: 200px;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 5px;
}

.btn-primary {
  background-color: #0066cc;
  border: none;
}

.btn-primary:hover {
  background-color: #0056aa;
}

.btn-block {
  width: 100%;
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

       
</style>
<body>
<section>
        <div class='air air1'></div>
        <div class='air air2'></div>
        <div class='air air3'></div>
        <div class='air air4'></div>
    </section>
<div class="container">
 
  <div class="form-container">
  <h1 class="mt-4">Sửa thông tin khách hàng</h1>
    <form action="index.php?action=update_account" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Họ và tên</label>
        <input type="text" class="form-control" name="name" value="<?php echo $each['name'] ?>">
      </div>
      <div class="form-group">
        <label for="photo">Ảnh</label>
        <div>
          <label for="new-photo">Chọn ảnh mới</label>
          <input type="file" class="form-control-file" id="new-photo" name="photo">
        </div>
        <div>
          <label for="old-photo">Hoặc giữ lại ảnh cũ</label>
          <br>
          <img src="<?php echo $each['photo'] ?>" alt="" class="old-photo">
        </div>
      </div>
      <div class="form-group">
        <label for="address">Địa chỉ</label>
        <input type="text" class="form-control" name="address" value="<?php echo $each['address'] ?>">
      </div>
      <div class="form-group">
        <label for="phonenumber">Số điện thoại</label>
        <input type="text" class="form-control" name="phonenumber" value="<?php echo $each['phonenumber'] ?>">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" value="<?php echo $each['email'] ?>">
      </div>
      <div class="form-group">
        <label for="password">Mật khẩu</label>
        <input type="password" class="form-control" name="password" value="<?php echo $each['password'] ?>">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Sửa tài khoản</button>
    </form>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
