<?php
include_once('../connect.php');

// Xử lý khi form được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $username = $_POST["username"];
    $vnd = intval($_POST["vnd"]);

    // Cộng tiền vào cột "vnd" của bảng "account"
    $sql = "UPDATE account SET vnd = vnd + $vnd WHERE username = '$username'";
    if ($conn->query($sql) === TRUE) {
        echo "Cộng tiền thành công!";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}

// Đóng kết nối
$conn->close();
?>
