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
    <link rel="icon" type="image/png" href="./assest/image/logo.png" style="width:100%; height:auto;">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="stylesheet" href="./assest/css/stylecualong.css">
    <link rel="stylesheet" href=./assest/css/ress.css">
    <title>Document</title>
</head>
<style>
    .ct_tintuc_con a{
        text-decoration:none;
        color : black;
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
    
.tintuc-menu-overlay{
        position: fixed;
            top: 160px;
            bottom: 0;
            left: 0;
            right: 0;
            display: none;
            background-color: rgba(0, 0, 0, 0.3);
}
.menu_tintuc_mobile{
    display: block;
}
 .menu_tintuc_mobile .tintuc{
        position: relative;
        left:35px;
        top: -90px;
      
    }
    .footerlogo{
        display: none;
      }
      .footerlogo-mobile{
       align-items: center;
        display: block;
      }
      .footer {
      align-items: center;
        display: grid;
          grid-template-columns: 1fr 1fr 1fr ;
      }
      .logofooter{
        display: none;
      }
      .header_footer{
        display: none;
      }
      .tinphucon{
        display: none;
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
    .product {
        width: 100%;
    }
    
    .menu_tintuc_mobile .tintuc{
        position: relative;
        left:18px;
        top: -50px;
      
    }
    .footerlogo{
        display: none;
      }
      .footerlogo-mobile{
       align-items: center;
        display: block;
      }
      .footer {
        display: grid;
          grid-template-columns: 1fr 1fr 1fr
      }
      .logofooter{
        display: none;
      }
      .header_footer{
        display: none   ;
      }
      .product-box .btnnn{
        margin-left: 60px; 
        margin-top: 5px;
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
    .sesc{
        display: none;
    }
    .menu_tintuc_mobile .tintuc{
        position: relative;
        right:10px;
        top: -50px;
        left: auto;
      
    }
    .footerlogo{
        display: none;
      }
      .footerlogo-mobile{
       align-items: center;
        display: block;
      }
      .footer {
        display: grid;
          grid-template-columns: 1fr 1fr
      }
      .logofooter{
        display: none;
      }
      .header_footer{
        display: none   ;
      }
      
      .danhmuc_tintuc_con img {
  width: 100%;
  height:224px;
  border-radius: 6px;
  margin-bottom: 15px;
}  
.tincon{
  height: auto;
}
.image-container {
  height:auto;
}  
.tintuc_new .titletin{
  display: block;
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

$search="";
?>

<style>
    .nd_tin_show p,li{
        padding-top: 10px;
    }
.image_show_news{
    text-align: center;
}
 .image_show_news img{
    padding: 20px;
   align-items: center;
    width: 80%;
}

</style>
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
  
    <div class="container" style="margin-top:50px;">
        <h2><?php echo $each['name']?></h2>
        <div class="nd_tin_show">
            <p>
           <?php echo $each['description']?>
            </p>
            <h4 style="color: #0171bb;">Trẻ bị cảm lạnh, ho, sổ mũi phải làm sao?</h4>
            <div class="image_show_news">
                <img src="./<?php echo $each['photo']?>" alt="">
            </div>
            <p>
                Các triệu chứng thường gặp khi bị cảm lạnh là chảy nước mũi, hắt xì, ho, đau họng, sốt, đau đầu,… Các triệu chứng này làm cho trẻ khó chịu, quấy khóc, mệt mỏi khiến cho các ông bố bà mẹ cũng lo lắng không nguôi.có nguồn gốc từ thiên nhiên vừa hiệu quả lại đảm bảo an toàn rất được ưa chuộng.
            </p>
            <p>
                Ba mẹ tìm đủ mọi cách để bé mau khỏi bệnh, tuy nhiên, việc lạm dụng kháng sinh trong điều trị cũng không phải là giải pháp tốt cho trẻ.

                Hiện có rất nhiều loại thuốc và siro trị ho cảm cho bé 
            </p>
        <ul>
            <li> Mật ong: 150 mg</li>
           <li>  Chiết xuất khô cô đặc lá thường xuân (Hedera helix): 9,9 mg từ lá thường xuân khô: 39,5 mg</li>
           <li>Chiết xuất khô cô đặc quả cơm cháy đen (Sambucus nigra): 9,53 mg từ nước trái cây tươi: 500 mg
        </li>
           <li>Chiết xuất khô cô đặc hoa cơm cháy đen (Sambucus nigra): 6,25 mg từ hoa khô: 37,5 mg
        </li>
           <li>            Chiết xuất khô cô đặc nấm men (Wellmune®) Saccharomyces cerevisiae: 3.5 mg (Beta Glucan 2,45mg) từ vách tế bào tươi: 17,5 mg
        </li>
          
            
            
            

        </ul>
        </div>
    </div>
<?php
 $sql = "SELECT * FROM news";
    
 $result = mysqli_query($connect, $sql);

 $each = mysqli_fetch_array($result);
?>

    <div class="separator" style="margin-top:20px;"></div>
    <div class="container">
  <h2>Tin mới</h2>
<div class="danhmuc_tintuc">
<?php foreach($result as $each) { ?>
    
<div class="danhmuc_tintuc_con">
<a href="?action=show_news&id=<?php echo $each['id_news'] ?>">
<img src="./<?php echo $each['photo'] ?>">
</a> 
  <div class="ct_tintuc_con">
  <div class="date"><p>Ngày đăng:<p class="datedang"><?php echo $each['date'] ?></p></p>
    </div>
    <a href="?action=show_news&id=<?php echo $each['id_news']?>">
    <h4><?php echo $each['name'] ?></h4>
    
    <p> <?php echo $each['description']?></p>
    </a>
</div>
</div>
<?php } ?>
</div>
    </div>




    <div class="separator" style="margin-top:20px;"></div>

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

      
      
                
             
                    
              
              
      
      
      
      
      
      
      

</body>
<script>
    var hinh=[
      "./assest/image/1.webp",
      "./assest/image/2.webp",
      "./assest/image/3.webp",
    ];
    
    
    var index=0;
    // function prev(){
    //   index--;
    //   if(index<0) index=hinh.length-1;
    //   document.getElementById('banner').src=hinh[index];
    //   document.getElementById("0").style.color='white';
    //   document.getElementById("1").style.color='white';
    //   document.getElementById("2").style.color='white';
    //   document.getElementById(index).style.color='#1598d4'
    
    
    // }
    
    function next(){
      index++;
      if(index==hinh.length) index=0;
      document.getElementById('banner').src=hinh[index];
      document.getElementById("0").style.color='white';
      document.getElementById("1").style.color='white';
      document.getElementById("2").style.color='white';
      document.getElementById(index).style.color='#1598d4'
    }
    setInterval("next()",2000)
  
  
  
    $('.danhmuc_tintuc').slick({
      infinite: true,
      slidesToShow: 5, // Số sản phẩm hiển thị trên một slide
      slidesToScroll: 2,
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
</html>