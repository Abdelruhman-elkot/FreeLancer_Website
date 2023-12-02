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
          <li><a href="overview.php" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Overview</span></a></li>
          <li><a href="#profile_edit" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>Edit Profile</span></a></li>
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
              <a class="link-body-emphasis fw-semibold text-decoration-none" href="index.php">
                <svg class="bi" width="16" height="16"><use xlink:href="#house-door-fill"></use></svg>
                Home
              </a>
            </li>
            <li class="breadcrumb-item">
              <a class="link-body-emphasis fw-semibold text-decoration-none" href="overview.php">Profile</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Edit Profile
            </li>
          </ol>
        </nav>
      </div>
      
        <section id="profile-edit" style="padding: 5px 0px;">
            <div class="container">
                <div class="box-shadow-full">
                    <form>
                        <div class="row mb-3">
                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                            <div class="col-md-8 col-lg-9">
                                <img src="../../assets/imgs/profile.jpg" alt="Profile" class="img-fluid border border-secondary" style="max-width: 130px">
                                <div class="pt-2">
                                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                  <div class="col-md-8 col-lg-9">
                      <input name="fullName" type="text" class="form-control" id="fullName" value="<?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname'];?>">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                    <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px">
Software Engineer
Faculaty of Computer Science and Artificail Intelegence - Helwan Unversity 
</textarea>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="<?php echo $_SESSION['phonenumber'];?>">
                    </div>
                </div>
    
                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                      <input name="email" type="email" class="form-control" id="Email" value="<?php echo $_SESSION['email'];?>">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="https://www.facebook.com">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="Instagram" value="https://www.instagram.com">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://www.linkedin.com">
                    </div>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
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