<?php
include_once('../connect.php');
// Lấy tên người dùng và giá trị ban từ form submit
$username = $_POST['username'];
$ban = $_POST['ban'];

// Tìm người chơi có tên đăng nhập trùng với $username
$sql = "SELECT id FROM account WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

// Kiểm tra xem có tìm thấy người chơi hay không
if (mysqli_num_rows($result) == 0) {
    echo 'Không tìm thấy người chơi có tên đăng nhập là ' . $username;
} else {
    // Lấy id của người chơi từ kết quả truy vấn
    $row = mysqli_fetch_assoc($result);
    $player_id = $row['id'];

    // Cập nhật giá trị ban của người chơi trong database
    $sql = "UPDATE account SET ban = '$ban' WHERE id = '$player_id'";
    $result = mysqli_query($conn, $sql);

    // Kiểm tra xem có lỗi xảy ra hay không
    if (!$result) {
        echo 'Có lỗi khi cập nhật dữ liệu: ' . mysqli_error($conn);
    } else {
        echo 'Tài khoản của người chơi đã được khoá thành công!';
    }
}

// Đóng kết nối đến cơ sở dữ liệu
mysqli_close($conn);
?>
