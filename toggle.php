<?php
include 'db.php';

if (isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    // عكس الحالة الحالية
    $new_status = ($_POST['status'] == 0) ? 1 : 0; 
    
    $stmt = $conn->prepare("UPDATE users SET status = ? WHERE id = ?");
    $stmt->bind_param("ii", $new_status, $id);
    $stmt->execute();
    
    echo $new_status; // إرجاع الحالة الجديدة لتحديثها في الواجهة
    $stmt->close();
}
$conn->close();
?>