<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LongAnPharmacy HCM</title>
    <link rel="stylesheet" href="../assest/css/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="../assest/image/logo.png" style="width:100%; height:auto;">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="./../assest/css/res.css">
    <style>
        .user-greeting .name-user {
            transform: translateX(45px);
        }

        /* .user-greeting .log-ut-acount {
            color: greenyellow;
            transform: translateX(20px);
        } */

        .pagination ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            margin: 20px 20px;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination li a {
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .pagination li a:hover {
            background-color: #0072bc;
            transition: 0.5s;
            color: white;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #1B6FBC;
        }

        body {
            font-family: sans-serif;
        }

        /* ------------------------------header top---------------------------------------- */

        .header {
            background-color: #1B6FBC;
            padding: 0px 100px;
            width: 100%;
            height: 160px;
        }

        .header__top {
            width: 100%;
            height: 56px;
            display: flex;
            justify-content: space-between;
        }

        .header__contact {
            display: flex;
            justify-content: space-between;
        }

        .header__hotline {
            font-size: 13px;
            font-weight: 700;
            display: flex;
            align-items: center;
            margin: 10px 0px;
            max-height: 32px;
            padding: 5px 10px;
            color: var(--primary-color);
            background-color: white;
            line-height: 56px;
            border-radius: 15px;
        }

        .header__social-network {
            margin: 0px 10px;
        }

        .header__social-network>.bx {
            line-height: 56px;
            color: white;
            font-size: 24px;
        }

        .header__social-network>.bx:hover {
            opacity: 80%;
            transition: 0.5s;
            cursor: pointer;
        }

        .header__login {
            display: flex;
            font-size: 14px;
            color: white;
        }

        .header__login a:hover {
            opacity: 80%;
            transition: 0.5s;
        }

        .header__sign-up {
            position: relative;
        }

        .header__sign-up>a::after {
            content: "";
            position: absolute;
            height: 20px;
            width: 1px;
            background-color: rgb(255, 255, 255);
            bottom: 18px;
            left: 100%;
        }

        .header__login a {
            line-height: 56px;
            padding: 0px 10px;
            color: white;
            text-decoration: none;
        }

        /* ------------------------------ header mid ------------------------------ */
        .header__mid {
            display: flex;
            height: 100px;
        }

        /* ------------------------------ header nav mid --------------------------- */
        .header__nav-mid {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .header__logo {
            width: 25%;
        }

        .header__logo img {
            height: 100%;
        }

        .header__nav {
            width: 50%;
            display: flex;
            flex-direction: column;
        }

        .header__search {
            width: 100%;
        }

        .header__cart {
            width: 25%;
            text-align: center;
        }

        .header__search input {
            padding: 10px 20px;
            width: 100%;
            outline: none;
            border-radius: 30px;
        }

        .header__input {
            position: relative;
        }

        .header__search-icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 50%;
            padding: 5px 5px;
            right: 10px;
        }

        .header__search-icon .bx {
            color: white;
            font-size: 18px;
            color: var(--primary-color);
            font-weight: 700;
        }

        .header__cart .bx {
            color: white;
            font-size: 30px;
        }

        .header__cart span {
            background-color: white;
            padding: 5px 8px;
            border-radius: 50%;
            font-size: 13px;
            font-weight: 700;
            color: var(--primary-color);
        }

        .header__cart a {
            text-decoration: none;
        }

        /* ----------------------------------- header nav  bot ------------------------------- */
        .header__menu ul {
            height: 70px;
            transform: translateX(20%);
            display: flex;
            align-items: center;
            text-align: center;
        }

        .header__menu ul>li {
            list-style: none;
            padding: 0px 13px;
            position: relative;
        }

        .header__menu ul li a {
            text-decoration: none;
            color: white;
            font-size: 14px;
        }

        .header__menu ul>li::after {
            content: "";
            position: absolute;
            height: 2px;
            width: 0;
            background-color: rgb(255, 255, 255);
            bottom: -5px;
            left: 0;
            transition: width 0.3s ease;
        }

        .header__logo-mobile img {
            height: 130px;
            transform: translateX(50%);
        }

        .header__menu ul>li:hover::after {
            width: 100%;
        }

        /* ---------------- nút check box ------------------ */
        #header__menu-mobile--input {
            display: none;
        }

        .header__menu-res-icon {
            display: none;
        }

        .header__menu-res-icon .bx {
            transform: translateY(50%);
            color: white;
            font-size: 36px;
        }

        .header__menu-res-icon~.header__menu-overlay {
            display: none;
        }

        .header__menu-res-input:checked~.header__menu-overlay {
            display: block;
        }

        .header__menu-mobile {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }

        .header__menu-res-input:checked~.header__menu-mobile {
            transform: translateX(0);
        }

        /* --------------- lớp phủ màu đen khi nhấn vòa dấu 3 gạch hiện ra menu ------------- */
        .header__menu-overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            display: none;
            background-color: rgba(0, 0, 0, 0.3);
        }

        /* ---------------- list danh sách nav khi kéo thu nhỏ về ----------------  */
        .header__menu-mobile {
            width: 320px;
            max-width: 100%;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            transform: translateX(-100%);
            background-color: white;
        }

        .header__menu-mobile ul li {
            list-style: none;
            font-weight: 600;
        }

        .header__menu-mobile--list {
            margin-top: 24px;
            margin: 0px 20px;
        }

        .header__menu-mobile--list li {
            padding-bottom: 5px;
            border-bottom: 1px solid rgb(209, 209, 209);
        }

        .header__menu-mobile-link {
            text-decoration: none;
            text-decoration: none;
            color: black;
            display: block;
            padding: 8px 0px;
        }

        .header__menu-moble-close {
            font-size: 30px;
            color: #666;
            position: absolute;
            top: 0;
            right: 0;

        }

        .container {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 10px 100px;
        }

        .danh-muc {
            width: 30%;
            background-color: #fff;
            padding: 20px;
            position: sticky;
            top: 30px;
            height: fit-content;
            overflow: auto;
        }

        .danh-muc h2 {
            padding-bottom: 10px;
        }

        .danh-muc a {
            padding-top: 10px;
            display: block;
            text-decoration: none;
            color: #555;
            margin-bottom: 8px;
        }

        .danh-muc a:hover {
            transition: 0.5s;
            transform: translateX(10px);
        }


        .danh-muc a:hover {
            color: #000;
        }

        .showDanhMucInput {
            display: none;
        }

        .danh-muc-res-icon {
            display: none;
        }

        .close-icon-mobile {
            display: none;
        }

        .row-product {
            align-items: center;
            display: flex;
            flex-wrap: wrap;
            margin: 0px 10px;
            width: 100%;
            background-color: #fff;
            padding: 20px;
        }

        .product {
            width: calc(25% - 20px);
            margin: 10px;
            box-sizing: border-box;
        }

        .product-list-items {
            position: relative;
            overflow: hidden;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            min-height: 300px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;

        }

        .product-list-items a {
            margin: 10px 0px;
        }

        .product-list-items img {
            max-width: 100%;

            border-radius: 6px;
            margin-bottom: 10px;
        }

        .product-list-items h3 {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 1em;
            margin: 10px 20px;
        }





        .button_cart {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bttn {
            color: white;
            text-decoration: none;
            padding-right: 30px;
            display: flex;
            align-items: center;
        }

        .add {
            color: white;
            text-decoration: none;
            border-radius: 25px;
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }

        .bttn i.fa {
            border-radius: 100%;
            background-color: #0072bc;
            color: white;
            padding: 10px;
            margin-right: -15px;
        }

        .add {
            background-color: #0072bc;
        }

        .ttsp {
            text-align: center;
        }

        .ttsp a {
            text-decoration: none;
            color: #000000;
        }

        .price-product p {
            text-align: center;
            font-size: 14px;
        }

        .danh-muc-pc {
            margin-top: 15px;
            text-align: center;
        }

        .danh-muc-pc a {
            font-size: 15px;
            padding: 5px;
            text-decoration: none;
            color: #ffffff;
            border: solid rgba(0, 0, 0, 0.185);
            background-color: #1B6FBC;
            transition: 0.3s ease;
        }

        .danh-muc-pc a:hover {
            background-color: #f0f0f0;
            /* Màu nền khi hover */
            color: #333;
            /* Màu văn bản khi hover */
        }

        .danh-muc {
            display: none;
        }

        .saleall {
            color: #0072bc;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

            text-align: center;

        }

        .sale {
            color: #a4b5c0;
            text-decoration: line-through;
        }

        @media screen and (max-width:1100px) {
            .header__menu-res-icon {
                display: block;
            }

            .header__logo img {
                display: none;
            }

            .header__menu {
                display: none;
            }

            .header__search {
                transform: translateY(50%);
            }

            .header__cart {
                transform: translateY(20px);
            }

            .header__mid {
                display: flex;
                justify-content: space-between;
            }

            .header__logo {
                display: flex;
            }

            .contact-container {
                flex-direction: column;
                align-items: center;
            }

            .product {
                width: calc(50% - 20px);
            }

            .contact-info,
            .contact-form {
                flex-basis: 100%;
                margin-bottom: 20px;
            }

            .map {
                width: 100%;
                height: 500px;
            }

            .danh-muc-pc {
                display: none;
            }
        }

        @media screen and (max-width:820px) {
            .header__logo img {
                display: none;
            }

            .header__search {
                margin-left: -10px;
            }

            .header {
                padding: 0px 60px;
            }

            .header__menu-res-icon {
                display: block;
            }

            .header__cart {
                transform: translateY(20px);
            }

            .header__mid {
                display: flex;
                justify-content: space-between;
            }

            .header__logo {
                display: flex;
            }

            .header__menu-mobile {
                z-index: 1;
            }

            .danh-muc-res-icon {
                display: block;
            }

            .close-icon-mobile {
                display: block;
            }

            .danh-muc {
                display: none;
            }

            .showDanhMucInput:checked+.danh-muc {
                display: block;
            }

            .showDanhMucInput:checked~.danh-muc {
                display: block;
            }


            .product {
                width: 100%;
            }



        }

        @media screen and (max-width:450px) {
            .header__social-network {
                display: none;
            }

            .header {
                padding: 0px 10px;
            }

            .header__search {
                margin-left: -40px;
            }

            .header__menu-res-icon {
                display: block;
            }

            .header__logo img {
                display: none;
            }

            .header__cart {
                transform: translateY(20px);
            }

            .header__mid {
                display: flex;
                justify-content: space-between;
            }

            .header__logo {
                display: flex;
            }

            .danh-muc {
                display: none;
                width: 80%;
                background-color: #fff;
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                overflow: auto;
                transition: left 1s ease;
                z-index: 1;
            }



            .product {
                width: 100%;
            }

            .row-product {
                padding-right: 50px;
            }


            .container {
                padding: 10px;
            }
        }
    </style>
</head>

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
$connect = mysqli_connect('localhost', 'root', '', 'project1');
mysqli_set_charset($connect, 'utf8');

if (isset($_GET['FK_id_category'])) {
    $page = 1;

    $search = ' ';

    if (isset($_GET['search'])) {
        $search = $_GET['search'];
    }

    $FK_id_category = $_GET['FK_id_category'];

    $sql = "SELECT product.*, 
    brand.brand_name as brand_name
    FROM product
    JOIN brand ON product.FK_id_brand = brand.id_brand
    WHERE name LIKE '%$search%' AND FK_id_category = '$FK_id_category'";

    $result = mysqli_query($connect, $sql);

    $each = mysqli_fetch_array($result);
} else {
    $page = 1;

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }

    $sql_number_of_products = "SELECT count(*) FROM product";
    $product_count_array = mysqli_query($connect, $sql_number_of_products);
    $product_count_result = mysqli_fetch_array($product_count_array);

    $product_count = $product_count_result['count(*)'];

    $products_per_page = 8;

    $total_pages = ceil($product_count / $products_per_page);

    $offset = $products_per_page * ($page - 1);

    $search = ' ';

    if (isset($_GET['search'])) {
        $search = $_GET['search'];
    }

    $sql = "SELECT product.*, 
    brand.brand_name as brand_name
    FROM product
    JOIN brand ON product.FK_id_brand = brand.id_brand
    WHERE name LIKE '%$search%'
    LIMIT $products_per_page 
    OFFSET $offset";

    $result = mysqli_query($connect, $sql);

    $each = mysqli_fetch_array($result);
}
?>
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



    <div class="danh-muc-pc">
        <label for="showDanhMuc" class="close-icon-mobile">
            <i class='bx bx-x'></i>
        </label>
        <a href="?FK_id_category=1">Thuốc</a>
        <a href="?FK_id_category=2">Thực phẩm chức năng</a>
        <a href="?FK_id_category=3">Dụng cụ cá nhân</a>
        <a href="?FK_id_category=4">Dụng cụ y tế</a>
        <a href="?FK_id_category=5">Đồ cho em bé</a>
        <a href="?FK_id_category=6">Đồ cho người già</a>
    </div>
    <div class="container">

        <input type="checkbox" id="showDanhMuc" class="showDanhMucInput">
        <label class="danh-muc-res-icon" for="showDanhMuc">
            <i class='bx bx-filter-alt'></i>
        </label>
        <div class="danh-muc">
            <label for="showDanhMuc" class="close-icon-mobile">
                <i class='bx bx-x'></i>
            </label>
            <h2>Danh mục</h2>
            <hr>
            <a href="?FK_id_category=1">Thuốc</a>
            <a href="?FK_id_category=2">Thực phẩm chức năng</a>
            <a href="?FK_id_category=3">Dụng cụ cá nhân</a>
            <a href="?FK_id_category=4">Dụng cụ y tế</a>
            <a href="?FK_id_category=5">Đồ cho em bé</a>
            <a href="?FK_id_category=6">Đồ cho người già</a>
        </div>
        <div class="article__product-list">
            <div class="row-product">
                <?php foreach ($result as $each) { ?>
                    <div class="product">
                        <div class="product-list-items">
                            <a href="../?action=show&id=<?php echo $each['id'] ?>"> <img src="../<?php echo $each['photo'] ?>" alt=""></a>
                            <div class=" ttsp">
                                <h3><a href="../index.php?action=show&id=<?php echo $each['id'] ?>"><?php echo $each['name'] ?></a></h3>
                            </div>
                            <div class="saleall">
                                <p class="sale">200.000vnđ</p>
                                <p>
                                    <td><?php echo $each['price'] ?> VND</td>
                                </p>
                            </div>
                            <div class="button_cart">
                                <a href="" class="bttn"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href="" class="add">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="pagination">
                <ul>
                    <?php
                    if (isset($total_pages) && $total_pages > 0) {
                        for ($i = 1; $i <= $total_pages; $i++) {
                            echo "<li><a href='?page=$i&search=$search'>$i</a></li>";
                        }
                    } elseif (isset($search) && isset($FK_id_category) && !isset($total_pages)) {
                        echo "<li><a href='?search=$search&FK_id_category=$FK_id_category'></a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>

</body>

</html>