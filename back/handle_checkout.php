<?php
session_start();
require_once('../class/class.php');
include '../includes/conn.php';



if (isset($_SESSION['user_id']) && isset($_POST['total'])) {

    $user_id = $_SESSION['user_id'];
    $total = $_POST['total'];
    $order_date = date("Y-m-d H:i:s");


    $sql = "INSERT INTO orders (user_id, total_amount, order_date) VALUES ('$user_id', '$total', '$order_date')";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        $deleteCart = "DELETE FROM cart WHERE user_id = '$user_id'";
        mysqli_query($conn, $deleteCart);

        $_SESSION['msg'] = "Purchase successful!";
        header("Location: ../pages/cart.php");
        exit();
    } else {
        $_SESSION['error'] = "Failed to place order";
        header("Location: ../pages/cart.php");
        exit();
    }
} else {
    $_SESSION['error'] = "Unauthorized or missing data.";
    header("Location: ../pages/cart.php");
    exit();
}
