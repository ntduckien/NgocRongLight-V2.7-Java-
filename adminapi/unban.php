<?php
include_once('../set.php');
include_once('../connect.php');

// Kiểm tra xem có tham số 'username' được truyền vào không
if (!isset($_GET['username'])) {
    echo "Không tìm thấy tên người dùng.";
    exit;
}

$username = $_GET['username'];

// Kiểm tra tính hợp lệ của giá trị 'username'
if (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
    echo "Tên người dùng không hợp lệ.";
    exit;
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Cập nhật giá trị ban của tài khoản về 0 bằng Prepared Statements
$update_ban = "UPDATE account SET ban = 0 WHERE username = ?";
$stmt = mysqli_prepare($conn, $update_ban);
mysqli_stmt_bind_param($stmt, 's', $username);
$result = mysqli_stmt_execute($stmt);

if ($result) {
    // Hiển thị thông báo "Unban" bằng SweetAlert2
    // Thêm đoạn mã sau vào phần xử lý unban trong file unban.php
    echo "<script>
    Swal.fire({
        icon: 'success',
        title: 'Thông báo',
        text: 'Tài khoản đã được mở khóa.'
    }).then(function() {
        window.location.href = '../admin.php'; // Chuyển về trang admin.php sau khi unban thành công
    });
    </script>";

} else {
    echo "Lỗi cập nhật cơ sở dữ liệu: " . mysqli_error($conn);
}

// Đóng Prepared Statements và kết nối đến cơ sở dữ liệu
mysqli_stmt_close($stmt);
mysqli_close($conn);

?>