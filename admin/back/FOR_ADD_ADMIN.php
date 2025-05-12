<?php

require_once('../includes/conn.php');


$name = 'Admin';
$email = 'adminTABARAK@a.com';
$password = 'admin123TABARAK';
$role = 'admin';



$query = "INSERT INTO `users` (`name`, `email`, `password`, `role`) 
            VALUES ('$name', '$email', '$password', '$role')";


if (mysqli_query($conn, $query)) {
    echo "تم إضافة حساب الادمن بنجاح!";
} else {
    echo "حدث خطأ أثناء إضافة الحساب: " . mysqli_error($conn);
}
