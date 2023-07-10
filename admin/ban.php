
<!DOCTYPE html>
<html>
<head>
	<title>Khoá tài khoản người chơi</title>
	<style type="text/css">
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

		form {
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		label {
			font-weight: bold;
		}

		input[type="text"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: 1px solid #ddd;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #2E8B57;
		}
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
	</style>
</head>
<body>
	<div class="container">
		<h2>Khoá tài khoản người chơi</h2>
		<form method="post" action="../adminapi/ban_user.php">
			<label for="username">Tên người dùng:</label>
			<input type="text" id="username" name="username">

			<label for="ban">Giá trị Ban:</label>
			<input type="text" id="ban" name="ban" value="1">

			<input type="submit" value="Khoá tài khoản">
		</form>
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
