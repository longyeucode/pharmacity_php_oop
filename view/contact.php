<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assest/image/logo.png" style="width:100%; height:auto;">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="../assest/css/styles.css">
    
    <title>LongAnPharmacy HCM</title>
    <style>
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

        .header__social-network > .bx {
        line-height: 56px;
        color: white;
        font-size: 24px;
        }

        .header__social-network > .bx:hover {
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

        .header__sign-up > a::after {
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

        .header__logo img{
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

        .header__cart .bx{
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

        .header__menu ul > li {
        list-style: none;
        padding: 0px 13px;
        position: relative; 
        }

        .header__menu ul li a {
        text-decoration: none;
        color: white;
        font-size: 14px;
        }

        .header__menu ul > li::after {
        content: "";
        position: absolute;
        height: 2px;
        width: 0;
        background-color: rgb(255, 255, 255);
        bottom: -5px;
        left: 0;
        transition: width 0.3s ease; 
        }

        .header__logo-mobile img{
        height: 130px;
        transform: translateX(50%);
        }

        .header__menu ul > li:hover::after {
        width: 100%;
        }

        /* ---------------- nút check box ------------------ */
        #header__menu-mobile--input {
        display: none;
        }

        .header__menu-res-icon {
        display: none;
        }

        .header__menu-res-icon .bx{
        transform: translateY(50%);
        color: white;
        font-size: 36px;
        }

        .header__menu-res-icon ~ .header__menu-overlay {
        display: none;
        }

        .header__menu-res-input:checked ~ .header__menu-overlay {
        display: block;
        }

        .header__menu-mobile {
        transform: translateX(-100%);
        transition: transform 0.3s ease-in-out;
        }

        .header__menu-res-input:checked ~ .header__menu-mobile {
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
        
        .contact-container {
            overflow: hidden    ;
        display: flex;
        position: relative;
        justify-content: space-between;
        max-width: 70%;
        margin: 40px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        border: 2px  #000;
        box-shadow: 0px 5px 15px rgba(0,0,0,0.3);
        }

    
        .banner_lienhe img{
            width: 100%;
            height: 400px;
        }

        .vertical-line{
            border-left: 1px solid #000; 
            height: 535px; 
            position: absolute; 
           
            display: none;
            left: 50%; 
            transform: translateX(-50%); 
        }

        .contract_lienhe{
        margin-bottom: 30px;
        }

        .contract_lienlac{
        margin-bottom: 30px;
        }
        .contract_lienlac h2{
            color: #0056b3;
        }
        .contract_lienlac label{
            color: #0056b3;
        }
        .contact-info{
        flex-basis: calc(50% - 20px); 
        padding: 10px;
        }

        .contact-info-item{
        display: flex;
        margin-bottom: 30px
        }


        .contact-form {
        flex-basis: calc(50% - 50px);
        padding: 10px;
        }


        .contact-info h2 {
        color:#0056b3;
        font-size: 24px;
        margin-bottom: 10px;
        }

        .contact-info i {
        margin-right: 10px;
        font-size: 40px; 
        vertical-align: middle;
        color: #0056b3;
        }


        .contact-form form {
        display: flex;
        flex-direction: column;
        }

        .contact-form label {
        margin-bottom: 5px;
        font-weight: bold;
        color: #0056b3;
        }

        .contact-form input,
        .contact-form textarea {
        padding: 8px;
        margin-bottom: 30px;
        border-radius: 5px;
        border: 1px solid #ccc;
        }

        .contact-form input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;    
        transition: background-color 0.3s ease;
    font-size: 15px; 
    width: 100px;   
    }

        .contact-form input[type="submit"]:hover {
        background-color: #0056b3;
        }

        .map{
        padding: 40px 100px 100px ;
        }


        @media screen and (max-width:1100px) {
            .header__menu-res-icon {
                display: block;
            }

            .header__logo img{
                display: none;
            }

            .header__menu {
                display: none;
            }

            .header__search{
                transform: translateY(50%);
            }

            .header__cart{
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
                width: calc(50% - 20px); /* Hiển thị hai sản phẩm trên mỗi dòng */
            }
            
            .contact-info,
            .contact-form {
                flex-basis: 100%;
                margin-bottom: 20px;
            }

            .map{
                width: 100%;
                height: 500px;
            }


                
        }

    @media screen and (max-width:820px) {
        .header__logo img{
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

        .header__cart{
            transform: translateY(20px);
        }

        .header__mid {
            display: flex;
            justify-content: space-between;
        }

        .header__logo {
            display: flex;
        }

        .danh-muc-res-icon{
            display: block;
        }

        .close-icon-mobile{
            display: block;
        }

        .danh-muc {
            display: none; 
        }
        

        .showDanhMucInput:checked + .danh-muc {
            display: block;
        }

        .showDanhMucInput:checked ~ .danh-muc {
            display: block;
        }

        
        .product {
            width: 100%;
        }

        .vertical-line{
            display: none;
        }

        .contact-container {
            flex-direction: column; 
            align-items: center;     
            box-shadow: none;   
            max-width: 100%;
        }

        .banner_lienhe img{
            height: 200px;
        }

        .map{
            padding: 40px  ;
            height: 300px   ;
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

        .header__logo img{
            display: none;
        }

        .header__cart{
            transform: translateY(20px);
        }

        .header__mid {
            display: flex;
            justify-content: space-between;
        }

        .header__logo {
            display: flex;
        }
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
</head>
<body>
<?php $search = ''  ?>
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
                <a href="./index.php"><img src="./assest/image/logo.png" alt=""></a>
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
                            <li><a href="./index.php">Trang chủ</a></li>
                            <li><a href="./view/product.php">Sản phẩm</a></li>
                            <li><a href="./view/news.php">Tin tức</a></li>
                            <li><a href="./view/about.php">Giới thiệu</a></li>
                            <li><a href="./view/contact.php">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header__cart">
                <a href="../view/view_cart.php">
                    <i class='bx bxs-cart'></i>
                    <span><?php echo $totalQuantity; ?></span>
                </a>
            </div>
            <input type="checkbox" id="header__menu-mobile--input" class="header__menu-res-input">

            <label class="header__menu-overlay" for="header__menu-mobile--input"></label>

            <div class="header__menu-mobile">
                <div class="header__logo-mobile">
                <a href="./index.php"><img src="./assest/image/logo.png" alt=""></a>
                </div>
                <label class="header__menu-moble-close" for="header__menu-mobile--input">
                    <i class='bx bx-x'></i>
                </label>

                <ul class="header__menu-mobile--list">
                    <li><a href="./index.php" class="header__menu-mobile-link">Trang chủ</a>
                    </li>
                    <li><a href="./view/product.php" class="header__menu-mobile-link">Sản phẩm</a>
                    </li>
                    <li><a href="./view/news.php" class="header__menu-mobile-link">Tin tức</a>
                    </li>
                    <li><a href="./view/about.php" class="header__menu-mobile-link">Giới thiệu</a>
                    </li>
                    <li><a href="./view/contact.php" class="header__menu-mobile-link">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
        
    <div class="contact-container">
        <div class="contact-info">
            <div class="contract_lienhe">
                <h2>Liên Hệ Với Chúng Tôi</h2>
                
            </div>
            <div class="contact-info-item">
                <!-- <div class="icon-earth">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                </div> -->
                <div class="contract_adress">
                    <h2>Địa Chỉ</h2>
                    <p> Maps: 132a Đường Số 14 Phường 11 Quận Gò Vấp Tp.HCM</p>
                    <p></p>
                </div>
            </div>   
            <div class="contact-info-item">
                <!-- <div class="icon-earth">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div> -->
                <div class="container_phone">
                    <h2>Số Điện Thoại</h2>
                    
                    <p> +84 352838057</p>
                </div>
            </div>
            <div class="contact-info-item">
                <!-- <div class="icon-earth">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div> -->
                <div class="contract_Email">
                    <h2>Email</h2>
                    <p>lapcy1782@gmail.com</p>
                   
                </div>
            </div>
            <div class="contact-info-item">
                <!-- <div class="icon-earth">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                </div> -->
                <div class="contract_hours">
                    <h2>Office Hours</h2>
                    <p>Thứ 2 -Thứ 7: 9:00 AM - 8:00 PM</p>
                    <p>Sunday: 11:00 AM - 3:00 PM</p>
                </div>
            </div>
        </div>

        <div class="vertical-line"></div>

        <div class="contact-form">
            <div class="contract_lienlac">
                <h2>Nhập thông tin để được tư vấn miễn phí</h2>
                
            </div>
            <form action="#" method="post">
                <label  for="name">Họ và Tên</label >
                <input type="text" id="name" placeholder="Nhập tên của bạn...." >
                <label for="name">Số Điện Thoại</label>
                <input type="text" id="name" placeholder="Nhập số của bạn...." >
                <label for="name">Email</label>
                <input type="email" id="Email" name="email" placeholder="Nhập email của bạn...." required>
                <label for="name">Ghi Chú</label>
                <textarea name="message" id="Ghi Chú" placeholder="Nội Dung" required></textarea>
                <input class="sent_input" type="submit" value="Gửi">
            </form>    
        </div>
    </div>

    <hr>
    
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.7206590620144!2d106.65846517481882!3d10.832676258154095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752909af1d3ff9%3A0x31e3c3ec6cee3436!2zMTMyYSDEkMaw4budbmcgU-G7kSAxNywgUGjGsOG7nW5nIDExLCBHw7IgVuG6pXAsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCA3MDAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1700407929962!5m2!1svi!2s" width="100%" height="700px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</body>
<footer class="footer1">
        <div class="container">

            <div class="footer">
                <div class="footer-column">
                    <div class="logofooter">
                        <img src="../assest/image/logo.png" alt="" width="47%">
                    </div>
                    <div class="chinhsach">
                        <ul>
                            <li><a href="">Hệ thống cửa hàng </a></li>
                            <li><a href="">Giấy phép kinh doanh</a></li>
                            <li><a href="">Chính sách bảo mật</a></li>
                            <li><a href="">Phương thức thanh toán </a></li>
                            <li><a href="">Chính sách bảo mật</a></li>
                            <li><a href="">Phương thức thanh toán </a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-column">
                    <h3 class="header_footer">Danh mục</h3>
                    <ul>
                        <li><a href="#">Dược phẩm</a></li>

                        <li><a href="#">Thực phẩm chức năng</a></li>
                        <li><a href="#">Mẹ và bé</a></li>
                        <li><a href="#">Chăm sóc sắc đẹp</a></li>
                        <li><a href="#"> Thiết bị y tế</a></li>
                        <li><a href="#">Thực phẩm chức năng</a></li>


                    </ul>
                </div>

                <div class="footer-column">
                    <h3 class="header_footer">Hỗ trợ khách hàng </h3>
                    <ul>
                        <li><a href="#"> Điều kiện giao dịch chung</a></li>
                        <li><a href="#">Hướng dẫn mua hàng online</a></li>
                        <li><a href="#">Lịch sử đơn hàng</a></li>
                        <li><a href="#">Tư vấn sử dụng thuốc</a></li>
                        <li><a href="#">đánh giá chất lượng</a></li>
                        <li><a href="#">Vấn đề thanh toán</a></li>

                    </ul>
                </div>

                <div class="footer-column">
                    <div class="footerlogo">
                        <div class="visit">
                            <div class="visit1">
                                <img src="../assest/image/11111.png" alt="">
                                <div class="titlefooter">
                                    <h3>email</h3>
                                    <p>NguyenPhucLong25122004@gmail.com</p>

                                </div>

                            </div>
                            <div class="visit1">
                                <img src="../assest/image/zyro-image (1).png" alt="">
                                <div class="titlefooter">
                                    <h3>Địa chỉ </h3>
                                    <p>132aĐườngSố14Phường11QuậnGòVấp
                                        Tp.HCM</p>

                                </div>

                            </div>

                            <div class="visit1">
                                <img src="../assest/image/zyro-image (2).png" alt="">
                                <div class="titlefooter">
                                    <h3>Liên hệ </h3>
                                    <p class="sđt">+843456709 </p>
                                    <p> lapcy1782@gmail.com</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footerlogo-mobile">

                <div class="footer-column">
                    <div class="visit">
                        <div class="visit1">
                            <img src="../assest/image/zyro-image (1).png" alt="">
                            <div class="titlefooter">
                                <h3>email</h3>
                                <p>NguyenPhucLong.com</p>

                            </div>

                        </div>
                        <div class="visit1">
                            <img src="../assest/image/zyro-image (1).png" alt="">
                            <div class="titlefooter">
                                <h3>Địa chỉ </h3>
                                <p>132aĐườngSố14Phường11QuậnGòVấp
                                    Tp.HCM</p>

                            </div>

                        </div>

                        <div class="visit1">
                            <img src="../assest/image/zyro-image (2).png" alt="">
                            <div class="titlefooter">
                                <h3>Liên hệ </h3>
                                <p class="sđt">+843456709 </p>
                                <p> lapcy1782@gmail.com</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>