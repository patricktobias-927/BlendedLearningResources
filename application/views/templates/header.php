<!DOCTYPE html>
<!-- 
Template Name:  SmartAdmin Responsive WebApp - Template build with Twitter Bootstrap 4
Version: 4.0.0
Author: Sunnyat Ahmmed
Website: http://gootbootstrap.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
              <?= $title;?>
        </title>
        <meta name="description" content="Login">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <!-- Call App Mode on ios devices -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <!-- base css -->
        <link rel="stylesheet" media="screen, print" href="assets/css/vendors.bundle.css">
        <link rel="stylesheet" media="screen, print" href="assets/css/app.bundle.css">
        <!-- Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="assets/image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
        <link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <!-- Optional: page related CSS-->
        <link rel="stylesheet" media="screen, print" href="assets/css/fa-brands.css">
        
        <link rel="stylesheet" media="screen, print" href="assets/css/notifications/sweetalert2/sweetalert2.bundle.css">
        <link rel="stylesheet" media="screen, print" href="assets/css/theme-demo.css">

        <!--JS-->
        <script src="assets/js/vendors.bundle.js" aria-hidden="true"></script>
        <script src="assets/js/notifications/sweetalert2/sweetalert2.bundle.js" aria-hidden="true"></script>
        <script src="assets/js/app.bundle.js" aria-hidden="true"></script>

     
    </head>
        <body>
            <?php if($this->session->logged_in){?>
            <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                <div class="d-flex align-items-center container p-0">
                    <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9">
                        <a href="<?= base_url();?>home" class="page-logo-link press-scale-down d-flex align-items-center">
                            <img src="assets/img/logo.png" alt="BLR" aria-roledescription="logo">
                            <span class="page-logo-text mr-1">Blended Learning Resources</span>
                        </a>
                    </div>
                        <span class="text-white opacity-50 ml-auto mr-2 hidden-sm-down">
                            <!-- Already a member? -->
                        </span>
                        <a href="<?= base_url();?>changePassword" class="btn-link text-white ml-auto ml-sm-0 mr-5">
                            <?= $this->session->full_name ?>
                        </a>
                        <a href="<?= base_url();?>logout" class="btn-link text-white ml-auto ml-sm-0">
                            Sign Out
                        </a>
                </div>
            </div>               
            <?php } ?>
      