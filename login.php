<?php
include_once 'set.php';
include_once 'head.php';
$_title = "NRO Light - Đăng Nhập";
// include_once 'head.php';
$alert = null;
if ($_login == null) {
   if (isset($_POST['username'])) {

      $user = htmlspecialchars($_POST['username']);
      $pass = htmlspecialchars($_POST['password']);
      $select = _fetch(_select("*", 'account', "username='$user'"));

      if ($select != null && $select['password'] == $pass) {
         $_SESSION['account'] = $user;
         header('location:/index.php');
      } else {
         echo '
   	                <script type="text/javascript">
   	                
   	                $(document).ready(function(){
   	                
   	                  swal({
   	                        title: "Thất bại",
   	                        text: "Thông tin đăng nhập không chính xác!",
   	                        type: "error",
   	                        confirmButtonText: "OK",
   	                  })
   	                });
   	                
   	                </script>
   	                ';
      }

   }
} else {
   header("location:/");
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
   <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap"
      rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
   <script src="assets/js/main.js" type="text/javascript"></script>
   <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-FBRLPP0PX2"></script>
   <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments) } gtag("js", new Date()); gtag("config", "G-FBRLPP0PX2");</script>
</head>
<script
   type="text/javascript">/*<![CDATA[*/$(document).ready(function () { if ($(window).width() <= 500) { $(".dashboard").addClass("menu-closed") } else { $(".dashboard").removeClass("menu-closed") } });/*]]>*/</script>

<body class="dashboard">
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

   <body class="dashboard">
      <header class="navbar navbar-expand-md navbar-light bg-white fixed-top">
         <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">
               <img src="img/nro.png" alt="Quản Lý Tài Khoản  - Ngọc Rồng Light">
            </a>
            <button class="navbar-toggler left-menu-btn-control" type="button" data-toggle="collapse"
               data-target="#left-menu" aria-controls="left-menu" aria-expanded="false"
               aria-label="Left menu navigation">
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
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
            <br>
            <form class="form-signin" method="POST">
               <div class="text-center mb-2">
                  <img src="/img/nro.png" alt="" width="57" height="57">
               </div>
               <h1 class="h3 mb-3 fw-normal text-center">Vui lòng đăng nhập</h1>
               <input type="hidden" name="_token" value="JEGpj39vMoqzUAPDoHWTY8Y4jJiy4t0mhPST9nds">
               <?php echo $alert; ?>
               <label class="sr-only">Tài khoản</label>
               <input type="text" class="form-control" placeholder="Tài khoản" required="" name="username">
               <label class="sr-only">Mật khẩu</label>
               <input type="password" class="form-control" placeholder="Mật khẩu" required="" name="password"
                  autocomplete="password">
               <div class="checkbox mb-3">
                  <label>
                     <input type="checkbox" name="remember" value="forever"> Nhớ đăng nhập
                  </label>
               </div>
               <button class="btn btn-primary w-100" type="submit">Đăng nhập</button>
               <div class="text-center pt-2">
                  Bạn chưa có tài khoản? <a href="register.php">Đăng ký ngay</a>
               </div>
               <div class="text-center pt-2">
                  <a href="#">Quên mật khẩu</a>
               </div>
            </form>
            <style>
               .form-signin {
                  width: 100%;
                  max-width: 400px;
                  padding: 15px;
                  margin: 0 auto
               }

               .form-signin .checkbox {
                  font-weight: 400
               }

               .form-signin .form-control {
                  position: relative;
                  box-sizing: border-box;
                  height: auto;
                  padding: 10px;
                  font-size: 16px
               }

               .form-signin .form-control:focus {
                  z-index: 2
               }

               .form-signin input[type="password"] {
                  margin-bottom: 10px;
                  border-top-left-radius: 0;
                  border-top-right-radius: 0
               }
            </style>
         </main>
         <script src="assets/js/jquery.form.min.js"></script>
         <script src="assets/js/clipboard.min.js"></script>
         <script src="assets/js/jquery.dataTables.min.js"></script>
         <script src="assets/js/dataTables.bootstrap5.min.js"></script>
         <?php
         include_once 'end.php';
         ?>
      </div>