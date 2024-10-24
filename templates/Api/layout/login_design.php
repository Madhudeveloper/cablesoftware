<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo $this->Url->build('/assets/images/favicon.png'); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $this->Url->build('/assets/images/favicon.png'); ?>" type="image/x-icon">
    <title>Login</title>
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
    <!-- login page start-->
    <div class="container-fluid">
     <?= $this->fetch('content') ?>
      <!-- latest jquery-->
      <script src="<?php echo $this->Url->build('/assets/js/jquery.min.js'); ?>"></script>
      <!-- Bootstrap js-->
      <script src="<?php echo $this->Url->build('/assets/js/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
      <!-- feather icon js-->
      <script src="<?php echo $this->Url->build('/assets/js/icons/feather-icon/feather.min.js'); ?>"></script>
      <script src="<?php echo $this->Url->build('/assets/js/icons/feather-icon/feather-icon.js'); ?>"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="<?php echo $this->Url->build('/assets/js/config.js'); ?>"></script>
      <!-- Plugins JS start-->
      <!-- calendar js-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="<?php echo $this->Url->build('/assets/js/script.js'); ?>"></script>
      <script src="<?php echo $this->Url->build('/assets/js/script1.js'); ?>"></script>
      <!-- Plugin used-->
    </div>
  </body>
</html>