<?php
    session_start();
    define("APPURL", "http://localhost/SW1_Project");
    include_once 'c:\xampp\htdocs\SW1_Project\include\DatabaseClass.php';
    $db = new database();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dot Job</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/vendor/aos/aos.css">
  <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/vendor/boxicons/css/boxicons.min.css">
  <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/vendor/glightbox/css/glightbox.min.css">
  <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/vendor/remixicon/remixicon.css">
  <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/vendor/swiper/swiper-bundle.min.css">

  <link rel="canonical" href="<?php echo APPURL; ?>/assets/bootstrap-5.3.2-examples/buttons">
  <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/bootstrap-5.3.2-examples/modals/modals.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.2-alpha1/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo APPURL; ?>/assets/css/style_h.css">

</head>