
<?php
session_start();
$totalQuantity = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product) {
        if (isset($product['quantity'])) {
            $totalQuantity += $product['quantity'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="icon" type="image/png" href="./assest/image/logo.png" style="width:100%; height:auto;">

    <link rel="stylesheet" href="./assest/css/styles.css">
    
    <!-- <link rel="stylesheet" href="./assest/css/res.css"> -->
    <style>
      
        .btn-primary{
            position: relative;
          top:10px;
            color: #ffffff;
            border-radius: 10px;
            padding: 5px;
            background-color:#0072bc;
            text-decoration: none;
        }
        .btn-success{
            position: relative;
          top:10px;
            color: #ffffff;
            border-radius: 10px;
            padding: 5px;
            background-color:#0072bc;
            text-decoration: none;
        }
      @media screen and (max-width:1100px) {
    .article {
        padding: 50px 50px;
    }

    .article__product-detail {
        display: flex;
        flex-direction: column;
    }

    .article__product-detail-img {
        width: 100%;
    }

    .article__product-infomation {
        width: 100%;
    }

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

}

@media screen and (max-width:890px) {
    .article__more-product-detail {
        flex-wrap: wrap;
    }
}

@media screen and (max-width:820px) { 
    .header__logo img{
        display: none;
    }

    .article {
        padding: 20px 10px;
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
            <a href="../index.php"><img src="./assest/image/logo.png" alt=""></a>
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
    <div class="article">
        <div class="article__product-detail">
            <div class="article__product-detail-img">
                <img src="<?php echo $each['photo'] ?>" alt="">
            </div>
            <div class="article__product-infomation">
                <div class="article__product-name">
                    <h3><?php echo $each['name'] ?></h3>
                </div>
                <div class="article__price-product">
                    <span><?php echo $each['price'] ?> đ / Sản phẩm</span>
                </div>
                <div class="article__description-product">
                    <p><?php echo $each['description'] ?></p>
                </div>
                <div class="article__brand-product">
                    <p>Thương hiệu: <b><?php echo $each['brand_name'] ?></b></p>
                </div>
                <?php
                
                ?>
                <div class="article__update-quantity--product">
                    <div class="quantity-controls">
                        
                        <i style="color:gray;">Chỉnh số lượng tại giỏ hàng</i>

                    </div>
                </div>
                <div class="article__addtocart-product">
                    <a href="index.php?action=add_to_cart&id=<?php echo $each['id'] ?>">
                        <p>Thêm vào giỏ hàng</p>
                    </a>    
                    <a  class="add-to-cart-button" href="index.php?action=buy_now&id=<?php echo $each['id'] ?>"">
                        <p>Mua ngay</p>
                    </a>
                </div>
                <div class="article__endow-product">
                    <div class="article__endeow-product--item">
                        <p>Đóng gói cẩn thận</p>
                        <i class='bx bxs-package'></i>
                    </div>
                    <div class="article__endeow-product--item">
                        <p>Sản phẩm đạt chuẩn</p>
                        <i class='bx bx-shield-quarter'></i>
                    </div>
                    <div class="article__endeow-product--item">
                        <p>Tư vấn trực tuyến 24/7</p>
                        <i class='bx bx-headphone'></i>
                    </div>
                </div>
                <div class="article__attention-product">
                    <i>Giá chỉ áp dụng khi đặt hàng qua App/Web LongAnPharmacy</i>
                </div>
            </div>
        </div>
        <div class="article__description-product--detail">
            <div class="section">
                <h5>Thành phần</h5>
                <p>Mỗi hai viên có chứa: vitamin C: 1000mg; vitamin B2: 2mg. Phụ liệu: gelatin, caramel, titan dioxid vừa đủ hai viên.</p>
            </div>
            <div class="section">
                <h5>Công dụng</h5>
                <p>Bổ sung vitamin C, vitamin B2 cho cơ thể; hỗ trợ duy trì sức khỏe của da, hỗ trợ giảm thâm da; giúp da sáng mịn.</p>
            </div>
            <div class="section">
                <h5>Cách dùng và Liều dùng</h5>
                <p>Người lớn: uống 2 viên/ngày (uống với nước hoặc nước ấm).</p>
            </div>
            <div class="section">
                <h5>Đối tượng sử dụng</h5>
                <p>Người có nhu cầu làm đẹp da, người sử dụng nhiểu rượu bia, thuốc lá.</p>
            </div>
            <div class="section">
                <h5>Thận trọng</h5>
                <p>Dừng uống khi phát hiện bất thường.
                    Không sử dụng cho người mẫn cảm
                    với bất cứ thành phần nào của sản phẩm.
                    Tham khảo ý kiến bác sỹ trước khi dùng
                    nếu bạn đang dùng thuốc khác hoặc đang điều
                    trị tại bệnh viện hoặc đang mang thai.
                    Để xa tầm tay trẻ em. Sử dụng ngay sau khi mở bao bì.
                    Đóng túi ngay sau khi sử dụng.
                    Không dùng cho trẻ dưới 9 tuổi.</p>
                <p>Bảo quản: Nơi khô ráo, thoáng mát, tránh ánh sáng mặt trời.

                    Số tiếp nhận đăng ký công bố sản phẩm: 5360/2019/ĐKSP của Cục An Toàn Thực Phẩm – Bộ Y Tế.
                    <br>

                    Cơ sở phân phối: Công ty Cổ phần Belie
                    <br>
                    Địa chỉ: Tầng 1, số 170 Đê La Thành, phường Ô Chợ Dừa, Quận Đống Đa, Thành phố Hà Nội, Việt Nam.
                    <br>

                    Sản xuất bởi: Facelabo Co. Ltd., Fukuroi Factory
                    <br>
                    Địa chỉ: 1934-2, Kuno, Fukuroi-shi, Shizuoka, Nhật Bản
                    <br>

                    Thực phẩm này không phải là thuốc, không có tác dụng thay thế thuốc chữa bệnh.
                </p>
            </div>
        </div>

        <div class="comment-section">
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

    $products_per_page = 10;

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

    LIMIT $products_per_page 
    OFFSET $offset";



    $result = mysqli_query($connect, $sql);

    $each = mysqli_fetch_array($result);
    
}
?>
<br>
<br>
            <h2>Bình luận</h2>

            <form action="?action=comment" method="POST">
                <input type="hidden" name="id" value="<?php echo $each['id'] ?>">

                <?php if (isset($_SESSION['name'])) : ?>
                    <div class="mb-3">
                        <label for="name">Tên người bình luận: <?php echo $_SESSION['name']; ?></label>
                        <input type="hidden" name="name" value="<?php echo $_SESSION['name']; ?>">

                    </div>
                    <div class="mb-3">
                    <?php
                    $date = date("Y-m-d H:i:s");
                    ?>
                    <input type="hidden" name="date" value="<?php echo $date; ?>">
                    </div>
                   
                    <div class="mb-3">
                        <label for="content">Nội dung bình luận:</label>
                        <textarea name="content" id="content" class="form-control"></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="FK_id_product"></label>
                        <input type="hidden" name="FK_id_product" class="form-control" value="<?php echo $each['id'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng bình luận</button>
                <?php else : ?>
                    <p class="mb-3">Đăng ký tài khoản hoặc đăng nhập để bình luận:</p>
                    <a href="?action=sign_up" class="btn btn-primary">Đăng ký tại đây</a>
                    <a href="?action=sign_in" class="btn btn-success">Đăng nhập tại đây</a>
                <?php endif; ?>
            </form>
        </div>


        <h3 class="mt-4" style="padding: 20px 0px;">Bình luận:</h3>
        <?php
        $sql_comments = "SELECT * FROM comment WHERE FK_id_product = " . $each['id'];
        $result_comments = mysqli_query($connect, $sql_comments);
        while ($comment = mysqli_fetch_assoc($result_comments)) {
            echo $comment['name'];
            echo '<br>';
            echo $comment['date'];
            echo '<br>';
            echo $comment['content'];
            echo '<hr>';
            echo '<br>';
        }
        ?>
        <br>
        <h2 class="more-product">Sản phẩm khác</h2>

        <br>
    
    <section class="products-section">
            <div class="container">
            <?php
                 $sql = "SELECT * From product Where FK_id_category = 1";
             
                 $result = mysqli_query($connect, $sql);
             
                 $each = mysqli_fetch_array($result);
                 
               ?>
                <div class="products-grid">
                    <?php foreach ($result as $each) { ?>
                        <div class="product-box">
                            <a href="#" class="btnnn">-20%</a>
                          <a href="?action=show&id=<?php echo $each['id'] ?>"> <img src="<?php echo $each['photo'] ?>" height="300px" alt=""></a> 
                            <div class=" ttsp">
                                <h3><a href="?action=show&id=<?php echo $each['id'] ?>"><?php echo $each['name'] ?></a></h3>
                            </div>
                            <div class="saleall">
                                <p class="sale">200.000vnđ</p>
                                <p>
                                    <td><?php echo $each['price'] ?> VND</td>
                                </p>
                            </div>
                            <a href="" class="bttn"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                            <a class="btn" href=" ?action=add_to_cart&id=<?php echo $each['id'] ?>">
                                Mua Ngay
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    <script>
  

  
    $('.products-grid').slick({
      infinite: true,
      slidesToShow: 5 , // Số sản phẩm hiển thị trên một slide
      slidesToScroll: 1,
      prevArrow: '<button type="button" class="slick-prev">Previous</button>',
      nextArrow: '<button type="button" class="slick-next">Next</button>',
      responsive: [
          {
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
  });
  </script>
</body>

</html>