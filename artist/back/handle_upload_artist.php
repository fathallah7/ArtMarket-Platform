<?php

session_start();
require_once('../../class/class.php');
include '../includes/msg.php';


if (!isset($_SESSION['user']) || $_SESSION['user_role'] != "artist") {
    $_SESSION['error'] = "Login First";
    header('Location:../artist-uploads.php');
    exit();
}

// Add Art 

$publisher_id = $_SESSION['user_id'];
$artist_name = $_SESSION['name'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $year = $_POST['year'] ?? null;
    $width = $_POST['width'] ?? null;
    $height = $_POST['height'] ?? null;
    $materials = $_POST['materials'] ?? null;


if (!empty($_FILES['image']['name'])) {
    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $uploadDir = '../../admin/back/uploads/artworks/';
    $imagePath = $uploadDir . basename($imageName);

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $imageDone = move_uploaded_file($imageTmpName, $imagePath);
}


    $artist = new Artist();
    $done = $artist->AddArtwork($publisher_id, $title, $artist_name, $category, $price, $quantity, $description, $year, $width, $height, $materials, $imagePath);

    if ($done) {
        $_SESSION['msg'] = "Done .. You Added An ArtWork";
        header("Location:../artist-upload.php");
        exit();
    } else {
        $_SESSION['error'] = "An Error";
        header("Location:../artist-upload.php");
        exit();
    }
}


// Delete Art

if (isset($_GET['id_delete'])) {
    $id = $_GET['id_delete'];

    $admin = new Admin();
    $deleted = $admin->DeleteArtWork($id);

    if ($deleted) {
        $_SESSION['msg'] = "An Art Deleted";
        header("Location:../artist-upload.php");
        exit();
    } else {
        $_SESSION['error'] = "An Error";
        header("Location:../artist-upload.php");
        exit();
    }
}
