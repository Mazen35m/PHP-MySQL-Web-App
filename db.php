<?php
$host = 'localhost';
$user = 'root'; // اسم المستخدم الافتراضي في XAMPP
$pass = '';     // كلمة المرور الافتراضية (فارغة)
$dbname = 'smart_methods_db';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
?>