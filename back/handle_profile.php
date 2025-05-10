<?php
session_start();
require_once('../class/class.php');
include '../includes/msg.php';


$imagePath = $_SESSION['user_image'];

if (isset($_POST['submit'])) {
    if ( !empty($_POST['name']) && !empty($_POST['email']) || !empty($_FILES['image']['name'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "Invalid email format.";
            header("Location: ../pages/profile.php");
            exit();
        }

        if (!empty($_FILES['image']['name'])) {
        $imageName = $_FILES['image']['name'];
        $imageTmpName = $_FILES['image']['tmp_name'];
        $uploadDir = 'uploads/profile/';
        $imagePath = $uploadDir . basename($imageName);
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        $imageDone = move_uploaded_file($imageTmpName, $imagePath);
        }

        $visitor = new Visitor();
        $done = $visitor->ProfileUpdate($_SESSION['user_id'] , $name , $email , $imagePath);

        if ($done) {

            $_SESSION['name'] = $name;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_image'] = $imagePath;

            $_SESSION['msg'] = "You Have Updated Your Profile";
            header("Location:../pages/customer-dashboard.php");
            exit();
        } else {
            $_SESSION['error'] = "An Error";
            header("Location:../pages/customer-dashboard.php");
            exit();
        }


    }
}

