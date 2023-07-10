<?php
include_once 'set.php';
// include_once 'head.php';
if ($_login == null) {
   header("location:/login.php");
}
?>
<!doctype html>
<html lang="en">
<!DOCTYPE html>
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
   <script src="assets/js/main.js" type="text/javascript"></script>
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-FBRLPP0PX2"></script>
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());

      gtag('config', 'G-FBRLPP0PX2');
   </script>
</head>
<style>
   .btn-primary {
      border-color: #f44336 !important;
      color: #fff !important;
   }

   .border-primary {
      border-color: #f44336 !important;
   }

   .bg-primary,
   .btn-primary {
      background-color: #f44336 !important;
   }

   .btn-outline-primary:hover {
      background-color: #f44336;
      border-color: #f44336;
   }

   .btn-outline-primary {
      color: #f44336;
      border-color: #f44336;
   }

   .feature-box {
      padding: 38px 30px;
      position: relative;
      overflow: hidden;
      background: #fff;
      box-shadow: 0 0 29px 0 rgb(18 66 101 / 8%);
      transition: all 0.3s ease-in-out;
      border-radius: 8px;
      z-index: 1;
      width: 100%;
   }

   .feature-icon {
      font-size: 1.8em;
      margin-bottom: 1rem;
   }

   .feature-title {
      font-size: 1.2em;
      font-weight: 500;
      padding-bottom: 0.25rem;
      text-decoration: none;
      color: #212529;
   }

   .list-group-item.active {
      background-color: #f44336;
      border-color: #f44336;
   }

   a {
      text-decoration: none;
   }

   .nav-pills .nav-link.active,
   .nav-pills .show>.nav-link {
      background-color: #f44336;
   }

   .nav-link {
      color: #f44336;
   }

   .nav-link:focus,
   .nav-link:hover {
      color: #cd3a2f;
   }

   .copy-text {
      cursor: pointer;
   }
</style>
<script type="text/javascript">
   $(document).ready(function () {
      //$(window).on("load resize", function() {
      //console.log($(window).width());
      if ($(window).width() <= 500) {
         $(".dashboard").addClass("menu-closed");
      } else {
         $(".dashboard").removeClass("menu-closed");
      }
      //});
   });
</script>
<script type="text/javascript">
   $(document).ready(function () {
      $('.dropdown-toggle').dropdown();
   });
</script>

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
                        <i class="fas fa-sign-in-alt" style="font-weight: bold;color:#343a40; margin-right: 5px;"></i>
                     </a>
                  <?php } else { ?>
                  <li class="nav-item">
                     <i class="fas fa-coin" style="font-weight: bold;color:#343a40; margin-right: 5px;"></i>
                     <span style="color:#343a40;">
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
         <!-- Add the 'menu-closed' class here -->
         <ul class="nav flex-column dashboard-menu-left">
            <li class="nav-item">
               <a class="nav-link " href="/index.php">
                  <i class="fas fa-home"></i>&nbsp;Trang Chủ
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link " href="/profile.php">
                  <i class="fas fa-user me-2"></i>&nbsp;Thông tin tài khoản
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link " href="security.php">
                  <i class="fas fa-lock"></i>&nbsp;Bảo mật
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link " href="nap-tien.php">
                  <i class="fas fa-wallet"></i>&nbsp;Nạp Tiền
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link " href="history.php">
                  <i class="fas fa-history"></i>&nbsp;Lịch sử giao dịch
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link " href="/?out">
                  <i class="fas fa-sign-out-alt"></i>&nbsp;Đăng xuất
               </a>
            </li>
         </ul>
      </nav>
   </div>
   <script type="text/javascript">
      $(document).ready(function () {
         $('.left-menu-btn-control').click(function () {
            $('#left-menu').toggleClass('menu-closed');
         });
      });
   </script>
   <div class="container py-3">
      <main>
         <br><br><br>
         <div class="row">
            <div class="col-2 pl-0 pr-0">
               <div class="text-center">
                  <img src="assets/images/avatar/avatar1.png" style="border-color:red; width: 50px; height: 50px;"><br>
                  <div class="mt-2"></div>
                  <b class="text text-danger mt-5">ADMIN</b>
                  <dd class="author-name mb-0">
                     <img src="assets/images/gacon.gif" width="25" height="15"> <b
                        style="color:#ff0000"><small>[Admin]</small></b>
                  </dd>
                  <dd class="author-name mb-0">
                     <span style="color:red; font-size: 90%">♥</span>
                  </dd>
               </div>
            </div>
            <div class="col-10 pl-0">
               <div class="alert alert-success">
                  <div class="row pl-2">
                     <span style="font-size: 10px">Đăng ngày 17-11-2022</span>
                  </div>
                  <div class="row pl-2">
                     <b class="text text-danger" style="font-size: 18px;"> Hướng Dẫn Mở Thành Viên Ngọc Rồng
                        Light Với 20.000đ </b>
                  </div>
                  <p>Thân chào các <span style="color:#3498db"><strong>Chiến binh,</strong></span></p>
                  <p>Hôm nay mình sẽ hướng dẫn anh em mở thành viên tại <span style="color:#e83e8c"><strong>Ngọc
                           Rồng Light</strong></span>
                  </p>
                  <span style="color:#dc3545"><strong>
                        Người chơi đăng kí có thể vào game trải nghiệm bình thường tuy nhiên sẽ bị giới hạn một
                        số tính năng.<br>
                        Mở thành viên Light người chơi sẽ được rất nhiều quyền lợi :</span><br>
                  <span style="color:#343a40;">
                     - Mở Tính Năng Giao Dịch<br>
                     - Mở Tính Năng Chat Kênh Thế Giới<br>
                     - Mở Tính Năng Thách Đấu<br>
                     </strong></span>
                  <hr>
                  <b class="text text-danger" style="font-size: 30px;"> Hướng Dẫn Trong Game </b><br>
                  <span style="color:#212529"><strong>Bước 1 : Nạp Qua Ví Momo, Thẻ Ngân Hàng</strong></span><br>
                  Hiện tại Ngọc Rồng Light chỉ hỗ trợ nạp qua Ví Momo, Thẻ Ngân Hàng <br>
                  <a href="login.php"><b class="text-primary"> Nạp Tại Đây </b></a><br>
                  <b class="text text-danger">Lưu ý :</b></br>
                  - Nạp Qua Ví Momo, Thẻ Ngân Hàng hãy đọc kĩ hướng dẫn <b>
                     - Sai nội dung, tên tài khoản không hỗ trợ<br>
                     - Gặp lỗi ib page để được hỗ trợ<br>
                     <span style="color:#212529"><strong>Bước 2 : Kiểm Tra Số Dư</strong></span></br>
                     Sau khi nạp tiền các bạn có thể kiểm tra số dư
                     <a href="profile.php"><b class="text-primary"> Tại Đây </b></a></br>
                     Hoặc có thể gặp NPC tại nhà ở mỗi hành tinh để kiểm tra</br>
                     NPC > Nạp Tiền > Số tiền sẽ hiển thị như ảnh
                     <center><img width="100%" src="assets/images/huongdan/huongdan4.png"></center>
                     </br>
                     <span style="color:#212529"><strong>Bước 3 : Kích Hoạt Tài Khoản</strong></span></br>
                     Sau khi nạp tiền vào tài khoản các bạn vào NPC tại nhà ở các làng để mở thành viên.</br>
                     <center><img width="100%" src="assets/images/huongdan/mothanhvien.png"></center>
                     </br>
                     Sau đó có thể kích hoạt và trải nghiệm game .
                     <center><img width="100%" src="assets/images/huongdan/mothanhvien1.png"></center>
                     </br>
                     <b class="text text-danger" style="font-size: 30px;"> Hướng Dẫn Trên Website </b><br>
                     <span style="color:#212529"><strong>Bước 1 : Nạp Qua Ví Momo, Thẻ Ngân
                           Hàng</strong></span><br>
                     Hiện tại Ngọc Rồng Light chỉ hỗ trợ nạp qua Ví Momo, Thẻ Ngân Hàng <br>
                     <a href="login.php"><b class="text-primary"> Nạp Tại Đây </b></a><br>
                     <b class="text text-danger">Lưu ý :</b></br>
                     - Nạp Qua Ví Momo, Thẻ Ngân Hàng hãy đọc kĩ hướng dẫn <b>
                        - Sai nội dung, tên tài khoản không hỗ trợ<br>
                        - Gặp lỗi ib page để được hỗ trợ<br>
                        <span style="color:#212529"><strong>Bước 2 : Kiểm Tra Số Dư</strong></span></br>
                        Sau khi nạp tiền các bạn có thể kiểm tra số dư
                        <a href="profile.php"><b class="text-primary"> Tại Đây </b></a></br>
                        <span style="color:#212529"><strong>Bước 3 : Kích Hoạt Tài Khoản</strong></span></br>
                        Sau khi nạp tiền vào tài khoản các bạn hãy nhấn vào: <a href="/active.php">Mở Thành
                           Viên</a><br>
                        Sau khi mở thành viên bạn có thể Giao dịch, Chat thế giới, Thách đấu
                        <div class="row pl-2 pt-2">
                           <a href="index.html">
                              <b class="text-primary">
                                 <i class="fa fa-chevron-left"></i>
                                 Trở lại
                              </b>
                           </a>
                        </div>
               </div>
            </div>
         </div>
      </main>
      <script src="assets/js/jquery.form.min.js"></script>
      <script src="assets/js/clipboard.min.js"></script>
      <script src="assets/js/jquery.dataTables.min.js"></script>
      <script src="assets/js/dataTables.bootstrap5.min.js"></script>
      <script src="assets/js/appd620.js?_=1668687100"></script>
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
         <div class="text-center">
            Trò chơi không có bản quyền chính thức, hãy cân nhắc kỹ trước khi tham gia.<br>
            Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe.
         </div>
      </footer>
   </div>