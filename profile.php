<?php
include_once 'set.php';
if ($_login == null) {
   header("location:/login.php");
}
$_active = (isset($_active)) ? $_active : null;
$_tcoin = (isset($_tcoin)) ? $_tcoin : 0;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function get_user_ip()
{
   if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $addr = explode(",", $_SERVER['HTTP_X_FORWARDED_FOR']);
      return trim($addr[0]);
   } else {
      return $_SERVER['REMOTE_ADDR'];
   }
}
?>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

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

   @media(max-width:500px) {
      .sidebar {
         display: none
      }
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
      <nav class="left-menu">
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
      </nav>
      <main class="main">
         <div class="container">
            <div class="dashboard-container">
               <div class="dashboard-content">
                  <div class="profile-page settings dashboard-panel">
                     <h2 class="heading">Thông tin cá nhân</h2>
                     <hr>
                     <div class="row profile-summary">
                        <div class="col-sm-3 d-flex flex-column align-items-center">
                           <img data-toggle="modal" data-target="#changeAvatarModal" class="avatar-image rounded-circle"
                              src="img/nro.png" alt="">
                        </div>
                        <div class="col-sm-9 mt-4">
                           <div class="info-row row no-gutters">
                              <div class="col-sm-2 col-3">Địa Chỉ IP: </div>
                              <div class="col-sm-10 col-9">
                                 <?php echo get_user_ip(); ?> <br>
                                 <small class="text-muted"> Đăng nhập từ :
                                    <?php
                                    $user_agent = $_SERVER['HTTP_USER_AGENT'];

                                    // Find browser name
                                    if (strpos($user_agent, 'Chrome') !== false) {
                                       $browser_name = 'Google Chrome';
                                    } elseif (strpos($user_agent, 'Firefox') !== false) {
                                       $browser_name = 'Mozilla Firefox';
                                    } elseif (strpos($user_agent, 'Safari') !== false) {
                                       $browser_name = 'Safari';
                                    } elseif (strpos($user_agent, 'MSIE') !== false || strpos($user_agent, 'Trident/7') !== false) {
                                       $browser_name = 'Internet Explorer';
                                    } else {
                                       $browser_name = 'Unknown';
                                    }

                                    // Find device type
                                    if (strpos($user_agent, 'iPhone') !== false) {
                                       $device_type = 'Điện thoại iPhone';
                                    } elseif (strpos($user_agent, 'Mobile') !== false || strpos($user_agent, 'Android') !== false) {
                                       $device_type = 'Điện thoại di động';
                                    } elseif (strpos($user_agent, 'iPad') !== false) {
                                       $device_type = 'Máy tính bảng iPad';
                                    } elseif (strpos($user_agent, 'Windows') !== false) {
                                       $device_type = 'Máy Tính Windows';
                                    } elseif (strpos($user_agent, 'Mac OS X') !== false) {
                                       $device_type = 'macOS';
                                    } elseif (strpos($user_agent, 'Linux') !== false) {
                                       $device_type = 'Linux';
                                    } else {
                                       $device_type = 'Máy tính để bàn hoặc laptop';
                                    }

                                    // Display browser and device information
                                    echo "$browser_name từ $device_type";
                                    ?>
                                 </small>
                              </div>
                           </div>
                           <div class="info-row row no-gutters">
                              <div class="col-sm-2 col-3">Bảo mật</div>
                              <div class="col-sm-10 col-9">
                                 <div class="bao-mat">
                                    <style>
                                       .checked-vote {
                                          font-weight: 900
                                       }
                                    </style>
                                    <i class="far fa-star checked-vote" aria-hidden="true"></i>
                                    <i class="far fa-star checked-vote" aria-hidden="true"></i>
                                    <i class="far fa-star checked-vote" aria-hidden="true"></i>
                                    <i class="far fa-star" aria-hidden="true"></i>
                                    <i class="far fa-star" aria-hidden="true"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr>
                     <h3 class="heading">Thông tin tài khoản</h3>
                     <ul class="settings-list">
                        <li class="setting-item">
                           <div class="row info">
                              <div class="col-3">
                                 <b>Tên Tài Khoản :</b>
                              </div>
                              <div class="col-5">
                                 <?php echo $_username; ?>
                              </div>
                           </div>
                        </li>
                        <li class="setting-item">
                           <div class="row info">
                              <div class="col-3">
                                 <b>Số Dư :</b>
                              </div>
                              <div class="col-5">
                                 <?php echo number_format($_coin); ?> VND
                              </div>
                           </div>
                        </li>
                        <li class="setting-item">
                           <div class="row info">
                              <div class="col-3">
                                 <b>Tổng Nạp :</b>
                              </div>
                              <div class="col-5">
                                 <?php echo number_format($_tcoin); ?> VND
                              </div>
                           </div>
                        </li>
                        <li class="setting-item">
                           <div class="row info">
                              <div class="col-3">
                                 <b>Mật Khẩu Cấp 2 :</b>
                              </div>
                              <div class="col-5">
                                 <strong>
                                    <span style="color:#e90600">
                                       <?php if ($_user !== null) { ?>
                                          <?php if ($has_mkc2) { ?>
                                             <p>Đã cập nhật.</p>
                                          <?php } else { ?>
                                             <p>Bạn chưa đặt mật khẩu cấp 2. Hãy đặt ngay để bảo vệ tài khoản
                                                của
                                                mình.
                                             </p>
                                          <?php }
                                       } ?>
                                    </span>
                                 </strong>
                              </div>
                           </div>
                        </li>
                        <li class="setting-item">
                           <div class="row info">
                              <div class="col-3">
                                 <b>Trạng Thái Thành Viên :</b>
                              </div>
                              <div class="col-5">
                                 <strong>
                                    <span style="color:#e90600">
                                       <?php if ($_status == "0") {
                                          echo 'Chưa kích hoạt';
                                       } else if ($_status == "-1") {
                                          echo 'Đang bị khoá';
                                       } else if ($_status == "1") {
                                          echo 'Đã kích hoạt';
                                       } ?>
                                    </span>
                                 </strong>
                              </div>
                           </div>
                        </li>
                        <li class="setting-item">
                           <div class="row info">
                              <div class="col-3">
                                 <b>Mật Khẩu :</b>
                              </div>
                              <form>
                                 <div class="col-5 d-flex">
                                    <input type="password" id="passwordInput" value="<?php echo $_password; ?>"
                                       class="form-control" style="padding-right:30px;font-size:14px;width:200px"
                                       readonly autocomplete="password">
                                    <button class="btn btn-default ml-2" type="button" id="showPasswordButton"
                                       style="padding:6px">
                                       <i class="far fa-eye"></i>
                                    </button>
                                    <button class="btn btn-default ml-2" type="button" id="hidePasswordButton"
                                       style="display:none;padding:6px">
                                       <i class="far fa-eye-slash"></i>
                                    </button>
                                 </div>
                              </form>
                              <script>$(document).ready(function () { $("#showPasswordButton").click(function () { $("#passwordInput").attr("type", "text"); $("#showPasswordButton").hide(); $("#hidePasswordButton").show() }); $("#hidePasswordButton").click(function () { $("#passwordInput").attr("type", "password"); $("#hidePasswordButton").hide(); $("#showPasswordButton").show() }) });</script>
                           </div>
                    </li>
                  <br>
                  <li class="setting-item">
                     <div class="row info">
                        <div class="col-3">
                           <b>Đăng Xuất :</b>
                        </div>
                        <div class="col-5">
                           <a class="btn btn-outline-primary" href="/?out" style="font-weight:500">Đăng
                              xuất</a>
                        </div>
                     </div>
                  </li>
                  </ul>
               </div>
            </div>
         </div>
   </div>
   </div>
   <?php
   include_once('end.php');
   ?>
</body>

</html>
</main>