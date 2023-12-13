<?php
include 'c:\xampp\htdocs\SW1_Project\models\AdminClass.php';
$admin = new Admin();
include 'c:\xampp\htdocs\SW1_Project\models\ClientClass.php';
$client = new Client();
include 'c:\xampp\htdocs\SW1_Project\models\FreelancerClass.php';
$freelancer = new Freelancer();
include 'c:\xampp\htdocs\SW1_Project\models\JobPostClass.php';
$post = new JobPost();
define("APPURL", "http://localhost/SW1_Project");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo APPURL ?>/assets/css/reactTable.css">

  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
  <!-- Style -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />

  <!-- Fonts and icons -->
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
</head>

<body>

  <div>
    <nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">DOT JOB</span>
      </div>

      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">DOT JOB</span>
        </div>
        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="<?php echo APPURL ?>/views/admin/admindashboard.php" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Dashboard</span>
              </a>
            </li>
            <li class="list">
              <a href="<?php echo APPURL ?>/views/admin/jobPostMangement.php" class="nav-link">
                <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="link">Post mangement</span>
              </a>
            </li>
          </div>
        </div>

      </div>
    </nav>