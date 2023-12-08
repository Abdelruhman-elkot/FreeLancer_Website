<?php 
session_start();
if($_SESSION['username'] && $_SESSION['userRole'] == "Client")
{
require "../../include/headerProfile.php";
?>

        <nav id="navbar" class="nav-menu navbar">
          <ul>
            <li><a href="overview.php" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Overview</span></a></li>
            <li><a href="edit_profile.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Edit Profile</span></a></li>
            <li><a href="change_password.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Change Password</span></a></li>
            <li><a href="#create_post" class="nav-link scrollto active"><i class="bx bx-file-blank"></i> <span>Create Post</span></a></li>
          </ul>
        </nav>
      </div>
      
    </header>









<?php
require "../../include/footerProfile.php";
}
else {
  header("Location:../../index.php");
}
?>