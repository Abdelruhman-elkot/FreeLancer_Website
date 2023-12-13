<?php  
    require 'c:\xampp\htdocs\SW1_Project\include\headerhome.php';
    include_once 'c:\xampp\htdocs\SW1_Project\models\FreelancerClass.php';
    $freelancer = new Freelancer();
    if($_SESSION['username'] && $_SESSION['userRole'] === "Freelancer")
{
?>

<link rel="stylesheet" href="<?php echo APPURL; ?>/assets/css/style_w2.css">

<body>

    <!--Header-->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url(<?php echo APPURL; ?>/assets/imgs/slide/slide-1.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h1 class="animate__animated animate__fadeInDown">Welcome To <span class="typed" data-typed-items="DOT JOB"></span></h1>
                                <h2 class="animate__animated animate__fadeInUp">Start Your Career Now With Good Jobs</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="<?php echo APPURL; ?>/index.php" class="logo mr-auto"><img src="<?php echo APPURL; ?>/assets/imgs/logo/slogo.jpg" alt="logo"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <?php if (isset($_SESSION['username']) && $_SESSION['userRole'] === 'Freelancer') : ?>
                        <div class="searchBar">
                            <form class="col-13 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" method="post" action="<?php echo APPURL; ?>/views/freelancer/search.php">
                                <input type="search" class="form-control" placeholder="Search..." aria-label="Search"  name="search-input" style="width:400px; border-radius:12px 0 0 12px;">
                                <button class="search-control" name="search-btn"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    <?php endif; ?>
                    <li><a class="nav-link scrollto" href="<?php echo APPURL; ?>/index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo APPURL; ?>/views/freelancer/posts.php">Posts</a></li>
                    <?php if (isset($_SESSION['username']) && $_SESSION['userRole'] === 'Freelancer') : ?>
                        <li><a class="nav-link scrollto" href="<?php echo APPURL; ?>/views/freelancer/savedPosts.php">Saved Posts</a></li>
                        <li><a class="nav-link scrollto" href="<?php echo APPURL; ?>/controllers/LogoutController.php">Logout</a></li>
                    <?php else : ?>
                        <li><a class="nav-link scrollto" href="<?php echo APPURL; ?>/views/shared/loginAndSignup.php">Login/Register</a></li>
                    <?php endif; ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- Search php -->
<?php

if(isset($_POST['search-btn'])){
$style = "style = 'display:none'";
$search = $_POST['search-input'];

$result = $freelancer->searchForJop($search);
    if($search == ''){ ?>
        <div style="display:flex; justify-content:center; margin-top:80px; margin-bottom:80px;"><h2 style:"color:Black ; font-weight:800;">Enter search Key input first</h2></div>
<?php        
}
    else {
    ?>
    <div class="content-area">
    <div class="row mb-2">
        <?php
    foreach($result as $row){
            $statue = $row['Status'];
        if($statue === 'Accept'){ ?>
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
                            id="btn-send" onclick="show_pup()">
                            View Details  <i class="bi bi-arrow-right-circle"></i>
                            </a>
                            </span>
 
                        </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                }
            }
        }else { ?>
    <div style="display:flex; justify-content:center; margin-top:80px; margin-bottom:80px;"><h2 style:"color:Black ; font-weight:800;"><?php echo "No result Found :(";?></h2></div>
<?php 
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