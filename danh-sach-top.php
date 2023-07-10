<?php
include_once 'set.php';
// include_once 'head.php';
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

   .copy-text {
      cursor: pointer
   }
</style>
<script
   type="text/javascript">/*<![CDATA[*/$(document).ready(function () { if ($(window).width() <= 500) { $(".dashboard").addClass("menu-closed") } else { $(".dashboard").removeClass("menu-closed") } });/*]]>*/</script>
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
   <div class="container py-3">
      <main>
         <section class="text-center container">
            <div class="row py-md-3">
               <div class="col-lg-6 col-md-8 mx-auto">
                  <br>
                  <br>
                  <br>
                  <br>
                  <h2 class="fw-light">Ngọc Rồng Light</h2>
                  <?php if ($_login == null) { ?>
                     <p class="lead text-muted">
                        Đăng ký tài khoản nhận quà tân thủ và nhiều phần thưởng hấp dẫn.
                     </p>
                     <nav class="my-2 my-md-0 mr-md-3">
                        <a class="btn btn-outline-primary" href="/login.php" style="font-weight:500">Đăng nhập</a>
                        <a class="btn btn-outline-primary" href="/register.php" style="font-weight:500">Đăng ký</a>
                     <?php } else { ?>
                        <?php
                        if ($_status == "0") {
                           echo '<div "lead text-muted">Mở Tính Năng Giao Dịch, Thách Đấu <a href="/active.php">Nhấn Vào Đây</a> (Phí: 20,000 VND = 20,000 VND).</div>';
                        } elseif ($_status == "-1") {
                           echo '<div "lead text-muted">Tài khoản đang bị khóa, để mở lại bạn cần phải <a href="/active.php">mở khóa tài khoản</a> (Phí: 20,000 VND = 20,000 VND).</div>';
                        } elseif ($_status == "1") {
                           echo '<div "lead text-muted">Bạn Đã Xem Lần Đầu Rồi Hihi :3</div>';
                        }
                        ?>
                     <?php } ?>
               </div>
            </div>
            <div class="center">
               <div class="title-behavior">
                  <marquee behavior="scroll" direction="left">Chào mừng bạn đến với máy chủ Ngọc Rồng Light, Đội
                     ngũ
                     Admin chúc các bạn có những trải nghiệm tuyệt vời khi tham gia vào máy chủ của Light
                  </marquee>
               </div>
            </div>
            <style>
               .center {
                  display: flex;
                  justify-content: center;
                  align-items: center
               }

               .title-behavior {
                  width: 50%
               }
            </style>
         </section>
         <div class="row g-4 py-4 row-cols-1 row-cols-md-4">
            <div class="col d-flex align-items-stretch">
               <div class="feature-box">
                  <div class="text-dark">
                     <i class="fa fa-donate"></i>
                  </div>
                  <div>
                     <a href="top-nap.php" class="feature-title">TOP NẠP</a>
                     <p>Kiểm Tra đua top Xem</p>
                     <a href="top-nap.php" class="btn btn-primary">
                        Xem ngay
                     </a>
                  </div>
               </div>
            </div>
            <div class="col d-flex align-items-stretch">
               <div class="feature-box">
                  <div class="text-dark">
                     <i class="fa fa-trophy"></i>
                  </div>
                  <div>
                     <a href="top-suc-manh.php" class="feature-title">TOP SỨC MẠNH</a>
                     <p>Kiểm tra đua top sức mạnh.</p>
                     <a href="top-suc-manh.php" class="btn btn-primary">
                        Xem ngay
                     </a>
                  </div>
               </div>
            </div>
            <div class="col d-flex align-items-stretch">
               <div class="feature-box">
                  <div class="text-dark">
                     <i class="fas fa-star" aria-hidden="true"></i>
                  </div>
                  <div>
                     <a href="top-su-kien.php" class="feature-title">TOP SỰ KIỆN</a>
                     <p>Kiểm tra đua top sự kiện.</p>
                     <a href="top-su-kien.php" class="btn btn-primary">
                        Mở ngay
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="alert alert-warning" style="background-color:#fdf8da">
            <div class="topic_name">
               <div style="width:55px;float:left;margin-right:10px">
                  <b data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <img src="/img/avatar1.png" style="border-color:red;width:50px;height:55px">
               </div>
               <i class="fa fa-check-circle-o" aria-hidden="true" style="color:red"></i> <a id="modal-body">Xem Thẻ
                  Tích Lũy
               </a>
               </b>
               <div class="box_name_eman">bởi <b><b>
                        <font style="color:red">ADMIN</font>
                     </b></b> - <span> Xem chi tiết tại đây !!! </span>
               </div>
            </div>
         </div>
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Xem Thẻ Tích Lũy</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="#modal-body">
                     <div class="box_ndung_bviet"><b>CHƯA CẬP NHẬT.....</b><br>
                        <br>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <script src="assets/js/jquery.form.min.js"></script>
      <script src="assets/js/clipboard.min.js"></script>
      <script src="assets/js/jquery.dataTables.min.js"></script>
      <script src="assets/js/dataTables.bootstrap5.min.js"></script>
      <?php
      include_once 'end.php';
      ?>
   </div>
</body>