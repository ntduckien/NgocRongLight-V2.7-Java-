<?php
// include_once 'head.php';
include_once 'set.php';
if ($_login == null) {
   header("location:/login.php");
}
?>
<!DOCTYPE html>
<html lang=vi>
<meta http-equiv=content-type content="text/html;charset=UTF-8" />

<head>
   <meta charset=utf-8>
   <meta http-equiv=X-UA-Compatible content="IE=edge">
   <meta name=viewport
      content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no, shrink-to-fit=no">
   <meta name=apple-mobile-web-app-capable content=yes>
   <meta name=csrf-token content=jg0aMEdvyglZMgqfTAyPbDwjsNPofmw8mMCwvwnW>
   <meta name=app.content_locale content=vi>
   <meta name=app.env content=production>
   <meta name=app.lang content=vi>
   <meta name=robots content=index,follow />
   <meta name=revisit-after content="1 days">
   <title>Ngọc Rồng Light</title>
   <link href=assets/css/bootstrap.min.css rel=stylesheet>
   <link rel=stylesheet href=assets/css/all.min.css />
   <link rel=stylesheet href=assets/css/dataTables.bootstrap5.min.css>
   <script src=assets/js/jquery.min.js></script>
   <script src=assets/js/bootstrap.min.js></script>
   <script src=https://kit.fontawesome.com/c79383dd6c.js crossorigin=anonymous></script>
   <script src=http://cdn.jsdelivr.net/npm/sweetalert2@11></script>
   <script src=https://kit.fontawesome.com/c79383dd6c.js crossorigin=anonymous></script>
   <script src=https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js></script>
   <link rel=stylesheet href=https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css>
   <link rel=icon href=/img/nro.png type=image/png>
   <script src=assets/js/app.js type=text/javascript></script>
   <link rel=stylesheet href=./assets/css/app.css>
   <link rel=stylesheet href=./assets/css/dashboard.css>
   <link rel=stylesheet href=./assets/css/all.min.css>
   <script src=https://unpkg.com/sweetalert/dist/sweetalert.min.js></script>
   <link rel=stylesheet href=https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css>
   <script src=https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js></script>
   <link rel=stylesheet href=https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css>
   <link rel=stylesheet href=https://use.fontawesome.com/releases/v5.3.1/css/all.css crossorigin=anonymous>
   <script src=https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js></script>
   <link rel=stylesheet href=https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css />
   <script src=https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js></script>
   <script src=https://kit.fontawesome.com/c79383dd6c.js crossorigin=anonymous></script>

   <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap"
      rel=stylesheet>
   <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js></script>
   <script src=https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js></script>
   <script src=assets/js/main.js type=text/javascript></script>
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-FBRLPP0PX2"></script>
   <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments) } gtag("js", new Date()); gtag("config", "G-FBRLPP0PX2");</script>
</head>
<script
   type=text/javascript>$(document).ready(function(){if($(window).width()<=500){$(".dashboard").addClass("menu-closed")}else{$(".dashboard").removeClass("menu-closed")}});</script>
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

   .choose-method {
      min-width: 220px
   }

   .choose-method .popular {
      z-index: 1;
      border: 3px solid #007bff !important
   }

   .choose-method .card {
      border: 3px solid #dedede;
      height: 93%
   }

   .choose-method .card:hover {
      z-index: 1;
      border: 3px solid #007bff;
      box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important
   }
</style>
<script type=text/javascript>$(document).ready(function(){$(".dropdown-toggle").dropdown()});</script>

<body class=dashboard>
   <header class="navbar navbar-expand-md navbar-light bg-white fixed-top">
      <div class=container-fluid>
         <a class=navbar-brand href=/index.php>
            <img src=img/nro.png alt="Quản Lý Tài Khoản  - Ngọc Rồng Light">
         </a>
         <button class="navbar-toggler left-menu-btn-control" type=button data-toggle=collapse data-target=#left-menu
            aria-controls=left-menu aria-expanded=false aria-label="Left menu navigation">
            <span class=navbar-toggler-icon></span>
         </button>
         <div class="collapse navbar-collapse" id=navbarSupportedContent>
            <ul class="navbar-nav mr-auto"> </ul>
            <ul class="navbar-nav ml-auto align-items-center">
               <li class="nav-item dropdown user-action-header ms-3">
                  <?php if ($_login == null) { ?>
                     <a class=nav-link href=/login.php>
                        Đăng nhập
                        <i class="fas fa-sign-in-alt" style=font-weight:bold;color:#343a40;margin-right:5px></i>
                     </a>
                  <?php } else { ?>
                  <li class=nav-item>
                     <i class="fas fa-coin" style=font-weight:bold;color:#343a40;margin-right:5px></i>
                     <span style=color:#343a40>
                        <?php echo number_format($_coin); ?> VND
                     </span>
                  </li>
                  <div class=dropdown>
                     <a id="navbarDropdown dropdown-toggle" class="nav-link dropdown-toggle" href=# role=button
                        data-toggle=dropdown aria-haspopup=true aria-expanded=false>
                        <i class="fas fa-user me-2" style=font-weight></i>
                        <?php echo $_username; ?>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby=navbarDropdown>
                        <a class=dropdown-item href=profile.php>Trang Cá Nhân</a>
                        <a class=dropdown-item href=security.php>Bảo Mật</a>
                        <a class=dropdown-item href=nap-tien.php>Nạp Tiền</a>
                        <a class=dropdown-item href=history.php>Lịch Sử Giao Dịch</a>
                        <a class=dropdown-item href=/?out>Đăng xuất</a>
                     </div>
                  </div>
               <?php } ?>
               </li>
            </ul>
         </div>
      </div>
   </header>
   <div class="container-fluid account-container">
      <nav class=left-menu>
         <ul class="nav flex-column dashboard-menu-left">
            <li class=nav-item>
               <a class=nav-link href=/index.php>
                  <i class="fas fa-home"></i>&nbsp;Trang Chủ
               </a>
            </li>
            <li class=nav-item>
               <a class=nav-link href=/profile.php>
                  <i class="fas fa-user me-2"></i>&nbsp;Thông tin tài khoản
               </a>
            </li>
            <li class=nav-item>
               <a class=nav-link href=security.php>
                  <i class="fas fa-lock"></i>&nbsp;Bảo mật
               </a>
            </li>
            <li class=nav-item>
               <a class=nav-link href=nap-tien.php>
                  <i class="fas fa-wallet"></i>&nbsp;Nạp Tiền
               </a>
            </li>
            <li class=nav-item>
               <a class=nav-link href=history.php>
                  <i class="fas fa-history"></i>&nbsp;Lịch sử giao dịch
               </a>
            </li>
            <li class=nav-item>
               <a class=nav-link href=/?out>
                  <i class="fas fa-sign-out-alt"></i>&nbsp;Đăng xuất
               </a>
            </li>
         </ul>
      </nav>
   </div>
   <script type=text/javascript>$(document).ready(function()
      {
         $(".left-menu-btn-control").click(function()
         {
            $("#left-menu").toggleClass("menu-closed")})
            });
            </script>
   <!-- <script type=text/javascript>$(document).ready(function()
      {
         const a=Swal.mixin({toast:true,position:"bottom-end",showConfirmButton:false,timer:10000});
         a.fire({type:"success",
            title:"Chúc các bạn có 1 trải nghiệm thật vui vẻ"})
         });
         </script> -->
   <div class="container-fluid account-container">
      <div class=left-menu>
         <ul class="nav flex-column dashboard-menu-left">
            <li class=nav-item>
               <a class=nav-link href=/index.php>
                  <i class="fas fa-home"></i>&nbsp;Trang Chủ </a>
            </li>
            <li class=nav-item>
               <a class=nav-link href=/profile.php>
                  <i class="fas fa-user me-2"></i>&nbsp;Thông tin tài khoản </a>
            </li>
            <li class=nav-item>
               <a class=nav-link href=/security.php>
                  <i class="fas fa-lock"></i>&nbsp;Bảo mật </a>
            </li>
            <li class=nav-item>
               <a class=nav-link href=/nap-tien.php>
                  <i class="fas fa-wallet"></i>&nbsp;Nạp Tiền </a>
            </li>
            <li class=nav-item>
               <a class=nav-link href=/history.php>
                  <i class="fas fa-history"></i>&nbsp;Lịch sử giao dịch </a>
            </li>
            <li class=nav-item>
               <a class=nav-link href=/?out>
                  <i class="fas fa-sign-out-alt"></i>&nbsp;Đăng xuất </a>
            </li>
         </ul>
      </div>
      <div class="container py-3">
         <div class=row>
            <main class="flex-grow-1 flex-shrink-1">
               <br>
               <center>
                  <h3>Nạp Tiền - Ngọc Rồng Light</h3>
                  <p class=text-muted>Vui lòng chọn hình thức nạp tiền để tiếp tục</p>
                  <hr>
                  <div class="col-md-9 pb-3 pt-2">
                     <div class=row>
                        <div class="col-xl-3 col-md-6 col-sm-6 choose-method">
                           <div class="card card-pricing text-center px-3 mb-4">
                              <span
                                 class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Khuyến
                                 nghị</span>
                              <div class="bg-transparent card-header pt-4 border-0">
                                 <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value=15>
                                    Ngân hàng
                                 </h1>
                              </div>
                              <div class="card-body pt-0">
                                 <ul class="list-unstyled mb-4">
                                    <li>Hỗ trợ hầu hết các ngân hàng</li>
                                    <li>Phí giao dịch tùy ngân hàng</li>
                                 </ul>
                              </div>
                              <div class="card-footer border-0 bg-transparent">
                                 <a href=# class="btn btn-outline-warning mb-3">Tiếp tục</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 choose-method">
                           <div class="card card-pricing text-center px-3 mb-4">
                              <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Ưu
                                 tiên</span>
                              <div class="bg-transparent card-header pt-4 border-0">
                                 <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value=15>
                                    Ví Momo
                                 </h1>
                              </div>
                              <div class="card-body pt-0">
                                 <ul class="list-unstyled mb-4">
                                    <li>Nhanh chóng</li>
                                    <li>Dễ dàng</li>
                                    <li>Tiện lợi</li>
                                    <li>Không tốn phí</li>
                                 </ul>
                              </div>
                              <div class="card-footer border-0 bg-transparent">
                                 <a href=nap-momo.php class="btn btn-outline-warning mb-3">Tiếp tục</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 choose-method">
                           <div class="card card-pricing text-center px-3 mb-4">
                              <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Hạn
                                 chế</span>
                              <div class="bg-transparent card-header pt-4 border-0">
                                 <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value=15>
                                    Thẻ cào
                                 </h1>
                              </div>
                              <div class="card-body pt-0">
                                 <ul class="list-unstyled mb-4">
                                    <li>Hỗ trợ các loại thẻ</li>
                                    <li>Viettel</li>
                                    <li>Mobiphone</li>
                                    <li>Vinaphone</li>
                                    <li>Giữ nguyên mệnh giá vào cuối tuần</li>
                                 </ul>
                              </div>
                              <div class="card-footer border-0 bg-transparent">
                                 <a href=nap-the.php class="btn btn-outline-warning mb-3">Tiếp tục</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php
            include_once('end.php');
            ?>
            </main>
         </div>
</body>

</html>