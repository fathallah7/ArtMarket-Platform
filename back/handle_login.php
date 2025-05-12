<?php
session_start();
include '../includes/msg.php';


if (isset($_POST['submit'])) {


    if ($_POST['email'] == 'adminTABARAK@a.com' && $_POST['password'] == 'admin123TABARAK') {
        $_SESSION['user_id'] = '0';
        $_SESSION['name'] = 'Admin';
        $_SESSION['user_email'] = 'adminTABARAK@a.com';
        $_SESSION['user_role'] = 'admin';
        header("Location: ../admin/admin-dashboard.php");
        exit();
    }

    if ($_POST['email'] == 'advisorTABARAK@a.com' && $_POST['password'] == 'advisor123TABARAK') {
        header("Location: ../admin/advisor-dashboard.php");
        exit();
    }


    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        $email = htmlspecialchars(trim($_POST['email']));
        $password = $_POST['password'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "Invalid Email Format";
            header("Location: ../pages/login.php");
            exit();
        }

        require_once('../class/class.php');
        $user = User::login($email, $password);

        if ($user) {
            $_SESSION['user'] = $user;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_role'] = $user['role'];
            $_SESSION['user_work_name'] = $user['work_name'];
            $_SESSION['user_bio'] = $user['bio'];
            $_SESSION['user_image'] = $user['image'];

            if ($user['role'] === 'visitor') {
                $_SESSION['msg'] = "Welcome You Have Loged In";
                header("Location: ../pages/index.php");
                exit();
            } else {
                header("Location: ../artist/artist-dashboard.php");
                exit();
            }
        } else {
            $_SESSION['error'] = "Wrong Email or Password";
            header("Location: ../pages/login.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Please enter both email and password";
        header("Location: ../pages/login.php");
        exit();
    }
}
