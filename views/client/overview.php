<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/css/style.css" rel="stylesheet">

</head>
<body>

    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <header id="header">
      <div class="d-flex flex-column">
  
        <div class="profile">
          <img src="../../assets/imgs/profile.jpg" alt="" class="img-fluid rounded-circle">
          <h1 class="text-light"><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname'];?></h1>
          <div class="social-links mt-3 text-center">
            <a href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="https://www.linkedin.com" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>
  
        <nav id="navbar" class="nav-menu navbar">
          <ul>
            <li><a href="#overview" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Overview</span></a></li>
            <li><a href="edit_profile.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Edit Profile</span></a></li>
            <li><a href="change_password.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Change Password</span></a></li>
          </ul>
        </nav>
      </div>
      
    </header>

    <main id="main">

        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
            <symbol id="house-door-fill" viewBox="0 0 16 16">
              <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
            </symbol>
          </svg>
          
        <div class="container my-5" style="padding-right: 87px;">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-custom overflow-hidden text-center bg-body-tertiary border rounded-3">
                <li class="breadcrumb-item">
                  <a class="link-body-emphasis fw-semibold text-decoration-none" href="../../index.php">
                    <svg class="bi" width="16" height="16"><use xlink:href="#house-door-fill"></use></svg>
                    Home
                  </a>
                </li>
                <li class="breadcrumb-item">
                  <a class="link-body-emphasis fw-semibold text-decoration-none" href="overview.php">Profile</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Overview
                </li>
              </ol>
            </nav>
          </div>


        <section id="overview" class="about-mf sect-pt4 route" style="padding: 4px 0px;">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="box-shadow-full">
                  <div class="row">
                    <div class="col-md-5">
                        <div class="col-sm-5 col-md-5">
                          <div class="about-img">
                            <img src="../../assets/imgs/profile.jpg" class="img-fluid box-shadow-a rounded-circle" alt="profile image">
                          </div>
                        </div>
                      <div class="skill-mf lead">
                        <div class="title-box-2" >
                            <h4 class="title-left">Profile Details</h4>
                        </div>
                        <div class="about-info">
                            <p><span class="title-s">Name: </span> <span><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname'];?></span></p>
                            <p><span class="title-s">Username: </span> <span><?php echo $_SESSION['username'];?></span></p>
                            <p><span class="title-s">Email: </span> <span><?php echo $_SESSION['email'];?></span></p>
                            <p><span class="title-s">Phone: </span> <span><?php echo $_SESSION['phonenumber'];?></span></p>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="about-mf pt-4 pt-md-0">
                        <div class="title-box-2">
                          <h5 class="title-left">
                            About
                          </h5>
                        </div>
                        <p class="lead fst-italic">
                            Software Engineer
                        </p>
                        <p class="lead fst-italic">
                            Faculaty of Computer Science and Artificail Intelegence - Helwan Unversity
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

    </main>

    <footer id="footer">
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>Freelancer</span></strong>
          </div>
          <div class="credits">
            Designed by <a href="https://www.facebook.com">Abdelruhman_elkot</a>
        </div>        
        </div>
      </footer>
      
      <script src="../../assets/js/main.js"></script>
</body>
</html>