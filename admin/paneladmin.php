<?php
include_once('./set.php');
include_once('connect.php');

// Tạo thanh tìm kiếm
$searchValue = '';
if (isset($_GET['search'])) {
    $searchValue = $_GET['search'];
}
$query = "SELECT COUNT(ban) AS ban FROM account WHERE ban = 1";
$banned = mysqli_query($conn, $query);
// Phân trang
$pageSize = 5;
$pageNumber = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$totalRows = mysqli_fetch_assoc($banned)['ban'];
$totalPages = ceil($totalRows / $pageSize);
$offset = ($pageNumber - 1) * $pageSize;
$query = "SELECT * FROM account WHERE ban = 1 AND username LIKE '%$searchValue%' LIMIT $offset, $pageSize";
$banned = mysqli_query($conn, $query);

$id_user = "SELECT COUNT(id) AS id FROM account";
$user = mysqli_query($conn, $id_user);

if ($user) {
    $row_user = mysqli_fetch_assoc($user);
    $id = $row_user['id'];
} else {
    echo "Lỗi truy vấn SQL: " . mysqli_error($conn);
    exit;
}

$ban_total = "SELECT COUNT(ban) AS ban FROM account WHERE ban = 1";
$banned_user = mysqli_query($conn, $ban_total);

if ($banned_user) {
    $row_ban = mysqli_fetch_assoc($banned_user);
    $ban = $row_ban['ban'];
} else {
    echo "Lỗi truy vấn SQL: " . mysqli_error($conn);
    exit;
}

$active_total = "SELECT COUNT(active) AS active FROM account WHERE active = 1";
$active_user = mysqli_query($conn, $active_total);

if ($active_user) {
    $row_active = mysqli_fetch_assoc($active_user);
    $active = $row_active['active'];
} else {
    echo "Lỗi truy vấn SQL: " . mysqli_error($conn);
    exit;
}

// Đóng kết nối đến cơ sở dữ liệu
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ngọc Rồng Light</title>
    <link rel="icon" href="/img/nro.png" type="img/png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
    <script src="https://kit.fontawesome.com/c79383dd6c.js" crossorigin="anonymous"></script>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">

    <!--  -->

    <style type="text/css">
        .sidebar {
            position: fixed;
            left: 20px;
            top: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 0 auto;
            border-radius: 5px;
            height: 70%;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li a {
            display: block;
            padding: 20px;
            color: #333;
            text-decoration: none;
        }

        li a:hover {
            background-color: #ccc;
            color: #fff;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        h2 {
            margin-top: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .unban-button {
            padding: 6px 12px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .unban-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        #search-box {
            margin-left: auto;
            width: 200px;
            padding: 5px;
            border-radius: 5px;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination {
            display: flex;
            justify-content: center;
        }

        .pagination a,
        .pagination span {
            margin: 0 5px;
            padding: 5px 10px;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
        }

        .pagination a:hover {
            background-color: #f1f1f1;
        }

        .pagination .current-page {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Thông tin máy chủ</h2>

        <p>Tổng số lượng id:
            <?php echo $id; ?>
        </p>
        <p>Tổng số lượng tài khoản bị khoá:
            <?php echo $ban; ?>
        </p>
        <p>Tổng số lượng tài khoản đã mở thành viên:
            <?php echo $active; ?>
        </p>

        <?php if (mysqli_num_rows($banned) > 0): ?>
            <h3>Danh sách các tài khoản đã bị ban:</h3>

            <table>
                <thead>
                    <tr class="table-header">
                        <th>
                            <span>Tên tài khoản</span>
                            <input type="text" id="search-box" placeholder="Tìm kiếm tài khoản"
                                value="<?php echo $searchValue; ?>">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($banned)): ?>
                        <tr>
                            <!-- Thêm nút "Unban" -->
                            <td class="banned">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <span>
                                        <?php echo $row['username']; ?>
                                    </span>
                                    <button class="unban-button"
                                        onclick="unbanUser('<?php echo $row['username']; ?>')">Unban</button>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <div class="pagination">
                <?php
                $dots_added = false;
                if ($pageNumber > 1): ?>
                    <a href="?page=<?php echo $pageNumber - 1 . "&search=$searchValue"; ?>">Trang trước</a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <?php if ($i == $pageNumber): ?>
                        <strong>
                            <?php echo $i; ?>
                        </strong>
                    <?php else: ?>
                        <?php if (
                            ($i >= $pageNumber - 1 && $i <= $pageNumber + 1) ||
                            ($i == 1 || $i == $totalPages)
                        ): ?>
                            <a href="?page=<?php echo $i . "&search=$searchValue"; ?>"><?php echo $i; ?></a>
                        <?php elseif (!$dots_added): ?>
                            <?php $dots_added = true; ?>
                            <span>...</span>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endfor; ?>

                <?php if ($pageNumber < $totalPages): ?>
                    <a href="?page=<?php echo $pageNumber + 1 . "&search=$searchValue"; ?>">Trang sau</a>
                <?php endif; ?>
            </div>
            <script>
                function unbanUser(username) {
                    // Gửi request đến trang unban.php để thực hiện unban người dùng
                    $.ajax({
                        url: './adminapi/unban.php',
                        type: 'GET',
                        data: { username: username },
                        success: function (response) {
                            // Hiển thị thông báo "Unban" bằng SweetAlert2
                            Swal.fire({
                                icon: 'success',
                                title: 'Thông báo',
                                text: 'Tài khoản đã được mở khóa.'
                            }).then(function () {
                                window.location.reload(); // Tải lại trang sau khi unban thành công
                            });
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.log(textStatus, errorThrown);
                        }
                    });
                }

                $(document).ready(function () {
                    $('#search-box').on('keyup', function () {
                        var searchValue = $(this).val().trim();
                        window.location.href = "?page=1&search=" + searchValue;
                    });
                });
            </script>
        <?php else: ?>
            <p>Hiện không có tài khoản nào bị ban.</p>
        <?php endif; ?>
    </div>
    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="../admin.php">Trang Chủ Admin</a></li>
            <li><a href="../admin/ban.php">Ban người chơi</a></li>
            <li><a href="../admin/addmoney.php">Cộng tiền</a></li>
            <li><a href="../admin/chiso.php">Cộng chỉ số</a></li>
        </ul>
    </div>
</body>

</html>