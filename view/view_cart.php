<?php
session_start();

$cart = $_SESSION['cart'] ?? [];


$quantity = 0;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $type = $_GET['type'];

    if (isset($cart[$id])) {
        if ($type === 'incre') {
            $cart[$id]['quantity']++;
        } elseif ($type === 'decre') {
            $cart[$id]['quantity']--;
            if ($cart[$id]['quantity'] < 1) {
                unset($cart[$id]);
            }
        }
    }

    $_SESSION['cart'] = $cart;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="../assest/image/logo.png" style="width:100%; height:auto;">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assest/css/styles.css">
    <link rel="icon" type="image/png" href="./assest/image/logo.png" style="width:100%; height:auto;">
    <link rel="stylesheet" href="../assest/css/res.css">
    <style>
        /* --------------------------------- header ------------------------------------- */
        

        @media screen and (max-width:1100px) {
            .header__mid {
                padding: 0px 100px;
            }
        }

        @media screen and (max-width:820px) {
            .header__mid {
                padding: 0px 60px;
            }
        }

        @media screen and (max-width:450px) {
            .header__mid {
                padding: 0px 10px;
            }
        }

        /* ---------------------------------- râu ria ----------------------------------- */
        .btn-submit-checkout {
            background-color: #1B6FBC;
            padding: 10px 20px;
            outline: none;
            border: none;
        }

        .btn-submit-checkout a {
            text-decoration: none;
            color: white;
        }

        .btn-submit-checkout:hover {
            opacity: 80%;
            transition: 0.5s;
        }

        #form1 {
            margin: 0px 5px 0px 0px;
            padding: 0px 10px;
        }

        .input-group-prepend-1,
        .input-group-prepend-2,
        .input-group-prepend-3 {
            margin: 0px 5px;
            border: 1px solid #ddd;
        }

        .input-group-prepend-1,
        .input-group-prepend-2 {
            background-color: #1B6FBC;
        }

        .input-group-prepend-1 .bx,
        .input-group-prepend-2 .bx {
            color: white;
        }

        .input-group-prepend-1:hover {
            opacity: 80%;
            transition: 0.5s;
        }

        .input-group-prepend-2:hover {
            opacity: 80%;
            transition: 0.5s;
        }

        .header__menu-overlay {
            z-index: 100;
        }
    </style>
    <?php
$totalQuantity = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product) {
        if (isset($product['quantity'])) {
            $totalQuantity += $product['quantity'];
        }
    }
}
?>
<?php
$search='';?>
</head>

<body>

<div class="header">
        <div class="header__top">
            <div class="header__contact">
                <div class="header__hotline">
                    <i class='bx bxs-phone'></i>
                    <span>Hotline: +84 927553664</span>
                </div>
                <div class="header__social-network">
                    <i class='bx bxl-facebook'></i>
                    <i class='bx bxl-twitter'></i>
                    <i class='bx bxl-instagram-alt'></i>
                    <i class='bx bxl-google'></i>
                </div>
            </div>
            <div class="header__login">
            <?php
                if (isset($_SESSION['name'])) {
                    $name = $_SESSION['name'];
                    echo '<div class="user-greeting">';
                    echo '<a href="?action=profile" class="name-user">' . $name . '</a>' . '<a href="?action=sign_out" class="log-ut-acount">Đăng xuất</a>';
                    echo '</div>';
                } else {
                    echo ' <div class="header__login">
                <div class="header__sign-up">
                    <a href="../index.php?action=sign_up">Đăng kí</a>
                </div>
                    <div class="header__sign-in">
                        <a href="../index.php?action=sign_in">Đăng nhập</a>
                    </div>
                </div>';
                }
                ?>
            </div>
        </div>
        <div class="header__mid">
            <label class="header__menu-res-icon" for="header__menu-mobile--input">
                <i class='bx bx-list-ul'></i>
            </label>
            <div class="header__logo">
            <a href="../index.php"><img src="../assest/image/logo.png" alt=""></a>
            </div>
            <div class="header__nav">
                <div class="header__nav-mid">
                    <div class="header__search">
                        <div class="header__input">
                            <form action="">
                                <input type="search" name="search" placeholder="Nhập tìm kiếm">
                            </form>
                            <div class="header__search-icon">
                                <i class='bx bx-search'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__nav-bot">
                    <div class="header__menu">
                        <ul>
                            <li><a href="../index.php">Trang chủ</a></li>
                            <li><a href="../view/product.php">Sản phẩm</a></li>
                            <li><a href="../view/news.php">Tin tức</a></li>
                            <li><a href="../view/about.php">Giới thiệu</a></li>
                            <li><a href="../view/contact.php">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header__cart">
                <a href="view_cart.php">
                    <i class='bx bxs-cart'></i>
                    <span><?php echo $totalQuantity; ?></span>
                </a>
            </div>
            <input type="checkbox" id="header__menu-mobile--input" class="header__menu-res-input">

            <label class="header__menu-overlay" for="header__menu-mobile--input"></label>

            <div class="header__menu-mobile">
                <div class="header__logo-mobile">
                <a href="../index.php"><img src="./assest/image/logo.png" alt=""></a>
                </div>
                <label class="header__menu-moble-close" for="header__menu-mobile--input">
                    <i class='bx bx-x'></i>
                </label>

                <ul class="header__menu-mobile--list">
                    <li><a href="../index.php" class="header__menu-mobile-link">Trang chủ</a>
                    </li>
                    <li><a href="../view/product.php" class="header__menu-mobile-link">Sản phẩm</a>
                    </li>
                    <li><a href="../view/news.php" class="header__menu-mobile-link">Tin tức</a>
                    </li>
                    <li><a href="../view/about.php" class="header__menu-mobile-link">Giới thiệu</a>
                    </li>
                    <li><a href="../view/contact.php" class="header__menu-mobile-link">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!<div class="back_to_home">
        <a href="../index.php">Quay trở lại trang chủ</a>
    </div>
     
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <div class="row justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <!-- Phần đầu card với các lớp Bootstrap -->
                        <div class="card-header py-3">
                            <h5 class="mb-0">Giỏ hàng của bạn</h5>
                        </div>
                        <div class="card-body">
                            <?php
                            $sum=0;
                            ?>
                            <?php if (!empty($cart)) : ?>
                                <?php foreach ($cart as $id => $each) : ?>
                                    <?php
                                    $result = floatval($each['price']) * intval($each['quantity']);
                                    $sum += $result;
                                    $quantity += $each['quantity'];
                                    ?>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                            <!-- Hình ảnh -->
                                            <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                                <img src="../<?php echo $each['photo']; ?>" alt="Lỗi" style="height: 200px">
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                                </a>
                                            </div>
                                            <!-- Hình ảnh -->
                                        </div>

                                        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                            <!-- Dữ liệu -->
                                            <p><strong><?php echo $each['name'] ?></strong></p>
                                            <p>Thuốc đã được giám định đạt chuẩn</p>
                                            <p>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                                <i class='bx bxs-star'></i>
                                            </p>
                                            <p><i style="color:gray;">voucher chỉ áp dụng khi mua tại của hàng</i></p>
                                            <!-- Dữ liệu -->
                                        </div>

                                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                            <!-- Số lượng -->
                                            <div class="input-group mb-3" style="max-width: 200px">
                                                <div class="input-group-prepend input-group-prepend-1">
                                                    <a href="update_quantity.php?id=<?php echo $id ?>&type=decre" class="btn" type="button"><i class='bx bxs-minus-circle'></i></a>
                                                </div>
                                                <input id="form1" min="0" name="quantity" value="<?php echo $each['quantity'] ?>" type="number" class="form-control" />
                                                <div class="input-group-append input-group-prepend-2">
                                                    <a href="update_quantity.php?id=<?php echo $id ?>&type=incre" class="btn " type="button"><i class='bx bxs-plus-circle'></i></a>
                                                </div>
                                                <div class="input-group-append input-group-prepend-3">
                                                    <a href="delete_cart.php?id=<?php echo $id ?>" class="btn" type="button"><i class='bx bxs-trash'></i></a>
                                                </div>
                                            </div>

                                            <!-- Số lượng -->

                                            <!-- Giá -->
                                            <p class="text-start text-md-center">
                                                <strong><?php echo $each['price']; ?> VND</strong>
                                            </p>
                                            <!-- Giá -->
                                        </div>
                                    </div>

                                    <hr class="my-4" />
                                <?php endforeach; ?>
                            <?php else : ?>
                                <p>Giỏ hàng rỗng</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
                $_SESSION['sum'] = $sum;
                $_SESSION['quantity'] = $quantity;
                
                ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Tóm tắt</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <!-- Thêm đoạn mã cho sản phẩm -->
                                <?php foreach ($cart as $id => $each) : ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                        <?php echo $each['name']; ?>
                                        <span style="padding: 0px 30px;"><?php echo $each['price']; ?> VND</span>
                                    </li>
                                <?php endforeach; ?>

                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Vận chuyển
                                    <span style="padding-right: 20px;">Miễn phí</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Tổng số tiền</strong>
                                        <strong>
                                            <p class="mb-0">(bao gồm VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong><?php echo $sum; ?>.000 VND</strong></span>
                                </li>
                            </ul>

                            <!-- Chỉnh sửa nút "Mua hàng" -->
                            <button type="button" class="btn-submit-checkout">
                                <a href="../index.php?action=checkout&quantity=<?php echo $quantity ?>&sum=<?php echo $sum ?>">Mua hàng</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>