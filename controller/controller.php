<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

switch ($action) {
    case '':

        require 'model/model.php';
        require 'view/index.php';
        break;
    case 'category':
        $FK_id_category = $_GET['FK_id_category'];
        require 'model/model.php';
        require './view/product.php';
        break;
    case 'create':
        require 'view/create.php';
        break;
    case 'store':
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $FK_id_brand = $_POST['FK_id_brand'];
        $FK_id_category = $_POST['FK_id_category'];

        require 'model/model.php';
        header('location:admin/product_management.php');
        break;
    case 'edit':
        $id = $_GET['id'];

        require 'model/model.php';
        require 'view/edit.php';
        break;
    case 'update':
        $id = $_POST['id'];
        $name = $_POST['name'];
        $photo = $_POST['photo'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        require 'model/model.php';
        header('location:admin/product_management.php');
        break;
    case 'delete':
        $id = $_GET['id'];

        require 'model/model.php';
        header('location:admin/product_management.php');
        break;
    case 'add_to_cart':
        $id = $_GET['id'];

        require 'model/model.php';
        require 'view/index.php';
        break;
        case 'add_to_cart':
            $id = $_GET['id'];
    
            require 'model/model.php';
            require 'view/index.php';
            break;
    case 'buy_now':
        $id = $_GET['id'];

        require 'model/model.php';
        require 'view/index.php';
        break;
    case 'sign_up':
        require 'view/sign_up.php';
        require 'model/model.php';
        break;
    case 'process_sign_up':
        session_start();
        require 'model/model.php';
        break;
    case 'edit_account':
        $id = $_GET['id'];

        require 'model/model.php';
        require 'view/edit_account.php';
        break;

    case 'update_account':
        session_start();
        $id = $_SESSION['id'];

        $name = $_POST['name'];
        $address = $_POST['address'];
        $phonenumber = $_POST['phonenumber'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        require 'model/model.php';
        header('location:index.php?action=profile');
        break;

    case 'sign_out':
        session_start();
        require 'model/model.php';
        break;

    case 'sign_in':
        require 'view/sign_in.php';
        require 'model/model.php';
        break;
    case 'process_sign_in':
        session_start();
        $FK_id_position = $_POST['FK_id_position'];
        require 'model/model.php';
        break;
    case 'delete_account':
        $id = $_GET['id'];

        require 'model/model.php';
        header('location:admin/user_management.php');
        break;
    case 'show':
        $id = $_GET['id'];
        require 'model/model.php';
        require 'view/show.php';
        break;
    case 'show_news':
        $id = $_GET['id'];
        require 'model/model.php';
        require 'view/show_news.php';
        break;
    case 'profile':
        require 'view/profile.php';
        break;
    case 'create_news':

        require 'view/create_news.php';
        break;
    case 'store_news':
        $name = $_POST['name'];
        $date = $_POST['date'];
        $description = $_POST['description'];

        require 'model/model.php';
        header('location:admin/news_management.php');
        break;
    case 'edit_news':
        $id_news = $_GET['id_news'];

        require 'model/model.php';
        require 'view/edit_news.php';
        break;
    case 'update_news':
        $id_news = $_POST['id_news'];
        $name = $_POST['name'];
        $photo = $_POST['photo'];
        $date = $_POST['date'];
        $description = $_POST['description'];

        require 'model/model.php';
        header('location:admin/news_management.php');
        break;
    case 'delete_news':
        $id_news = $_GET['id_news'];

        require 'model/model.php';
        header('location:admin/news_management.php');
        break;
    case 'comment':
        session_start();
        $name = $_SESSION['name'];
        $content = $_POST['content'];
        $date = $_POST['date'];
        $FK_id_product = $_POST['FK_id_product'];

        require 'model/model.php';

        break;
    case 'delete_comment':
        $id = $_GET['id'];

        require 'model/model.php';
        header('location:admin/comment_management.php');
        break;
    case 'checkout':
        session_start();
        $name = $_SESSION['name'];
        $phonenumber = $_SESSION['phonenumber'];
        $address = $_SESSION['address'];
        $email = $_SESSION['email'];
        $quantity = $_SESSION['quantity'];
        $sum = $_SESSION['sum'];
        require 'view/checkout.php';
        break;

    case 'process_checkout':
        session_start();
        $name = $_SESSION['name'];
        $phonenumber = $_SESSION['phonenumber'];
        $address = $_SESSION['address'];
        $email = $_SESSION['email'];
        $quantity = $_SESSION['quantity'];
        $sum = $_SESSION['sum'];
        require 'model/model.php';

        require 'view/checkout.php';
        break;

    case 'send_mail':
        require 'model/model.php';
        break;
    case 'cart_history':
        require 'view/cart_history.php';
        break;
    default:
        echo 'FPI warning: unknown action';
        break;
}
