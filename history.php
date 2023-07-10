<?php
include('set.php');
if (session_status() == PHP_SESSION_NONE) {
   session_start(); //khởi động phiên làm việc
}

$_alert = null;
$_title = "NRO Light - Thanh Toán";
// include_once 'head.php';
include_once('connect.php');
if ($_login == null) {
   header("location:/login.php");
}
?>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport"
      content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no, shrink-to-fit=no">
   <meta name="apple-mobile-web-app-capable" content="yes">
   <meta name="csrf-token" content="jg0aMEdvyglZMgqfTAyPbDwjsNPofmw8mMCwvwnW">
   <meta name="app.content_locale" content="vi">
   <meta name="app.env" content="production">
   <meta name="app.lang" content="vi">
   <meta name="robots" content="index,follow" />
   <meta name="revisit-after" content="1 days">
   <title>Ngọc Rồng Light</title>
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/all.min.css" />
   <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="https://kit.fontawesome.com/c79383dd6c.js" crossorigin="anonymous"></script>
   <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="https://kit.fontawesome.com/c79383dd6c.js" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
   <link rel="icon" href="/img/nro.png" type="image/png">
   <script src="assets/js/app.js" type="text/javascript"></script>
   <link rel="stylesheet" href="./assets/css/app.css">
   <link rel="stylesheet" href="./assets/css/dashboard.css">
   <link rel="stylesheet" href="./assets/css/all.min.css">
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">
   <script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
   <link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
   <script src="https://kit.fontawesome.com/c79383dd6c.js" crossorigin="anonymous"></script>

   <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap"
      rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
   <script src="assets/js/main.js" type="text/javascript"></script>
   <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-FBRLPP0PX2"></script>
   <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments) } gtag("js", new Date()); gtag("config", "G-FBRLPP0PX2");</script>
</head>
<script
   type="text/javascript">/*<![CDATA[*/$(document).ready(function () { if ($(window).width() <= 500) { $(".dashboard").addClass("menu-closed") } else { $(".dashboard").removeClass("menu-closed") } });/*]]>*/</script>
<style>
   .btn-primary {
      border-color: #f44336 !important;
      color: #fff !important
   }

   .border-primary {
      border-color: #f44336 !important
   }

   .bg-primary,
   .btn-primary {
      background-color: #f44336 !important
   }

   .btn-outline-primary:hover {
      background-color: #f44336;
      border-color: #f44336
   }

   .btn-outline-primary {
      color: #f44336;
      border-color: #f44336
   }

   .feature-box {
      padding: 38px 30px;
      position: relative;
      overflow: hidden;
      background: #fff;
      box-shadow: 0 0 29px 0 rgb(18 66 101 / 8%);
      transition: all .3s ease-in-out;
      border-radius: 8px;
      z-index: 1;
      width: 100%
   }

   .feature-icon {
      font-size: 1.8em;
      margin-bottom: 1rem
   }

   .feature-title {
      font-size: 1.2em;
      font-weight: 500;
      padding-bottom: .25rem;
      text-decoration: none;
      color: #212529
   }

   .list-group-item.active {
      background-color: #f44336;
      border-color: #f44336
   }

   a {
      text-decoration: none
   }

   .nav-pills .nav-link.active,
   .nav-pills .show>.nav-link {
      background-color: #f44336
   }

   .nav-link {
      color: #f44336
   }

   .nav-link:focus,
   .nav-link:hover {
      color: #cd3a2f
   }
</style>
<script type="text/javascript">$(document).ready(function () { $(".dropdown-toggle").dropdown() });</script>

<body class="dashboard">
   <header class="navbar navbar-expand-md navbar-light bg-white fixed-top">
      <div class="container-fluid">
         <a class="navbar-brand" href="/index.php">
            <img src="img/nro.png" alt="Quản Lý Tài Khoản  - Ngọc Rồng Light">
         </a>
         <button class="navbar-toggler left-menu-btn-control" type="button" data-toggle="collapse"
            data-target="#left-menu" aria-controls="left-menu" aria-expanded="false" aria-label="Left menu navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"> </ul>
            <ul class="navbar-nav ml-auto align-items-center">
               <li class="nav-item dropdown user-action-header ms-3">
                  <?php if ($_login == null) { ?>
                     <a class="nav-link" href="/login.php">
                        Đăng nhập
                        <i class="fas fa-sign-in-alt" style="font-weight:bold;color:#343a40;margin-right:5px"></i>
                     </a>
                  <?php } else { ?>
                  <li class="nav-item">
                     <i class="fas fa-coin" style="font-weight:bold;color:#343a40;margin-right:5px"></i>
                     <span style="color:#343a40">
                        <?php echo number_format($_coin); ?> VND
                     </span>
                  </li>
                  <div class="dropdown">
                     <a id="navbarDropdown dropdown-toggle" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user me-2" style="font-weight"></i>
                        <?php echo $_username; ?>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile.php">Trang Cá Nhân</a>
                        <a class="dropdown-item" href="security.php">Bảo Mật</a>
                        <a class="dropdown-item" href="nap-tien.php">Nạp Tiền</a>
                        <a class="dropdown-item" href="history.php">Lịch Sử Giao Dịch</a>
                        <a class="dropdown-item" href="/?out">Đăng xuất</a>
                     </div>
                  </div>
               <?php } ?>
               </li>
            </ul>
         </div>
      </div>
   </header>
   <div class="container-fluid account-container">
      <nav class="left-menu menu-closed">
         <ul class="nav flex-column dashboard-menu-left">
            <li class="nav-item">
               <a class="nav-link" href="/index.php">
                  <i class="fas fa-home"></i>&nbsp;Trang Chủ
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/profile.php">
                  <i class="fas fa-user me-2"></i>&nbsp;Thông tin tài khoản
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="security.php">
                  <i class="fas fa-lock"></i>&nbsp;Bảo mật
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="nap-tien.php">
                  <i class="fas fa-wallet"></i>&nbsp;Nạp Tiền
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="history.php">
                  <i class="fas fa-history"></i>&nbsp;Lịch sử giao dịch
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/?out">
                  <i class="fas fa-sign-out-alt"></i>&nbsp;Đăng xuất
               </a>
            </li>
         </ul>
      </nav>
   </div>
   <script
      type="text/javascript">$(document).ready(function () { $(".left-menu-btn-control").click(function () { $(".left-menu").toggleClass("menu-closed") }) });</script>
   <div class="container-fluid account-container">
      <div class="left-menu">
         <ul class="nav flex-column dashboard-menu-left">
            <li class="nav-item">
               <a class="nav-link" href="/index.php">
                  <i class="fas fa-home"></i>&nbsp;Trang Chủ </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/profile.php">
                  <i class="fas fa-user me-2"></i>&nbsp;Thông tin tài khoản </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="security.php">
                  <i class="fas fa-lock"></i>&nbsp;Bảo mật </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="nap-tien.php">
                  <i class="fas fa-wallet"></i>&nbsp;Nạp Tiền </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="history.php">
                  <i class="fas fa-history"></i>&nbsp;Lịch sử giao dịch </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/?out">
                  <i class="fas fa-sign-out-alt"></i>&nbsp;Đăng xuất </a>
            </li>
         </ul>
      </div>
      <main class="flex-grow-1 flex-shrink-1">
         <script type="text/javascript">new WOW().init();</script>
         <br><br><br>
         <div class="container py-3">
            <center>
               <h3>Lịch Sử Giao Dịch</h3>
               <p class="text-muted">Bao gồm các khoản thanh toán hoặc các giao dịch nạp vào game của bạn.</p>
               <hr>
            </center>
            <table class="table">
         </div>
         <div class="py-3 text-center">
            <div class="table-responsive">
               <thead>
                  <tr>
                     <th scope="col">Tên Game</th>
                     <th scope="col">Mệnh Giá</th>
                     <th scope="col">Thẻ</th>
                     <th scope="col">Trạng Thái</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                  require_once("./api/config.php");

                  if (isset($_username)) {
                     $stmt = $conn->prepare("SELECT * FROM trans_log WHERE name = ? ORDER BY id DESC LIMIT 10");
                     $stmt->bind_param("s", $_username);
                     $stmt->execute();
                     $result = $stmt->get_result();

                     if ($result->num_rows > 0) {
                        echo '<tbody>';

                        while ($row = $result->fetch_assoc()) {
                           $status = '';

                           switch ($row['status']) {
                              case 1:
                                 $status = '<span class="badge badge-success" style="font-size:100%;color:black;">Thành Công</span>';
                                 break;
                              case 2:
                                 $status = '<span class="badge badge-danger" style="font-size:100%;color:black;">Thất Bại</span>';
                                 break;
                              case 3:
                                 $status = '<span class="badge badge-info" style="font-size:100%;color:black;">Sai Mệnh Giá</span>';
                                 break;
                              default:
                                 $status = '<span class="badge badge-info" style="font-size:100%;color:black;">Chờ Duyệt</span>';
                           }

                           echo '<tr>
              <td>' . $row['name'] . '</td>
              <td>' . number_format($row['amount']) . 'đ</td>
              <td>' . $row['type'] . '</td>
              <td>' . $status . '</td>
              </tr>';
                        }

                        echo '</tbody>';
                     } else {
                        echo '<tbody>
                      <tr>
                         <td colspan="6" align="center"><span style="font-size:100%;"><< Lịch Sử Trống >></span></td>
                      </tr>
                     </tbody>';
                     }
                  } else {
                     echo 'Chưa có tên người dùng được cung cấp.';
                  }
                  ?>
               </tbody>
               </table>
            </div>
            <div id="status"></div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
               integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
               crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
               integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
               crossorigin="anonymous"></script>
         </div>
         
      </main>
      <?php
            include_once('end.php');
            ?>
</body>