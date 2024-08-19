<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    
    <title>Longdeptrai</title>
    <link rel="stylesheet" href="./assest/css/styles.css">
    <link rel="stylesheet" href="./assest/css/stylecualong.css">
    <link rel="stylesheet" href="./assest/css/ress.css">
</head>
<style>
    .free-shipping-icons{
        padding-bottom:30px;
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
$search='';
?>
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
                    <a href="?action=sign_up">Đăng kí</a>
                </div>
                    <div class="header__sign-in">
                        <a href="?action=sign_in">Đăng nhập</a>
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
                <img src="./assest/image/logo.png" alt="">
            </div>
            <div class="header__nav">
                <div class="header__nav-mid">
                    <div class="header__search">
                        <div class="header__input">
                            <form action="">
                                <input type="search" name="search" value="<?php echo $search ?>" placeholder="Nhập tìm kiếm ...">
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
                            <li><a href="./index.php">Trang chủ</a></li>
                            <li><a href="./view/product.php">Sản phẩm</a></li>
                            <li><a href="./view/product.news.php">Tin tức</a></li>
                            <li><a href="./view/about.php">Giới thiệu</a></li>
                            <li><a href="./view/contact.php">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header__cart">
                <a href="./view/view_cart.php">
                    <i class='bx bxs-cart'></i>
                    <span><?php echo $totalQuantity; ?></span>
                </a>
            </div>
            <input type="checkbox" id="header__menu-mobile--input" class="header__menu-res-input">

            <label class="header__menu-overlay" for="header__menu-mobile--input"></label>

            <div class="header__menu-mobile">
                <div class="header__logo-mobile">
                    <img src="./assest/image/logo.png" alt="">
                </div>
                <label class="header__menu-moble-close" for="header__menu-mobile--input">
                    <i class='bx bx-x'></i>
                </label>

                <ul class="header__menu-mobile--list">
                    <li><a href="" class="header__menu-mobile-link">Trang chủ</a>
                    </li>
                    <li><a href="./listtour.html" class="header__menu-mobile-link">Sản phẩm</a>
                    </li>
                    <li><a href="./news.html" class="header__menu-mobile-link">Tin tức</a>
                    </li>
                    <li><a href="./pay.html" class="header__menu-mobile-link">Giới thiệu</a>
                    </li>
                    <li><a href="./pay.html" class="header__menu-mobile-link">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


</body>
</html>