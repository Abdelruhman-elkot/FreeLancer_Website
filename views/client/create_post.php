<?php 
require 'c:\xampp\htdocs\SW1_Project\include\headerProfile.php';
if($_SESSION['username'] && $_SESSION['userRole'] === "Client")
{
?>

<nav id="navbar" class="nav-menu navbar">
    <ul>
        <li><a href="<?php echo APPURL;?>/views/client/overview.php" class="nav-link scrollto"><i class="bx bx-home"></i><span>Overview</span></a></li>
        <li><a href="<?php echo APPURL;?>/views/client/edit_profile.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Edit Profile</span></a></li>
        <li><a href="<?php echo APPURL;?>/views/client/change_password.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Change Password</span></a></li>
        <li><a href="#create_post" class="nav-link scrollto active"><i class="bx bx-file-blank"></i> <span>Create Post</span></a></li>
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
            <path
                d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
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
                <li class="breadcrumb-item active" aria-current="page">Create Post</li>
            </ol>
        </nav>
    </div>

    <section id="create_post">
        <div class="container">
            <div class="box-shadow-full">

                <form action="<?php echo APPURL;?>/controllers/ClientController.php" method="post">

                    <div class="row mb-3">
                        <label for="jobTitle" class="col-md-4 col-lg-3 col-form-label">Job Title:</label>
                        <div class="col-md-6 col-lg-6">
                            <input type="text" id="jobTitle" name="jobTitle" class="form-control" required="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="jobType" class="col-md-4 col-lg-3 col-form-label">Job Type:</label>
                        <div class="col-md-6 col-lg-6">
                            <select id="jobType" class="form-control" name="jobType" required="">
                                <option value=""></option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                            </select>
                        </div>
                    </div>
                            
                    <div class="row mb-3">
                        <label for="jobBudget" class="col-md-4 col-lg-3 col-form-label">Job Budget:</label>
                        <div class="col-md-6 col-lg-6">
                            <input type="number" id="jobBudget" name="jobBudget" class="form-control" required="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="jobDescription" class="col-md-4 col-lg-3 col-form-label">Job Description:</label>
                        <div class="col-md-6 col-lg-6">
                            <textarea id="jobDescription" rows="4" name="jobDescription" class="form-control" required=""></textarea>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="create" value="create">Create Post</button>
                    </div>
                </form>
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