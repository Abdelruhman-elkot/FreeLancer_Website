<?php 
require 'c:\xampp\htdocs\SW1_Project\include\headerProfile.php';
if($_SESSION['username'] && $_SESSION['userRole'] === "Client")
{
?>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="<?php echo APPURL;?>/views/client/overview.php" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Overview</span></a></li>
          <li><a href="#edit_profile.php" class="nav-link scrollto active"><i class="bx bx-user"></i><span>Edit Profile</span></a></li>
          <li><a href="<?php echo APPURL;?>/views/client/change_password.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Change Password</span></a></li>
          <li><a href="<?php echo APPURL;?>/views/client/create_post.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i><span>Create Post</span></a></li>
          <li><a href="<?php echo APPURL;?>/views/client/view_posts.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i><span>MY Posts</span></a></li>
          <li><a href="<?php echo APPURL;?>/views/client/proposals.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i><span>Proposals</span></a></li>
          <li><a href="<?php echo APPURL;?>/controllers/LogoutController.php" class="nav-link scrollto"><i class="bx bx-log-out"></i><span>Logout</span></a></li>
        </ul>
      </nav>
    </div>

  </header>

  <main id="main">

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="house-door-fill" viewBox="0 0 16 16">
        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
      </symbol>
    </svg>

    <div class="container my-5" style="padding-right: 87px;">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-custom overflow-hidden text-center bg-body-tertiary border rounded-3">
          <li class="breadcrumb-item">
            <a class="link-body-emphasis fw-semibold text-decoration-none" href="<?php echo APPURL;?>/index.php">
              <svg class="bi" width="16" height="16">
                <use xlink:href="#house-door-fill"></use>
              </svg>
              Home
            </a>
          </li>
          <li class="breadcrumb-item">
            <a class="link-body-emphasis fw-semibold text-decoration-none" href="<?php echo APPURL;?>/views/client/overview.php">Profile</a>
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
          <form action="<?php echo APPURL;?>/controllers/ClientController.php" method="post" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
              <div class="col-md-8 col-lg-9">
                <img src="<?php echo '../../assets/imgs/' . $_SESSION['profileimage']; ?>" alt="Profile" class="img-fluid border border-secondary" style="max-width: 130px">
                <input type="file" name="profile_picture" accept="image/*" />
                <div class="pt-2">
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <label for="firstname" class="col-md-4 col-lg-3 col-form-label">First Name</label>
              <div class="col-md-8 col-lg-9">
                <input name="firstname" type="text" class="form-control" id="firstname" value="<?php echo $_SESSION['firstname']; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="lastname" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
              <div class="col-md-8 col-lg-9">
                <input name="lastname" type="text" class="form-control" id="lastname" value="<?php echo $_SESSION['lastname']; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
              <div class="col-md-8 col-lg-9">
                <textarea name="about" class="form-control" id="about" style="height: 100px"><?php echo $_SESSION['about']; ?></textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
              <div class="col-md-8 col-lg-9">
                <input name="phone" type="text" class="form-control" id="Phone" value="<?php echo $_SESSION['phonenumber']; ?>">
              </div>
            </div>

            <div class="row mb-3">
              <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
              <div class="col-md-8 col-lg-9">
                <input name="email" type="email" class="form-control" id="Email" value="<?php echo $_SESSION['email']; ?>">
              </div>
            </div>

            <div class="text-center">
              <button type="submit" value="Save" name="save" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
      </div>
    </section>

  </main>

<?php
require 'c:\xampp\htdocs\SW1_Project\include\footerProfile.php';
}
else {
  header("Location:../../index.php");
}
?>