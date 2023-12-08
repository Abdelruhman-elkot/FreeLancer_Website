<?php 
  define("APPURL", "http://localhost/Testing");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <link href="<?php echo APPURL;?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo APPURL;?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo APPURL;?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo APPURL;?>/assets/css/style.css" rel="stylesheet">

</head>
<body>

    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <header id="header">
      <div class="d-flex flex-column">
  
        <div class="profile">
          <img src="<?php echo APPURL.'/assets/imgs/' . $_SESSION['profileimage']; ?>" alt="" class="img-fluid rounded-circle">
          <h1 class="text-light"><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname'];?></h1>
          <div class="social-links mt-3 text-center">
            <a href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="https://www.linkedin.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>