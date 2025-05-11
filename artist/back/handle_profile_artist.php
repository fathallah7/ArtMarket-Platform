<?php
session_start();
require_once('../../class/class.php');
include '../includes/msg.php';



$dbImagePath = $_SESSION['user_image'];

if (isset($_POST['submit'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['work_name']) && !empty($_POST['bio']) || !empty($_FILES['image']['name'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $work_name = $_POST['work_name'];
        $bio = $_POST['bio'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "Invalid email format.";
            header("Location: ../artist-profile-update.php");
            exit();
        }

        if (!empty($_FILES['image']['name'])) {
            $imageName = $_FILES['image']['name'];
            $uploadDir = '../../back/uploads/profile/';
            $imagePath = $uploadDir . basename($imageName);

            // المسار الذي سيتم تخزينه في قاعدة البيانات (بدون ../../back/)
            $dbImagePath = 'uploads/profile/' . basename($imageName);

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            $imageDone = move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
        }

        $artist = new Artist();
        $done = $artist->ProfileUpdate($_SESSION['user_id'], $name, $email, $dbImagePath, $work_name, $bio);

        if ($done) {

            $_SESSION['name'] = $name;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_bio'] = $bio;
            $_SESSION['user_work_name'] = $work_name;
            $_SESSION['user_image'] = $dbImagePath;

            $_SESSION['msg'] = "You Have Updated Your Profile";
            header("Location:../artist-profile-update.php");
            exit();
        } else {
            $_SESSION['error'] = "An Error";
            header("Location:../artist-profile-update.php");
            exit();
        }
    }
}
