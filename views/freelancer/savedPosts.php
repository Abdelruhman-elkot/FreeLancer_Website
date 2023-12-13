<?php  
    require 'c:\xampp\htdocs\SW1_Project\include\headerhome.php';
    include_once 'c:\xampp\htdocs\SW1_Project\models\FreelancerClass.php';
    $freelancer = new Freelancer();
    if($_SESSION['username'] && $_SESSION['userRole'] === "Freelancer")
{
?>

<link rel="stylesheet" href="<?php echo APPURL; ?>/assets/css/style_w2.css">
<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="<?php echo APPURL; ?>/index.php" class="logo mr-auto"><img src="<?php echo APPURL; ?>/assets/imgs/logo/slogo.jpg" alt="logo"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="<?php echo APPURL; ?>/index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo APPURL; ?>/views/freelancer/posts.php">Posts</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo APPURL; ?>/controllers/LogoutController.php">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


<hr>

<?php 

    $freeLancerId = $_SESSION['id'];
    $result = $freelancer->viewSavedPosts();

    if($result){ ?>
        <div class="content-area" >
            <div class="row mb-2">
                <div><h1 style="margin-bottom:50px; text-align:center; font-weight:900;" >Saved posts</h1></div>
                    <hr style="margin-bottom:40px">
                    <?php
                    foreach($result as $row){
                        ?>
                    <div class="col-md-6" id="postBox">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: black;">
                            <div class="col p-4 d-flex flex-column position-static" style="color: white;">
                                <strong class="d-inline-block mb-2 text-primary-emphasis"><?php echo $row['FirstName'];?></strong>
                                <h3 class="mb-0"><?php echo $row['JobPostTitle'];?></h3>
                                    <div style="color: rgb(154, 149, 149);">
                                <span><i class="bi bi-calendar"></i><?php echo $row['CreationDate'];?></span>
                                <span style="margin-left: 20px;"><i class="bi bi-people"></i><?php echo "Number Of Proposals:" . $row['ProposalCount'];?></span>
                                    </div>
                                <p class="card-text mb-auto"><?php echo $row['JobDescription'];?></p>
                            <div>
                                <span style="float: right;">
                                <a href="postDetails.php?PostID=<?php echo ($row['PostID']); ?>" name="show_details" class="icon-link gap-1 icon-link-hover stretched-link" style="border: #47b2e4; 
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
                                        id="btn-send" onclick="show_pup()">View Details<i class="bi bi-arrow-right-circle"></i>
                                </a>
                                </span>
                            </div>
                                </div>
                            </div>
                        </div>
    <?php  
    }
    } 
    ?>
            </div>
        </div>


    <footer id="footer">
<?php
require 'c:\xampp\htdocs\SW1_Project\include\footerhome.php';
}
else {
  header("Location:../../index.php");
}
?>