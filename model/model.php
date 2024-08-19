<?php

$connect = mysqli_connect('localhost', 'root', '', 'project1');
mysqli_set_charset($connect, 'utf8');

switch ($action) {
    case '':
        break;
    case 'store':
        // Kiểm tra xem có tệp đã tải lên không
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
            $upload_dir = 'photo_product/';

            // Tạo thư mục nếu nó chưa tồn tại
            if (!file_exists($upload_dir)) {
                if (!mkdir($upload_dir, 0755, true)) {
                    echo 'Không thể tạo thư mục lưu trữ tệp.';
                    exit;
                }
            }

            $photo = $upload_dir . $_FILES['photo']['name'];

            // Di chuyển tệp tải lên vào thư mục lưu trữ
            move_uploaded_file($_FILES['photo']['tmp_name'], $photo);

            // Tiếp tục thực hiện lưu sản phẩm vào cơ sở dữ liệu
            $sql = "INSERT product(name, photo, price, description, FK_id_brand, FK_id_category)
                                VALUES ('$name', '$photo', '$price', '$description','$FK_id_brand','$FK_id_category')";
            $result = mysqli_query($connect, $sql);
        } else {
            // Xử lý khi không có tệp tải lên
            echo "Lỗi: Không có tệp tải lên.";
            exit();
        }
        break;

    case 'edit':
        $sql = "SELECT * FROM product 
            WHERE id = '$id'";
        $result = mysqli_query($connect, $sql);

        $each = mysqli_fetch_array($result);

        break;
    case 'update':
        $sql = "UPDATE product 
            SET 
                name = '$name',
                price = '$price',
                description = '$description'";

        if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
            $upload_dir = 'photo_product/';

            // Tạo thư mục nếu nó chưa tồn tại
            if (!file_exists($upload_dir)) {
                if (!mkdir($upload_dir, 0755, true)) {
                    echo 'Không thể tạo thư mục lưu trữ tệp.';
                    exit;
                }
            }

            $photo = $upload_dir . $_FILES['photo']['name'];

            // Di chuyển tệp tải lên vào thư mục lưu trữ
            move_uploaded_file($_FILES['photo']['tmp_name'], $photo);

            $sql .= ", photo = '$photo'";
        }

        $sql .= " WHERE id = '$id'";

        $result = mysqli_query($connect, $sql);
        break;


    case 'delete':
        $id = isset($_GET['id']) ? $_GET['id'] : '';

        $sql_delete_comments = "DELETE FROM comment WHERE FK_id_product = '$id'";
        $result_delete_comments = mysqli_query($connect, $sql_delete_comments);

        $sql_delete_product = "DELETE 
        FROM 
        product 
        WHERE 
        id = '$id'";
        $result_delete_product = mysqli_query($connect, $sql_delete_product);
        break;
    case 'add_to_cart':
        session_start();

        $sql = "SELECT * FROM product
                    WHERE id = '$id'";

        $result = mysqli_query($connect, $sql);

        if ($_SESSION['name']) {
            if ($row = mysqli_fetch_array($result)) {
                $name = $row['name'];
                $photo = $row['photo'];
                $price = $row['price'];
                $description = $row['description'];

                if (empty($_SESSION['cart'][$id])) {
                    $_SESSION['cart'][$id]['name'] = $name;
                    $_SESSION['cart'][$id]['photo'] = $photo;
                    $_SESSION['cart'][$id]['price'] = $price;
                    $_SESSION['cart'][$id]['description'] = $description;
                    $_SESSION['cart'][$id]['quantity'] = 1;
                } else {
                    $_SESSION['cart'][$id]['quantity']++;
                }

                header('location:./index.php');

                exit;
            } else {
                echo "Không tìm thấy sản phẩm.";
            }
        } else {
            header('location:index.php?action=sign_in');
        }
        break;
    case 'buy_now':
        session_start();

        $sql = "SELECT * FROM product
                    WHERE id = '$id'";

        $result = mysqli_query($connect, $sql);

        if ($_SESSION['name']) {
            if ($row = mysqli_fetch_array($result)) {
                $name = $row['name'];
                $photo = $row['photo'];
                $price = $row['price'];
                $description = $row['description'];

                if (empty($_SESSION['cart'][$id])) {
                    $_SESSION['cart'][$id]['name'] = $name;
                    $_SESSION['cart'][$id]['photo'] = $photo;
                    $_SESSION['cart'][$id]['price'] = $price;
                    $_SESSION['cart'][$id]['description'] = $description;
                    $_SESSION['cart'][$id]['quantity'] = 1;
                } else {
                    $_SESSION['cart'][$id]['quantity']++;
                }

                header('location:view/view_cart.php');

                exit;
            } else {
                echo "Không tìm thấy sản phẩm.";
            }
        } else {
            header('location:index.php?action=sign_in');
        }
        break;
    case 'process_sign_up':
        if (
            isset($_POST['name'])
            && isset($_FILES['photo'])
            && isset($_POST['address'])
            && isset($_POST['phonenumber'])
            && isset($_POST['email'])
            && isset($_POST['password'])
        ) {
            $name = $_POST['name'];
            $photo = $_FILES['photo'];
            $address = $_POST['address'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql_check_email = "SELECT count(*) FROM account 
            WHERE 
            email = '$email'";

            $result_check_email = mysqli_query($connect, $sql_check_email);
            $each_check_email = mysqli_fetch_array($result_check_email)['count(*)'];

            if ($each_check_email == 1) {
                header('location:index.php?action=sign_up&error=Email bạn vừa đăng kí đã được sử dụng');
            } else {
                if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
                    $upload_dir = 'photo_user/';

                    // Tạo thư mục nếu nó chưa tồn tại
                    if (!file_exists($upload_dir)) {
                        if (!mkdir($upload_dir, 0755, true)) {
                            echo 'Không thể tạo thư mục lưu trữ tệp.';
                            exit;
                        }
                    }

                    // Tạo tên tệp mới dựa trên thời gian
                    $photo_extension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
                    $photo = $upload_dir . time() . '.' . $photo_extension;

                    // Di chuyển tệp tải lên vào thư mục lưu trữ
                    move_uploaded_file($_FILES['photo']['tmp_name'], $photo);

                    // Tiếp tục thực hiện lưu thông tin người dùng vào cơ sở dữ liệu
                    $sql_insert_account = "INSERT INTO account(name, photo, address, phonenumber, email, password)
                        VALUES('$name', '$photo', '$address', '$phonenumber', '$email', '$password')";

                    $result_insert_account = mysqli_query($connect, $sql_insert_account);
                }


                if ($result_insert_account) {
                    echo 'Bạn đã đăng kí tài khoản thành công';
                } else {
                    echo 'Bạn đã đăng kí tài khoản thất bại';
                }

                $sql_get_account = "SELECT * FROM account 
                WHERE 
                email = '$email'";

                $result_get_account = mysqli_query($connect, $sql_get_account);
                $each_get_account = mysqli_fetch_array($result_get_account)['id'];

                header('location:index.php?action=sign_in');
                exit();
            }
        }

        break;

    case 'sign_out':
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;

        session_unset();

        header('location:index.php');
        break;

    case 'process_sign_in':
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM account
                    WHERE 
                    email = '$email' 
                    AND 
                    password = '$password'";

            $result = mysqli_query($connect, $sql);

            if (mysqli_num_rows($result) == 1) {
                $each = mysqli_fetch_array($result);

                $_SESSION['id'] = $each['id'];
                $_SESSION['email'] = $each['email'];
                $_SESSION['name'] = $each['name'];
                $_SESSION['photo'] = $each['photo'];
                $_SESSION['phonenumber'] = $each['phonenumber'];
                $_SESSION['address'] = $each['address'];

                $FK_id_position = $each['FK_id_position'];

                switch ($FK_id_position) {
                    case 1:
                        header('location:admin/admin.php');
                        break;
                    case 2:
                        header('location:index.php');
                        break;
                    default:
                        header('location:index.php');
                        break;
                }
            } else {
                // Đăng nhập thất bại
                header('location: index.php?action=sign_in&error=Đăng nhập thất bại !!!');
            }
        }
        break;

    case 'edit_account':
        $sql = "SELECT * FROM account 
                WHERE id = '$id'";
        $result = mysqli_query($connect, $sql);

        $each = mysqli_fetch_array($result);

        break;
    case 'update_account':
        $sql = "UPDATE account 
        SET 
            name = '$name',
            address = '$address',
            phonenumber = '$phonenumber',
            email = '$email',
            password = '$password'";

        if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
            $upload_dir = 'photo_user_new/';

            // Tạo thư mục nếu nó chưa tồn tại
            if (!file_exists($upload_dir)) {
                if (!mkdir($upload_dir, 0755, true)) {
                    echo 'Không thể tạo thư mục lưu trữ tệp.';
                    exit;
                }
            }

            $photo = $upload_dir . $_FILES['photo']['name'];

            // Di chuyển tệp tải lên vào thư mục lưu trữ
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $photo)) {
                $sql .= ", photo = '$photo'";
            } else {
                echo 'Không thể di chuyển tệp tải lên.';
                exit;
            }
        }

        $sql .= " WHERE id = '$id'";

        $result = mysqli_query($connect, $sql);

        // Sau khi cập nhật thành công, cập nhật giá trị mới vào session
        if ($result) {
            $_SESSION['name'] = $name;
            $_SESSION['address'] = $address;
            $_SESSION['phonenumber'] = $phonenumber;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['photo'] = isset($photo) ? $photo : $_SESSION['photo'];
        }

        break;
    case 'delete_account':
        $sql = "DELETE FROM account
                WHERE id = '$id'";
        $result = mysqli_query($connect, $sql);

        echo $sql;
        break;

    case 'show':
        $sql = "SELECT product.*, 
        brand.brand_name as brand_name
        FROM product
        JOIN brand ON product.FK_id_brand = brand.id_brand
        where id = '$id'";

        $result = mysqli_query($connect, $sql);

        $each = mysqli_fetch_array($result);

        break;
    case 'show_news':
        $sql = "SELECT * FROM news WHERE id_news = '$id'";

        $result = mysqli_query($connect, $sql);

        $each = mysqli_fetch_array($result);

        break;
    case 'store_news':
        // Kiểm tra xem có tệp đã tải lên không
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
            $upload_dir = 'photo_news/';

            // Tạo thư mục nếu nó chưa tồn tại
            if (!file_exists($upload_dir)) {
                if (!mkdir($upload_dir, 0755, true)) {
                    echo 'Không thể tạo thư mục lưu trữ tệp.';
                    exit;
                }
            }

            $photo = $upload_dir . $_FILES['photo']['name'];

            // Di chuyển tệp tải lên vào thư mục lưu trữ
            move_uploaded_file($_FILES['photo']['tmp_name'], $photo);

            // Tiếp tục thực hiện lưu sản phẩm vào cơ sở dữ liệu
            $sql = "INSERT news(name, photo, date, description)
                        VALUES ('$name', '$photo', '$date', '$description')";
            $result = mysqli_query($connect, $sql);
        } else {
            // Xử lý khi không có tệp tải lên
            echo "Lỗi: Không có tệp tải lên.";
            exit();
        }
        break;
    case 'edit_news':
        $sql = "SELECT * FROM news 
                    WHERE id_news = '$id_news'";
        $result = mysqli_query($connect, $sql);

        $each = mysqli_fetch_array($result);

        break;
    case 'update_news':
        $sql = "UPDATE news 
                    SET 
                        name = '$name',
                        date = '$date',
                        description = '$description'";

        if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
            $upload_dir = 'photo_product/';

            // Tạo thư mục nếu nó chưa tồn tại
            if (!file_exists($upload_dir)) {
                if (!mkdir($upload_dir, 0755, true)) {
                    echo 'Không thể tạo thư mục lưu trữ tệp.';
                    exit;
                }
            }

            $photo = $upload_dir . $_FILES['photo']['name'];

            // Di chuyển tệp tải lên vào thư mục lưu trữ
            move_uploaded_file($_FILES['photo']['tmp_name'], $photo);

            $sql .= ", photo = '$photo'";
        }

        $sql .= " WHERE id_news = '$id_news'";

        $result = mysqli_query($connect, $sql);
        break;

    case 'delete_news':
        $sql = "DELETE FROM news
                    WHERE id_news = '$id_news'";
        $result = mysqli_query($connect, $sql);
        break;
    case 'comment':
        $sql = "INSERT INTO comment(name, content, date, FK_id_product)
            VALUES('$name', '$content', '$date', '$FK_id_product')";

        $result = mysqli_query($connect, $sql);

        header('Location: ./index.php');

        break;
    case 'delete_comment':
        $sql = "DELETE FROM comment
                        WHERE id = '$id'";
        $result = mysqli_query($connect, $sql);
        break;
    case 'process_checkout':
        $sql = "INSERT INTO bill(name, phonenumber, address, email, quantity, sum)
        VALUES('$name', '$phonenumber', '$address', '$email', '$quantity', '$sum')";

        $result = mysqli_query($connect, $sql);

        header('Location:view/success_payment.php');

        break;

    case 'send_mail':
        session_start();

        // Kiểm tra xem người dùng đã đăng nhập và có email trong phiên làm việc không
        if (isset($_SESSION['email'])) {
            // Lấy thông tin email người nhận từ phiên làm việc
            $nguoinhan_email = $_SESSION['email'];

            require 'PHPMailer-master/src/PHPMailer.php';
            require 'PHPMailer-master/src/SMTP.php';
            require 'PHPMailer-master/src/Exception.php';

            // Tạo một đối tượng PHPMailer
            $mail = new PHPMailer\PHPMailer\PHPMailer(true);

            try {
                $mail->SMTPDebug = 2;
                $mail->isSMTP();
                $mail->CharSet = "utf-8";
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'phamngocbaoan792004@gmail.com'; // Thay bằng email của bạn
                $mail->Password = 'rldfqcifrfswdmrr'; // Thay bằng mật khẩu của bạn
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

                $mail->setFrom('phamngocbaoan792004@gmail.com', 'Phạm An'); // Thay bằng thông tin của bạn
                $mail->addAddress($nguoinhan_email); // Email của người dùng từ phiên làm việc

                $mail->isHTML(true);

                $mail->Subject = 'Hóa đơn thanh toán sản phẩm mua hàng của bạn là';

                // Thêm nội dung email ở đây
                $cart = $_SESSION['cart'] ?? [];
                $sum = 0;
                $quantity = 0;

                if (!empty($cart)) {
                    foreach ($cart as $ma => $each) {
                        $result = floatval($each['price']) * intval($each['quantity']);
                        $sum += $result;
                        $quantity += intval($each['quantity']);
                    }
                }

                if (isset($_SESSION['name']) && isset($_SESSION['phonenumber']) && isset($_SESSION['address']) && isset($_SESSION['email'])) {
                    // All required session variables are set, construct the email content
                    $noidungthu = '<div style="font-family: Arial, sans-serif; color: #333;">
                    <p>Chào bạn,</p>
                    <p>Chúng tôi xin gửi lời cảm ơn chân thành đến bạn vì đã mua hàng tại cửa hàng chúng tôi.</p>
                    <p>Chúng tôi rất trân trọng sự ủng hộ và tin tưởng của bạn trong việc lựa chọn sản phẩm của chúng tôi.</p>

                    <p>Dưới đây là thông tin đơn hàng của bạn:</p>
                    <ul>
                        <li>Tổng số lượng sản phẩm: ' . $quantity . ' sản phẩm.</li>
                        <li>Tổng giá trị đơn hàng: ' . $sum . ' VND.</li>
                    </ul>

                    <p>Thông tin khách hàng:</p>
                    <ul>
                        <li>Tên khách hàng: ' . $_SESSION['name'] . '</li>
                        <li>Địa chỉ: ' . $_SESSION['address'] . '</li>
                        <li>Email: ' . $_SESSION['email'] . '</li>
                        <li>Số điện thoại: ' . $_SESSION['phonenumber'] . '</li>
                    </ul>
        
                    <p>Cảm ơn bạn đã ủng hộ chúng tôi!</p>
        
                    <p>Trân trọng,<br>Phạm An Restaurant</p>
                    </div>';
                }


                $mail->Body = $noidungthu;

                $mail->smtpConnect(array(
                    "ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true
                    )
                ));

                $mail->send();

                unset($_SESSION['cart']);
                echo '<script>window.location.href = "index.php";</script>';    
                exit();
            } catch (Exception $e) {
                echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
            }
        }
        break;
}
