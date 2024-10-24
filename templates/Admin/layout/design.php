<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo $this->Url->build('assets/images/favicon.png'); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $this->Url->build('assets/images/favicon.png'); ?>" type="image/x-icon">
    <title>Cable Software</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/assets/css/font-awesome.css'); ?>">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/assets/css/vendors/icofont.css'); ?>">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/assets/css/vendors/themify.css'); ?>">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/assets/css/vendors/flag-icon.css'); ?>">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/assets/css/vendors/feather-icon.css'); ?>">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/assets/css/vendors/slick.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/assets/css/vendors/slick-theme.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/assets/css/vendors/scrollbar.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/assets/css/vendors/animate.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/assets/css/vendors/datatables.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/assets/css/vendors/date-range-picker/flatpickr.min.css'); ?>">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/assets/css/vendors/bootstrap.css'); ?>">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/assets/css/style.css'); ?>">
    <link id="color" rel="stylesheet" href="<?php echo $this->Url->build('/assets/css/color-1.css'); ?>" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Url->build('/assets/css/responsive.css'); ?>">
  </head>
  <body> 
    <div class="loader-wrapper"> 
      <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
        <div class="loader-inner-1"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <?php echo $this->element('includes/navbar'); ?> 
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-layout="stroke-svg">
          <div>
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="<?php echo $this->Url->build('/assets/images/logo/logo_light.png'); ?>" alt=""></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
              <div class="toggle-sidebar">
                <svg class="stroke-icon sidebar-toggle status_toggle middle">
                  <use href="<?php echo $this->Url->build('/assets/svg/icon-sprite.svg#toggle-icon'); ?>"></use>
                </svg>
                <svg class="fill-icon sidebar-toggle status_toggle middle">
                  <use href="<?php echo $this->Url->build('/assets/svg/icon-sprite.svg#fill-toggle-icon'); ?>"></use>
                </svg>
              </div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="<?php echo $this->Url->build('/assets/images/logo/logo-icon.png'); ?>" alt=""></a></div>
            <?php echo $this->element('includes/sidebar'); ?> 
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          <?= $this->fetch('content') ?>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->

<?php echo $this->element('includes/footer'); ?> 
        