<?php

session_start();
require_once('../../class/class.php');

$id = $_GET['id_del'];

$admin = new Admin();
$delete = $admin->DeleteFeedback($id);


    if ($delete) {
        $_SESSION['error'] = "Done An Message Was Deleted";
        header("Location:../admin-feedback.php");
    }