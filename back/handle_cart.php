<?php
session_start();
require_once('../class/class.php');
include '../includes/msg.php';

if (!isset($_SESSION['user'])) {
    $_SESSION['error'] = "Login First";
    header('Location: ../pages/artwork-detail.php?art_id=' . $_GET["artwork_id"]);
    exit;
}

if (isset($_GET['artwork_id'])) {

    $artwork_id = $_GET['artwork_id'];

    $AddedToCart = Visitor::BuyArtWork($artwork_id);

    $_SESSION['msg'] = "The Art Added To The Cart";
    header("Location:../pages/artwork-detail.php?art_id=$artwork_id");
    exit();
}



if (isset($_GET['id_del'])) {

    $ArtWorkDelete_id = $_GET['id_del'];

    $ArtDelete = Visitor::RemoveFromCart($ArtWorkDelete_id);

    $_SESSION['msg'] = "The Art Deleted From The Cart";
    header("Location:../pages/cart.php");
    exit();
}
