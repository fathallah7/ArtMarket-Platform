<?php
session_start();

require_once '../includes/conn.php';
require_once 'mailer.php'; // ملف إرسال البريد (سننشئه في الأسفل)


if (isset($_POST['submit'])) {

    $fairs_id = $_POST['fairs_id'];
    $user_id = $_POST['user_id'];

    $ticket_code = strtoupper(uniqid('TKT'));


    $query = "INSERT INTO fairs_tickets (fairs_id, user_id, ticket_code) 
                    VALUES ('$fairs_id', '$user_id', '$ticket_code')";

    if (mysqli_query($conn, $query)) {

        $userQuery = "SELECT email FROM users WHERE id = '$user_id'";
        $result = mysqli_query($conn, $userQuery);
        $userData = mysqli_fetch_assoc($result);
        $email = $userData['email'];

        // إرسال الإيميل
        $subject = "Your Ticket Confirmation";
        $message = "Dear User,\n\nThank you for purchasing a ticket.\n\nTicket Code: $ticket_code\nFair ID: $fairs_id\n\nPlease show this code at the Fair.\n\nArt Expo Team";
        $headers = "From: no-reply@yourwebsite.com";

        // إرسال البريد
        if (sendTicketEmail($email, $subject, $message)) {
            $_SESSION['msg'] = "✅ Ticket purchased and email sent.";
            header("Location:../pages/art-fairs.php");
            exit();
        } else {
            $_SESSION['error'] = "❌ Ticket saved but failed to send email.";
            header("Location:../pages/art-fairs.php");
            exit();
        }


        mysqli_close($conn);
    }
}
