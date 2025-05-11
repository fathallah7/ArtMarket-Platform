<?php
require_once('../../class/class.php');
session_start();

if (!isset($_SESSION['user']) || $_SESSION['user_role'] != "admin") {
    $_SESSION['error'] = "Login First";
    header('Location:../admin-add-artwork.php');
    exit();
}

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $date = $_POST['fair_date'];
    $location = $_POST['location'];
    $price = $_POST['price'];

    $imageName = $_FILES['image']['name'];
    $uploadDir = 'uploads/fairs/';
    $imagePath = $uploadDir . basename($imageName);
    $dbImagePath = 'uploads/fairs/' . basename($imageName);

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);

    $admin = new Admin();
    $done = $admin->createFairs($title, $desc, $date, $location, $price, $dbImagePath);

    if ($done) {
        $_SESSION['msg'] = "fair Added Successfully.";
        header("Location: ../admin-add-fairs.php");
    } else {
        $_SESSION['error'] = "Failed to Add fair.";
        header("Location: ../admin-add-fairs.php");
    }
}



// Delete Fairs

if (isset($_GET['id_delete'])) {
    $id = $_GET['id_delete'];

    $admin = new Admin();
    $deleted = $admin->DeleteFairs($id);

    if ($deleted) {
        $_SESSION['msg'] = "An Fair Deleted";
        header("Location:../admin-fairs.php");
        exit();
    } else {
        $_SESSION['error'] = "An Error";
        header("Location:../admin-fairs.php");
        exit();
    }
}


//  Delete Teckets

if (isset($_GET['id_delete_TT'])) {
    $id_tecket = $_GET['id_delete_TT'];

    $artistTe = new Admin();
    $delTe = $artistTe->DeleteFairsTeckets($id_tecket);

    if ($delTe) {
        $_SESSION['msg'] = "You Deleted a Tecket";
        header("Location:../admin-fairs.php");
        exit();
    } else {
        $_SESSION['error'] = "An Error";
        header("Location:../admin-fairs.php");
        exit();
    }
}



//  Delete fairs Artits

if (isset($_GET['id_delete_AA'])) {
    $id_AA = $_GET['id_delete_AA'];

    $artistAA = new Admin();
    $delAA = $artistAA->DeleteFairsArtists($id_AA);

    if ($delAA) {
        $_SESSION['msg'] = "You Deleted an Artist";
        header("Location:../admin-fairs.php");
        exit();
    } else {
        $_SESSION['error'] = "An Error";
        header("Location:../admin-fairs.php");
        exit();
    }
}
