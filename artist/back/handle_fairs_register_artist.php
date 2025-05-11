<?php

session_start();
require_once('../../class/class.php');


if (!isset($_SESSION['user']) || $_SESSION['user_role'] != "artist") {
    $_SESSION['error'] = "Login First";
    header('Location:../artist-uploads.php');
    exit();
}





if (isset($_GET['id_reg'])) {
    $id_reg = $_GET['id_reg'];

    $artist = new Artist();
    $reg = $artist->FairsReg($id_reg , $_SESSION['user_id']);

    if ($reg) {
        $_SESSION['msg'] = "You Have Registerd";
        header("Location:../artist-register-fair.php");
        exit();
    } else {
        $_SESSION['error'] = "An Error";
        header("Location:../artist-register-fair.php");
        exit();
    }
}




