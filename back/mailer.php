<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';
require '../PHPMailer/Exception.php';

function sendTicketEmail($to, $subject, $body) {
    $mail = new PHPMailer(true);

    try {
        // إعدادات السيرفر
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->Username = 'abdodisoff@gmail.com';         // ✴️ ضع إيميلك هنا
        $mail->Password = 'dwsl vswf ysty zvuw';           // ✴️ ضع كلمة المرور للتطبيق
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // المرسل والمستلم
        $mail->setFrom('youremail@gmail.com', 'Art Gallery');
        $mail->addAddress($to);

        // المحتوى
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = nl2br($body); // يضيف فواصل أسطر

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
