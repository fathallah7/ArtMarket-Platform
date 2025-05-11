<?php
session_start();
?>


<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['name'])  && !empty($_POST['email'])  && !empty($_POST['password']) && !empty($_POST['email'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = "The email address is not valid.";
            header("Location: ../pages/register.php");
            exit();
        }

        require_once('../class/class.php');
        $visitor = Visitor::register($name, $email, $password, $role);

        if ($visitor) {
            $_SESSION['msg'] = "You Have Registered";
            header("Location: ../pages/login.php");
            exit();
        } else {
            $_SESSION['error'] = "This Email Have Been Registered";
            header("Location: ../pages/register.php");
            exit();
        }
    }
}
