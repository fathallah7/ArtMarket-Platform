<?php
session_start();
include '../includes/msg.php';


if (isset($_POST['submit'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        
        $email = htmlspecialchars(trim($_POST['email']));
        $password = htmlspecialchars(trim($_POST['password']));

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "Invalid Email Format";
            header("Location: ../pages/login.php");
            exit();
        }

        require_once('../class/class.php');
        $user = User::login($email , $password);

        if ($user) {
            $_SESSION['user'] = $user;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_role'] = $user['role'];
            $_SESSION['user_image'] = $user['image'];

            if ($user['role'] === 'admin') {
                header("Location: ../admin/admin-add-artwork.php");
                exit();
            } 
            else if ( $user['role'] === 'visitor' ) {
                $_SESSION['msg'] = "Welcome You Have Loged In";
                header("Location: ../pages/index.php");
                exit();
            }
            else {
                header("Location: ../pages/index.php");
                exit();
            }
        }
        else {
            $_SESSION['error'] = "Wrong Email or Password";
            header("Location: ../pages/login.php");
            exit();
        }
    }
    else {
        $_SESSION['error'] = "Please enter both email and password";
        header("Location: ../pages/login.php");
        exit();
    }
}