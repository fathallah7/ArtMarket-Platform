<?php
session_start();
include '../includes/conn.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $artTypes = isset($_POST['artTypes']) ? implode(",", $_POST['artTypes']) : '';
    $budget = mysqli_real_escape_string($conn, $_POST['budget']);
    $space = mysqli_real_escape_string($conn, $_POST['space']);
    $description = mysqli_real_escape_string($conn, $_POST['spaceDescription']);

    $sql = "INSERT INTO advisor_requests (name, email, art_types, budget_range, display_space, space_description)
            VALUES ('$name', '$email', '$artTypes', '$budget', '$space', '$description')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['msg'] = "Your Message Sent";
        header("Location: ../pages/customer-request-advisor.php");
        exit();
    } else {
        $_SESSION['error'] = "ُError";
        header("Location: ../pages/customer-request-advisor.php");
        exit();
    }

    mysqli_close($conn);
}
