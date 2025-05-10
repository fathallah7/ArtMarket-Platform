<?php
session_start();

$user_id = $_SESSION['user_id'];

if (!isset($_SESSION['user_id'])) {
    $_SESSION['error'] = "Login First";
    header('Location:../pages/feedback.php');
    exit();
}

if (isset($_POST['submit'])) {

    if (!empty($_POST['rating']) && !empty($_POST['feedbackType'])  && !empty($_POST['subject']) && !empty($_POST['message']) && !empty($_POST['email'])) {

        $rating = $_POST['rating'];
        $type = $_POST['feedbackType'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $email = $_POST['email'];

        require_once('../class/class.php');

        $user = new Visitor();
        $done = $user->AddFeedback($user_id, $email, $type, $rating, $subject, $message);

        if ($done) {
            $_SESSION['msg'] = "Done Your Message Was Sent";
            header("Location:../pages/feedback.php");
        }
    }
    else {
        $_SESSION['error'] = "Choose Number Of Stars";
            header("Location:../pages/feedback.php");
        }

}
