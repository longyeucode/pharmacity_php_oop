<?php
$connect = mysqli_connect('localhost', 'root', '', 'project1');
mysqli_set_charset($connect, 'utf8');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $updateQuery = "UPDATE bill 
                    SET status = 2
                    WHERE id = $id";

    $result = mysqli_query($connect, $updateQuery);

    header('location: ../admin/bill_management.php');
}

mysqli_close($connect);
?>


