<?php 
    include_once '../../models/JobPostClass.php';
    include_once '../../models/ClientClass.php';
session_start();
if($_SESSION['username'] && $_SESSION['userRole'] === "Client")
{
require "../../include/headerProfile.php";
?>

<nav id="navbar" class="nav-menu navbar">
          <ul>
            <li><a href="overview.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Overview</span></a></li>
            <li><a href="edit_profile.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Edit Profile</span></a></li>
            <li><a href="change_password.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Change Password</span></a></li>
            <li><a href="create_post.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Create Post</span></a></li>
            <li><a href="#view_posts" class="nav-link scrollto active"><i class="bx bx-file-blank"></i> <span>MY Posts</span></a></li>
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
            <a class="link-body-emphasis fw-semibold text-decoration-none" href="../../index.php">
              <svg class="bi" width="16" height="16">
                <use xlink:href="#house-door-fill"></use>
              </svg>
              Home
            </a>
          </li>
          <li class="breadcrumb-item">
            <a class="link-body-emphasis fw-semibold text-decoration-none" href="overview.php">Profile</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            History Posts
          </li>
        </ol>
      </nav>
    </div>



    <section id="view_posts" style = "padding: 25px 85px;">
    <?php 
    $client = new Client();
        $data = $client->showAllHisPosts($_SESSION['id']);
        if($data){
            if(mysqli_num_rows($data) > 0){ ?>


                  <div class="container">
                  <div class="box-shadow-full">

                <?php while($row = mysqli_fetch_assoc($data)){
                    $JobPost = new JobPost($row['JobType'],$row['JobBudget'], $row['JobDescription'], $row['ProposalCount'], $row['FirstName'], $row['JobPostTitle'], $row['CreationDate'], $row['PostID'], $row['Status']);?>
                    
                    <div class="content-area">
                    <div class="row mb-3">
                    <div class="col-md-10 col-lg-10" style="width: 100%;" id="postBox">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: black;">
                    <div class="col p-4 d-flex flex-column position-static" style="color: white;">
                    <strong class="d-inline-block mb-2 text-primary-emphasis"><?php echo $JobPost->getClientName();?> </strong>
                    <h3 class="mb-0"><?php echo $JobPost->getjobPostTitle(); ?></h3>
                            <div style="color: rgb(154, 149, 149);">
                            <span><i class="bi bi-calendar"></i><?php echo $JobPost->getCreationDate();?></span>
                            <span style="margin-left: 20px;"><i class="bi bi-people"></i><?php echo  "Number Of Proposals:" . $JobPost->getNumProposals(); ?></span>
                            </div>
                        <p class="card-text mb-auto"><?php echo $JobPost->getDescription();?></p>
                        <div>
                            <span style="float: right;">
                            <a href="postDetails.php?PostID=<?php echo ($JobPost->getID()); ?>" name="show_details" class="icon-link gap-1 icon-link-hover stretched-link" style="border: #47b2e4; 
                            text-decoration: none;
                            text-align: center;
                            display: inline-block;
                            font-size: 16px;
                            color: white; 
                            background-color: #1DA1F2;
                            border-radius: 12px;
                            padding: 8px;
                            margin: 4px 2px;
                            font-weight: 700px;
                            width: 150px;
                            margin-top: 15px;
                            " 
                            id="btn-send" onclick="show_pup()">
                            View Details  <i class="bi bi-arrow-right-circle"></i>
                            </a>
                            </span>
 
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                    
 <?php   }
}
}

    
?>
    </main>


<?php
require "../../include/footerProfile.php";
}
else {
  header("Location:../../index.php");
}
?>