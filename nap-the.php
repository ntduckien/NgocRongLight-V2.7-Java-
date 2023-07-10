<?php
include('set.php');
if (session_status() == PHP_SESSION_NONE) {
   session_start(); //khởi động phiên làm việc
}

$_alert = null;
$_title = "NGỌC RỒNG LIGHT - Thanh Toán";
// include_once 'head.php';
include_once('connect.php');
if ($_login == null) {
   header("location:/login.php");
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
         <div class="container py-3">
            <br><br><br>
            <center>
               <h3>Nạp Tiền - Ngọc Rồng Light</h3>
               <p class="text-muted">Vui lòng chọn hình thức nạp tiền để tiếp tục</p>
               <hr>
            </center>
            <div class="card-body">
               <script type="text/javascript">new WOW().init();</script>
               <form method="POST" action="#" id="myform">
                  <tbody>
                     <label>Tài Khoản: </label><br>
                     <input type="text" class="form-control form-control-alternative"
                        style="background-color:#dcdcdc;font-weight:bold;color:#696969" name="username" value="<?php echo $_username; ?>
                           " readonly required>
                     <label>Loại thẻ:</label>
                     <select class="form-control form-control-alternative" name="card_type" required>
                        <option value="">Chọn loại thẻ</option>
                        <?php
                        $cdurl = curl_init("https://thesieutoc.net/card_info.php");
                        curl_setopt($cdurl, CURLOPT_FAILONERROR, true);
                        curl_setopt($cdurl, CURLOPT_FOLLOWLOCATION, true);
                        curl_setopt($cdurl, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($cdurl, CURLOPT_CAINFO, __DIR__ . '/api/curl-ca-bundle.crt');
                        curl_setopt($cdurl, CURLOPT_CAPATH, __DIR__ . '/api/curl-ca-bundle.crt');
                        $obj = json_decode(curl_exec($cdurl), true);
                        curl_close($cdurl);
                        $length = count($obj);
                        for ($i = 0; $i < $length; $i++) {
                           if ($obj[$i]['status'] == 1) {
                              echo '<option value="' . $obj[$i]['name'] . '">' . $obj[$i]['name'] . ' (' . $obj[$i]['chietkhau'] . '%)</option> ';
                           }
                        }
                        ?>
                     </select>
                     <label>Mệnh giá:</label>
                     <select class="form-control form-control-alternative" name="card_amount" required>
                        <option value="">Chọn mệnh giá</option>
                        <option value="10000">10.000</option>
                        <option value="20000">20.000</option>
                        <option value="30000">30.000 </option>
                        <option value="50000">50.000</option>
                        <option value="100000">100.000</option>
                        <option value="200000">200.000</option>
                        <option value="300000">300.000</option>
                        <option value="500000">500.000</option>
                        <option value="1000000">1.000.000</option>
                     </select>
                     <label>Số seri:</label>
                     <input type="text" class="form-control form-control-alternative" name="serial" required />
                     <label>Mã thẻ:</label>
                     <input type="text" class="form-control form-control-alternative" name="pin" required /><br>
                     <button type="submit" class="btn btn-outline-primary" name="submit">NẠP NGAY</button>
                  </tbody>
               </form>
               <script
                  type="text/javascript">/*<![CDATA[*/$(document).ready(function () { var a = 0; $("#myform").submit(function (c) { $("#status").html(""); c.preventDefault(); var b = new Date().getTime(); if (b - a < 1000) { swal("Thông báo", "Vui lòng đợi ít nhất 10 giây trước khi nạp tiếp", "error"); return false } a = b; $.ajax({ url: "./ajax/card.php", type: "post", data: $("#myform").serialize(), success: function (d) { $("#status").html(d); document.getElementById("myform").reset(); $("#load_hs").load("history.php") } }) }) });/*]]>*/</script>
               <br><br>
               <div>- Hãy Kiểm Tra Kĩ Thông Tin Trước Khi Nạp</div>
               <div>- Nạp Sai Mệnh Giá, Thông Tin Thẻ Admin Không Chịu Trách Nhiệm.</div>
               <div>- Quá 30 Phút Thẻ Chưa Duyệt Hãy Báo Ngay Cho Admin Để Được Hỗ Trợ Nhanh Nhất!</div>
            </div>
         </div>
   </div>
</body>
<?php
include_once 'end.php';
?>
<div id="status"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
   integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
   integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</div>
</main>