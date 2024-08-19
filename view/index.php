
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

    <link rel="icon" type="image/png" href="./assest/image/logo.png" style="width:100%; height:auto;">

    <title>LongAnPharmacy HCM</title>
    <link rel="stylesheet" href="./assest/css/styles.css">
    <link rel="stylesheet" href="./assest/css/ress.css">

</head>
<style>
    .free-shipping-icons {
        padding-bottom: 30px;
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
$connect = mysqli_connect('localhost', 'root', '', 'project1');
mysqli_set_charset($connect, 'utf8');
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
                <a href="./view/view_cart.php">
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

    <main>
        <div class="container_banner">
            <div class="banner">
                <div class="main-image">
                    <img id="banner" src="" alt="">
                </div>
                <div class="side-images">
                    <img src="./assest/image/1.webp" alt="Ảnh phụ 1">
                    <img src="./assest/image/3.webp" alt="Ảnh phụ 2">
                </div>
            </div>
        </div>
        </div>
       
            <!-- <div class="category">

                <div class="ct">

                
                    <div class="ct__all">
                        <div class="ct__1">
                            <img src="./assest/image//zyro-image (5).png" alt="">
                            
                        </div>

                    </div>
                    <div class="ct__all">
                        <div class="ct__1">
                            <img src="./assest/image/zyro-image (6).png" alt="">
                           
                        </div>

                    </div>
                    <div class="ct__all">
                        <div class="ct__1">
                            <img src="./assest/image/zyro-image (7).png" alt="">
                            
                        </div>

                    </div>
                    <div class="ct__all">
                        <div class="ct__1">
                            <img src="./assest/image/zyro-image (8).png" alt="">
                          
                        </div>

                    </div>
                </div>
                </marquee><br>
            </div>
        </div> -->
        <section class="products-section">
            <div class="container">
               <?php
                 $sql = "SELECT * From product 
                 Where 
                 FK_id_category = 1";
             
                 $result = mysqli_query($connect, $sql);
             
                 $each = mysqli_fetch_array($result);
                 
               ?>
            <h2>Thuốc </h2>
                <div class="products-grid">
                    <?php foreach ($result as $each) { ?>
                        <div class="product-box">
                            <a href="#" class="btnnn">-20%</a>
                           <a href="?action=show&id=<?php echo $each['id'] ?>"> <img class="sanpham"  src="<?php echo $each['photo'] ?>" alt=""></a>
                            <div class=" ttsp">
                                <h3><a href="?action=show&id=<?php echo $each['id'] ?>"><?php echo $each['name'] ?></a></h3>
                            </div>
                            <div class="saleall">
                                <p class="sale">200.000vnđ</p>
                                <p>
                                    <td><?php echo $each['price'] ?> VND</td>
                                </p>
                            </div>
                            <a href="?action=add_to_cart&id=<?php echo $each['id'] ?>"" class="bttn"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            <a class="btn" href=" ?action=buy_now&id=<?php echo $each['id'] ?>">
                                Mua Ngay
                            </a>
                        </div>
                    <?php } ?>
                </div>
        </section>
        <section class="products-section">
            <div class="container">
            <?php
                 $sql = "SELECT * From product Where FK_id_category = 2";
             
                 $result = mysqli_query($connect, $sql);
             
                 $each = mysqli_fetch_array($result);
                 
               ?>
                <h2>Thực phẩm chức năng </h2>
                <div class="products-grid">
                    <?php foreach ($result as $each) { ?>
                        <div class="product-box">
                            <a href="#" class="btnnn">-20%</a>
                            <a href="?action=show&id=<?php echo $each['id'] ?>"> <img  src="<?php echo $each['photo'] ?>" alt=""></a>
                            <div class=" ttsp">
                                <h3><a href="?action=show&id=<?php echo $each['id'] ?>"><?php echo $each['name'] ?></a></h3>
                            </div>
                            <div class="saleall">
                                <p class="sale">200.000vnđ</p>
                                <p>
                                    <td><?php echo $each['price'] ?> VND</td>
                                </p>
                            </div>
                            <a href="?action=add_to_cart&id=<?php echo $each['id'] ?>"" class="bttn"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            <a class="btn" href=" ?action=buy_now&id=<?php echo $each['id'] ?>">
                                Mua Ngay
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <div class="banner-container">
            <div class="banner2">
                <div class="bannerchinh">
                    <img src="./assest/image/4.webp" alt="Ảnh chính">
                    <img src="./assest/image/5.webp" alt="Ảnh chính">

                </div>

                
            </div>
        </div>

        <section class="products-section">
            <div class="container">
            <?php
                 $sql = "SELECT * From product Where FK_id_category = 5";
             
                 $result = mysqli_query($connect, $sql);
             
                 $each = mysqli_fetch_array($result);
                 
               ?>
                <h2>Đồ cho em bé</h2>
                <div class="products-grid">
                    <?php foreach ($result as $each) { ?>
                        <div class="product-box">
                            <a href="#" class="btnnn">-20%</a>
                            <a href="?action=show&id=<?php echo $each['id'] ?>"> <img  src="<?php echo $each['photo'] ?>" alt=""></a>
                            <div class=" ttsp">
                                <h3><a href="?action=show&id=<?php echo $each['id'] ?>"><?php echo $each['name'] ?></a></h3>
                            </div>
                            <div class="saleall">
                                <p class="sale">200.000vnđ</p>
                                <p>
                                    <td><?php echo $each['price'] ?> VND</td>
                                </p>
                            </div>
                            <a href="?action=add_to_cart&id=<?php echo $each['id'] ?>"" class="bttn"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            <a class="btn" href=" ?action=buy_now&id=<?php echo $each['id'] ?>">
                                Mua Ngay
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="products-section">
            <div class="container">
            <?php
                 $sql = "SELECT * From product Where FK_id_category = 6";
             
                 $result = mysqli_query($connect, $sql);
             
                 $each = mysqli_fetch_array($result);
                 
               ?>
                <h2>Đồ cho người già</h2>
                <div class="products-grid">
                    <?php foreach ($result as $each) { ?>
                        <div class="product-box">
                            <a href="#" class="btnnn">-20%</a>
                            <a href="?action=show&id=<?php echo $each['id'] ?>"> <img  src="<?php echo $each['photo'] ?>" alt=""></a>
                            <div class=" ttsp">
                                <h3><a href="?action=show&id=<?php echo $each['id'] ?>"><?php echo $each['name'] ?></a></h3>
                            </div>
                            <div class="saleall">
                                <p class="sale">200.000vnđ</p>
                                <p>
                                    <td><?php echo $each['price'] ?> VND</td>
                                </p>
                            </div>
                            <a href="?action=add_to_cart&id=<?php echo $each['id'] ?>"" class="bttn"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            <a class="btn" href=" ?action=buy_now&id=<?php echo $each['id'] ?>">
                                Mua Ngay
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="free-shipping-icons">
                <div class="iconship">
                    <img src="./assest/image/xetai.png">

                    <div class="titleship">
                        <h3>Miễn phí vận chuyển</h3>
                        <label>Chỉ áp dụng cho trêm 300.000vnđ</label>
                    </div>
                </div>

                <div class="iconship">
                    <img src="./assest/image/tien.png">

                    <div class="titleship">
                        <h3>Thuốc chất lượng </h3>
                        <label>Cam kết 100% thuốc chuẩn</label>
                    </div>
                </div>
                <div class="iconship">
                    <img src="./assest/image/diadiem.png">
                    <div class="titleship">
                        <h3>Địa điểm </h3>
                        <label>Phân bố khắp mọi địa phương</label>
                        <label></label>
                    </div>
                </div>
                <div class="iconship">
                    <img src="./assest/image/lienhe.png">
                    <div class="titleship">
                        <h3>Liên hệ nhanh chóng </h3>
                        <label>Mọi thắc mắc đều được nhân viên tư vấn hợp lý</label>
                    </div>
                </div>
            </div>
        </div>
        <section class="products-section">
            <div class="container">
            <?php
                 $sql = "SELECT * From product Where FK_id_category = 4";
             
                 $result = mysqli_query($connect, $sql);
             
                 $each = mysqli_fetch_array($result);
                 
               ?>
                <h2>Dung cụ y tế</h2>
                <div class="products-grid">
                    <?php foreach ($result as $each) { ?>
                        <div class="product-box">
                            <a href="#" class="btnnn">-20%</a>
                            <a href="?action=show&id=<?php echo $each['id'] ?>"> <img  src="<?php echo $each['photo'] ?>" alt=""></a>
                            <div class=" ttsp">
                                <h3><a href="?action=show&id=<?php echo $each['id'] ?>"><?php echo $each['name'] ?></a></h3>
                            </div>
                            <div class="saleall">
                                <p class="sale">200.000vnđ</p>
                                <p>
                                    <td><?php echo $each['price'] ?> VND</td>
                                </p>
                            </div>
                            <a href="?action=add_to_cart&id=<?php echo $each['id'] ?>"" class="bttn"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            <a class="btn" href=" ?action=buy_now&id=<?php echo $each['id'] ?>">
                                Mua Ngay
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="products-section">
            <div class="container">
            <?php
                 $sql = "SELECT * From product Where FK_id_category = 3";
             
                 $result = mysqli_query($connect, $sql);
             
                 $each = mysqli_fetch_array($result);
                 
               ?>
                <h2>Dung cụ cá nhân</h2>
                <div class="products-grid">
                    <?php foreach ($result as $each) { ?>
                        <div class="product-box">
                            <a href="#" class="btnnn">-20%</a>
                            <a href="?action=show&id=<?php echo $each['id'] ?>"> <img  src="<?php echo $each['photo'] ?>" alt=""></a>
                            <div class=" ttsp">
                                <h3><a href="?action=show&id=<?php echo $each['id'] ?>"><?php echo $each['name'] ?></a></h3>
                            </div>
                            <div class="saleall">
                                <p class="sale">200.000vnđ</p>
                                <p>
                                    <td><?php echo $each['price'] ?> VND</td>
                                </p>
                            </div>
                            <a href="?action=add_to_cart&id=<?php echo $each['id'] ?>"" class="bttn"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            <a class="btn" href=" ?action=buy_now&id=<?php echo $each['id'] ?>">
                                Mua Ngay
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <div class="separator_tintuc"></div>

        <div class="container">
            <?php
            $sql = "SELECT * FROM news limit 3";
            
                $result = mysqli_query($connect, $sql);
            
                $each = mysqli_fetch_array($result);?>
            <div class="tintuc">
                <h2>Tin tức</h2>
                <div class="tinall">
              
                <?php foreach($result as $each) { ?>
                    <div class="tincon">
                    <a href="?action=show_news&id=<?php echo $each['id_news'] ?>">
                       <img  src="./<?php echo $each['photo']?>" alt="">
                        <div class="date">
                            <p>Ngày đăng:
                            <p class="datedang"><?php echo $each['date']?></p>
                            </p>
                        </div>
                        <p class="titletin"><?php echo $each['name']?></p>
                        <div class="plus">
                       <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            <p>Đọc thêm</p>
                        </div>
                        </a>
                    </div>
                    <?php } ?>
                    
                </div>
                  
                       
    </main>


    <div class="separator"></div>

    <footer class="footer1">
        <div class="container">

            <div class="footer">
                <div class="footer-column">
                    <div class="logofooter">
                        <img src="./assest/image/logo.png" alt="" width="47%">
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
                                <img src="./assest/image/11111.png" alt="">
                                <div class="titlefooter">
                                    <h3>email</h3>
                                    <p>NguyenPhucLong25122004@gmail.com</p>

                                </div>

                            </div>
                            <div class="visit1">
                                <img src="./assest/image/zyro-image (1).png" alt="">
                                <div class="titlefooter">
                                    <h3>Địa chỉ </h3>
                                    <p>132aĐườngSố14Phường11QuậnGòVấp
                                        Tp.HCM</p>

                                </div>

                            </div>

                            <div class="visit1">
                                <img src="./assest/image/zyro-image (2).png" alt="">
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
                            <img src="./assest/image/zyro-image (1).png" alt="">
                            <div class="titlefooter">
                                <h3>email</h3>
                                <p>NguyenPhucLong.com</p>

                            </div>

                        </div>
                        <div class="visit1">
                            <img src="./assest/image/zyro-image (1).png" alt="">
                            <div class="titlefooter">
                                <h3>Địa chỉ </h3>
                                <p>132aĐườngSố14Phường11QuậnGòVấp
                                    Tp.HCM</p>

                            </div>

                        </div>

                        <div class="visit1">
                            <img src="./assest/image/zyro-image (2).png" alt="">
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


    <!--footer-->



    <script>
        var hinh = [
            "./assest/image/3.webp",
            "./assest/image/2.webp",
            "./assest/image/1.webp",
        ];


        var index = 0;

        function next() {
            index++;
            if (index == hinh.length) index = 0;
            document.getElementById('banner').src = hinh[index];
            document.getElementById("0").style.color = 'white';
            document.getElementById("1").style.color = 'white';
            document.getElementById("2").style.color = 'white';
            document.getElementById(index).style.color = '#1598d4'
        }
        setInterval("next()", 2000)



        $('.products-grid').slick({
            infinite: true,
            slidesToShow: 5, // Số sản phẩm hiển thị trên một slide
            slidesToScroll: 1,
            prevArrow: '<button type="button" class="slick-prev">Previous</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>',
            responsive: [{
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 2,
                    }
                }
            ]
        })
    </script>
</body>

</html>