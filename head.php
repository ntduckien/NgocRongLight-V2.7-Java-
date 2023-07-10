<?php
ob_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include_once 'cauhinh.php';
include_once 'config.php';
include_once 'set.php';
include_once 'connect.php';

?>
<!doctype html>
<html lang=en>

<head>
   <meta charset=utf-8>
   <meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name=description content>
   <link rel="shortcut icon" type=img/nro.png href=./img/nro.png />
   <meta name=author content>
   <title>NRO Light</title>
   <link href=assets/css/bootstrap.min.css rel=stylesheet>
   <link rel=stylesheet href=assets/css/all.min.css />
   <link rel=stylesheet href=assets/css/dataTables.bootstrap5.min.css>
   <script src=assets/js/jquery.min.js></script>
   <script src=assets/js/bootstrap.min.js></script>
   <link rel=icon href=/img/nro.png type=img/png>
   <script src=https://kit.fontawesome.com/c79383dd6c.js crossorigin=anonymous></script>

   <script src=http://cdn.jsdelivr.net/npm/sweetalert2@11></script>

   <script src=https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js></script>
   <link rel=stylesheet href=https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css>
   <style>
      html {
         font-size: 14px
      }

      @media(min-width:768px) {
         html {
            font-size: 16px
         }
      }

      .container {
         max-width: 960px
      }

      .pricing-header {
         max-width: 700px
      }

      .card-deck .card {
         min-width: 220px
      }

      .border-top {
         border-top: 1px solid #e5e5e5
      }

      .border-bottom {
         border-bottom: 1px solid #e5e5e5
      }

      .box- shadow {
         box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05)
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
   </style>
</head>