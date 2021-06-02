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
        <link rel="stylesheet" media="screen, print" href="assets/css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="assets/css/fa-regular.css">

        <link rel="stylesheet" media="screen, print" href="assets/css/notifications/sweetalert2/sweetalert2.bundle.css">
        <link rel="stylesheet" media="screen, print" href="assets/css/theme-demo.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">

            
        
        <!--JS-->
        <script src="assets/js/vendors.bundle.js" aria-hidden="true"></script>
        <script src="assets/js/notifications/sweetalert2/sweetalert2.bundle.js" aria-hidden="true"></script>
        <script src="assets/js/app.bundle.js" aria-hidden="true"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="assets/js/vendors.bundle.js" aria-hidden="true"></script>

        <!--datatable-->
        <link rel="stylesheet" media="screen, print" href="assets/css/datagrid/datatables/datatables.bundle.css">
    </head>
        <body>
  
     
    <?php if($this->session->logged_in){?>
       

    <div class="page-wrapper">
        <div class="page-inner" >
            <!-- BEGIN Left Aside -->
            <aside class="page-sidebar">
                <div class="page-logo text-justify" >
                
                    <a href="<?= base_url();?>home" class="page-logo-link press-scale-down d-flex align-items-center position-relative">
            
                        <span class="page-logo-text mr-1" style=""><span class="font-weight-bold" style="color: #0063AE;">BLENDED LEARNING</span> <br> RESOURCES</span>
                        <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                    </a>
                </div>
            
                <!-- BEGIN PRIMARY NAVIGATION -->
                <nav id="js-primary-nav" class="primary-nav" role="navigation">
                    <div class="nav-filter">
                        <div class="position-relative">
                            <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                            <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                                <i class="fal fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                
                    <ul id="js-nav-menu" class="nav-menu">
                        

                        </li>
                        <li class="nav-title">Files</li>
                        <li class="open">
                            <a class="resources-link waves-effect waves-themed" id="resources-link" href="#" title="Theme Settings" data-filter-tags="theme settings" aria-expanded="true">

                                <i class="fas fa-folder folder" style="color: #808080;"></i>
                                <span class="nav-link-text resources" style="color: #808080;" data-i18n="nav.theme_settings">Resources</span>
                          </a>
                            <ul style="background-color: rgb(245, 245, 245); display: block;">

                            <?php foreach($subjects as $row){?>
                                <li>
                                    <form id="title_id" name="title_id" action="<?= base_url();?>title" method="post">
                                    
                                        <button id="" type="submit" style="border: none; width: 100%; padding: 0; background-color: rgb(245, 245, 245);" >
                                            <a type="submit" style="width: 100%; height: auto; font-size: 15px !important;" class="btn subject-link waves-effect waves-themed" href="" title="How it works" data-filter-tags="theme settings how it works">    
                                                <span class="nav-link-text subject" style="color: #808080;" data-i18n="nav.theme_settings_how_it_works"><i class="fas fa-folder folder"></i> &nbsp;<?= $row['subject'];?></span>
                                                <input style="display:none;" id="subject_id" name="subject_id" type="text" value="<?= $row['subject_id'];?>">
                                            </a>
                                        </button>
                                 
                                    </form>
                                </li>
                                <?php } ?>  

                            </ul>
                        </li>
                 

                        
                        <li>
                            <a class="resources-link" id="resources-link" href="#" title="Theme Settings" data-filter-tags="theme settings" aria-expanded="true">
                                <i class="far fa-clock" style="color: #808080;"></i>
                                <span class="nav-link-text resources" style="color: #808080;" data-i18n="nav.theme_settings">Recent</span>
                            </a>
                        </li>
                        <li>
                            <a class="resources-link" id="resources-link" href="#" title="Theme Settings" data-filter-tags="theme settings" aria-expanded="true">
                                <i class="far fa-star" style="color: #808080;"></i>
                                <span class="nav-link-text resources" style="color: #808080;" data-i18n="nav.theme_settings">Favorites</span>
                            </a>
                        </li>
                        <li>
                            <a class="resources-link" id="resources-link" href="#" title="Theme Settings" data-filter-tags="theme settings" aria-expanded="true">
                                <i class="far fa-file" style="color: #808080;"></i>
                                <span class="nav-link-text resources" style="color: #808080;" data-i18n="nav.theme_settings">Sample files</span>
                            </a>
                        </li>
                        
            
                </nav>
            </aside>
            <!-- END Left Aside -->
            <div class="page-content-wrapper">
                <!-- BEGIN Page Header -->
                <header class="page-header" role="banner">
                    <!-- we need this logo when user switches to nav-function-top -->
                    <div class="page-logo">
                        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative" data-toggle="modal" data-target="#modal-shortcut">
                            <img src="img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                            <span class="page-logo-text mr-1">SmartAdmin WebApp</span>
                            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                        </a>
                    </div>
                    <!-- DOC: nav menu layout change shortcut -->
                    <div class="hidden-md-down dropdown-icon-menu position-relative">
                        <a href="#" class="header-btn btn js-waves-off" data-action="toggle" data-class="nav-function-hidden" title="Hide Navigation">
                            <i class="ni ni-menu"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-minify" title="Minify Navigation">
                                    <i class="ni ni-minify-nav"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn js-waves-off" data-action="toggle" data-class="nav-function-fixed" title="Lock Navigation">
                                    <i class="ni ni-lock-nav"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- DOC: mobile button appears during mobile width -->
                    <div class="hidden-lg-up">
                        <a href="#" class="header-btn btn press-scale-down" data-action="toggle" data-class="mobile-nav-on">
                            <i class="ni ni-menu"></i>
                        </a>
                    </div>
                    <div class="search">
                        <form class="app-forms hidden-xs-down" role="search" action="<?= base_url();?>search" autocomplete="off" method="post">
                            <input style="background-color: rgb(245, 245, 245); display: inline;" type="text" id="search-field" name="search-field" placeholder="Search" class="form-control" tabindex="1">
                            <button type="submit" style="margin-left: 5px; margin-bottom: 5px; background-color: #FF7800;" class="btn"><i class="fal fa-search" style="color: white !important;"></i></button>
                            <a href="#" onclick="return false;" class="btn-danger btn-search-close js-waves-off d-none" data-action="toggle" data-class="mobile-search-on">
                                <i class="fal fa-times" ></i>
                            </a>
                                
                        </form>
                    </div>
                    <div class="ml-auto d-flex">
                        <!-- activate app search icon (mobile) -->
                        <div class="hidden-sm-up">
                            <a href="#" class="header-icon" data-action="toggle" data-class="mobile-search-on" data-focus="search-field" title="Search">
                                <i class="fal fa-search"></i>
                            </a>
                        </div>
                          <!-- info -->
                          <div class="hidden-md-down">
                            <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                            <i style="color: #808080;" class="fas fa-download"></i>
                            </a>
                        </div>
                    
                         <!-- info -->
                         <div class="hidden-md-down">
                            <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                            <i style="
                            border-radius: 50%; color: #FF7800;" class="fal fa-info-circle"></i>
                            </a>
                        </div>

                        <!-- ellipsis -->
                        <div class="hidden-md-down">
                            <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                            <i class="fal fa-ellipsis-v"></i>
                            </a>
                        </div>

                        <style>
                            .vl {
                            margin-top: 2px;
                            border-left: 2px solid rgb(245, 245, 245);
                            height: 60px;
                            }
                            </style>
                        <div class="vl"></div>
                        <!-- app settings -->
                        <div class="hidden-md-down">
                            <a href="#" class="header-icon" data-toggle="modal" data-target=".js-modal-settings">
                            <i style="color: #808080;" class="fal fa-question-circle fa-3x"></i>
                            </a>
                            
                        </div>
                        <!-- app shortcuts -->
                    
                    
                        <!-- app message -->
                        
                        <!-- app notification -->
                        <div>
                            <a href="#" class="header-icon" data-toggle="dropdown" title="You got 11 notifications">
                                <i style="color: #808080;" class="fal fa-bell"></i>
                                <span class="badge badge-icon">0</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-xl">
                                <div class="py-2 px-3 bg-faded d-block rounded-bottom text-right border-faded border-bottom-0 border-right-0 border-left-0">
                                    <a href="#" class="fs-xs fw-500 ml-auto">view all notifications</a>
                                </div>
                            </div>
                        </div>
        <!-- app user menu -->
        <div>
            <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com" class="header-icon d-flex align-items-center justify-content-center ml-2" aria-expanded="true">
            
                <i class="fas fa-user-circle fa-3x" style="color: #808080;"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" x-placement="top-start" style="position: absolute; will-change: top, left; top: 5px; left: 803px;">
                <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                    <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                        <span class="mr-2">
                    
                            <img src="assets/img/avatar-admin.png" class="rounded-circle profile-image" alt="Dr. Codex Lantern">
                            
                        </span>
                        <div class="info-card-text">
                            <div class="fs-lg text-truncate text-truncate-lg"> <?= $this->session->full_name ?></div>
                        </div>
                    </div>
                </div>

                <div class="dropdown-divider m-0"></div>
                    <a href="<?= base_url();?>changePassword" class="dropdown-item" >
                        <span data-i18n="drpdwn.reset_layout">Change Password</span>
                    </a>
                    <div class="dropdown-divider m-0"></div>
                    <a href="#" class="dropdown-item" data-action="app-fullscreen">
                        <span data-i18n="drpdwn.fullscreen">Fullscreen</span>
                        <i class="float-right text-muted fw-n">F11</i>
                    </a>
                    <a href="#" class="dropdown-item" data-action="app-print">
                        <span data-i18n="drpdwn.print">Print</span>
                        <i class="float-right text-muted fw-n">Ctrl + P</i>
                    </a>
                <div class="dropdown-multilevel dropdown-multilevel-left">
                    <div class="dropdown-menu">
                        <a href="#?lang=fr" class="dropdown-item" data-action="lang" data-lang="fr">Français</a>
                        <a href="#?lang=en" class="dropdown-item active" data-action="lang" data-lang="en">English (US)</a>
                        <a href="#?lang=es" class="dropdown-item" data-action="lang" data-lang="es">Español</a>
                        <a href="#?lang=ru" class="dropdown-item" data-action="lang" data-lang="ru">Русский язык</a>
                        <a href="#?lang=jp" class="dropdown-item" data-action="lang" data-lang="jp">日本語</a>
                        <a href="#?lang=ch" class="dropdown-item" data-action="lang" data-lang="ch">中文</a>
                    </div>
                </div>
                <div class="dropdown-divider m-0"></div>
                <a class="dropdown-item fw-500 pt-3 pb-3" href="<?= base_url();?>logout">
                    <span data-i18n="drpdwn.page-logout">Logout</span>
                    <span class="float-right fw-n"><?= $this->session->full_name ?></span>
                </a>
            </div>
        </div>
    </div>
</header>
            <!-- END Page Header -->
            <!-- BEGIN Page Content -->
            <!-- the #js-page-content id is needed for some plugins to initialize -->
            <main id="js-page-content" role="main" class="page-content" style="background-color: #fff; padding-right: 0;
            padding-top: 0; padding-bottom: 0;">
              
              <!-- <ol class="breadcrumb page-breadcrumb">
                    <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                </ol> -->

    <?php } ?>

    


    