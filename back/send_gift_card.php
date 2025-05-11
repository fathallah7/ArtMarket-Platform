<?php
session_start();

require_once '../includes/conn.php';
require_once 'mailer.php'; // ملف إرسال البريد

if (isset($_POST['submit'])) {

    $recipient_name = $_POST['recipientName'];  // اسم المستلم
    $recipient_email = $_POST['recipientEmail'];  // بريد المستلم
    $sender_name = $_POST['senderName'];  // اسم المرسل
    $personal_message = $_POST['personalMessage'];  // الرسالة الشخصية
    $gift_card_amount = $_POST['cardAmount'];  // مبلغ بطاقة الهدية

    // توليد رمز فريد لبطاقة الهدية
    $gift_card_code = strtoupper(uniqid('GIFT')) . '-' . rand(1000, 9999);

    // إدخال بيانات البطاقة في قاعدة البيانات
    $query = "INSERT INTO gift_cards (recipient_name, recipient_email, sender_name, personal_message, amount, gift_card_code) 
              VALUES ('$recipient_name', '$recipient_email', '$sender_name', '$personal_message', '$gift_card_amount', '$gift_card_code')";

    if (mysqli_query($conn, $query)) {

        // إرسال الإيميل
        $subject = "Your Gift Card Confirmation";
        $message = "Dear $recipient_name,\n\nYou have received a gift card of amount $$gift_card_amount from $sender_name.\n\nGift Card Code: $gift_card_code\n\nPersonal Message: $personal_message\n\nPlease use this code to redeem your gift card.\n\nBest regards,\nGift Card Team";
        $headers = "From: no-reply@yourwebsite.com";

        // إرسال البريد
        if (sendTicketEmail($recipient_email, $subject, $message)) {
            $_SESSION['msg'] = "✅ Gift Card purchased and email sent.";
            header("Location:../pages/gift-cards.php");
            exit();
        } else {
            $_SESSION['error'] = "❌ Gift Card saved but failed to send email.";
            header("Location:../pages/gift-cards.php");
            exit();
        }

        mysqli_close($conn);
    } else {
        $_SESSION['error'] = "❌ Gift Card failed to save.";
        header("Location:../pages/gift-cards.php");
        exit();
    }
}
?>
