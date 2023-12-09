
<?php  
    include_once '../../models/JobPostClass.php';
    include_once '../../models/FreelancerClass.php';
    session_start();
    if($_SESSION['username'] && $_SESSION['userRole'] === "Freelancer")
{
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>


    <link href="../../assets/imgs/wall/favicon.png" rel="icon">
    <link href="../../assets/imgs/wall/apple-touch-icon.png" rel="apple-touch-icon">

    <script src="https://kit.fontawesome.com/2ce6a94813.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../../assets/css/style4.css">
    
    <link rel="canonical" href="../../assets/bootstrap-5.3.2-examples/buttons">
    <!-- <link rel="stylesheet" href="../../assets/css/bootstrap.min.css"> -->

    <link rel="cononical" href="../../assets/bootstrap-5.3.2-examples/modals/">
    <link rel="stylesheet" href="../../assets/bootstrap-5.3.2-examples/modals/modals.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.2-alpha1/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../../assets/css/style2.css">
</head>
<body>

<!--Header-->
    <header id="header" class="w-100 bg-black fixed-top" style="padding-left:60px;">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="index.html">Dot Job</a></h1>
        <nav id="navbar" class="navbar">
        <ul>
            <div class="searchBar">
            <form class="col-13 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" method="post">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search"  name="search-input" style="width:400px; border-radius:12px 0 0 12px;">
                <button class="search-control" name="search-btn"><i class="bi bi-search"></i></button>
            </form>
            </div>
            <li><a class="nav-link scrollto" href="#">Home</a></li>
            <li><a class="nav-link scrollto active" href="posts.php" name="posts-btn">Posts</a></li>
            <li class="dropdown"><a href="#" style="text-decoration: none;"><span>More</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <?php if(isset($_SESSION['username'])){ ?>
                    <li><a href="savedPosts.php" style="text-decoration:none"> Saved Posts </a></li>
                    <li><a href="#" style="text-decoration:none">Log Out</a></li>
                <?php } else { ?>
                    <li><a href="../shared/loginAndSignup.php" style="text-decoration:none"> Register </a></li>
                    <li><a href="../shared/loginAndSignup.php" style="text-decoration:none">Log in</a></li>
                <?php } ?>
                </ul>
            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
    </header>
<!-- end of header -->

<!--Image-->
    <section id="hero" class="d-flex align-items-center"  style="background-image: url('../../assets/imgs/freelance.jpg');
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                    padding-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <h1>Creative Jobs</h1>
                    <h2>Discover your next career move, freelance gig, or internship</h2>
                </div>
            </div>
        </div>
    </section>
<!-- end of image -->

<hr> 

<!-- Search php -->
<?php

    $style= "";

    if(isset($_POST['search-btn'])){

        $style="style = 'display:none;'";    

        $search = $_POST['search-input'];

        $freelancer = new Freelancer();
        $result = $freelancer->searchForJop($search);
            if($search==''){ ?>
                <div style="display:flex; justify-content:center; margin-top:80px; margin-bottom:80px;"><h2 style:"color:Black ; font-weight:800;">Enter search Key input first</h2></div>
<?php        }else{
        if($result){
            if(mysqli_num_rows($result)>0){
                // echo post container
                echo '<div class="content-area" <?php echo $style; ?> 
                <div class="row mb-2">';

                while($row=mysqli_fetch_assoc($result)){
                    // echo post content

                    $JobPost = new JobPost($row['JobType'],$row['JobBudget'], $row['JobDescription'], $row['ProposalCount'], $row['FirstName'], $row['JobPostTitle'], $row['CreationDate'], $row['PostID'], $row['Status']);
                
                    echo '<div class="col-md-6" id="postBox">';
                    echo '<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" 
                    style="background-color: black;">';
                    echo '<div class="col p-4 d-flex flex-column position-static" style="color: white;">';
                    echo '<strong class="d-inline-block mb-2 text-primary-emphasis">' .$JobPost->getClientName(). '</strong>';
                    echo '<h3 class="mb-0">'.$JobPost->getjobPostTitle() .'</h3>';
                            echo '<div style="color: rgb(154, 149, 149);">';
                            echo '<span><i class="bi bi-calendar"></i>   '  .  $JobPost->getCreationDate() . '</span>';
                            echo '<span style="margin-left: 20px;"><i class="bi bi-people"></i>  Number Of Proposals:  ' .$JobPost->getNumProposals() .'</span>';
                            echo '</div>';
                        echo '<p class="card-text mb-auto">'.$JobPost->getDescription().'</p>';
                        echo '<div>'; ?>
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
                    <?php

                    
                    
            
                }

            
            }else{
                echo '<div style="display:flex; justify-content:center; margin-top:80px; margin-bottom:80px;"><h2 style:"color:Black ; font-weight:800;">No result Found :(</h2></div>';
            }
            
            echo '</div>
            </div>';
        }
    }
    }else{
        $freelancer = new Freelancer();
        $result = $freelancer->viewAllJobPosts();
        if($result){
            if(mysqli_num_rows($result)>0){
                // echo post container
                echo '<div class="content-area" <?php echo $style; ?> 
                <div class="row mb-2">';

                while($row=mysqli_fetch_assoc($result)){
                    // echo post content
                    $JobPost = new JobPost($row['JobType'],$row['JobBudget'], $row['JobDescription'], $row['ProposalCount'], $row['FirstName'], $row['JobPostTitle'], $row['CreationDate'], $row['PostID'], $row['Status']);
                    $statue = $JobPost->getStatus();
                if($statue === 'Accept'){
                    echo '<div class="col-md-6" id="postBox">';
                    echo '<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" 
                    style="background-color: black;">';
                    echo '<div class="col p-4 d-flex flex-column position-static" style="color: white;">';
                    echo '<strong class="d-inline-block mb-2 text-primary-emphasis">' .$JobPost->getClientName(). '</strong>';
                    echo '<h3 class="mb-0">'.$JobPost->getjobPostTitle() .'</h3>';
                            echo '<div style="color: rgb(154, 149, 149);">';
                            echo '<span><i class="bi bi-calendar"></i>   '  .  $JobPost->getCreationDate() . '</span>';
                            echo '<span style="margin-left: 20px;"><i class="bi bi-people"></i>  Number Of Proposals:  ' .$JobPost->getNumProposals() .'</span>';
                            echo '</div>';
                        echo '<p class="card-text mb-auto">'.$JobPost->getDescription().'</p>';
                        echo '<div>'; ?>
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
                    
 <?php   }
                }
}
}
    }

    
?>
<!--Posts-->
<!-- <div class="content-area"
<div class="row mb-2"> -->

    <!--single post-->

 <!--        <div class="col-md-6" id="postBox">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" 
            style="background-color: black;">
            <div class="col p-4 d-flex flex-column position-static" style="color: white;">
            <strong class="d-inline-block mb-2 text-primary-emphasis">@client name</strong>
            <h3 class="mb-0">Job Post Title</h3>
                <div style="color: rgb(154, 149, 149);">
                <span><i class="bi bi-calendar"></i>  Nov 12</span>
                <span style="margin-left: 20px;"> <i class="bi bi-people"></i>  Number Of Proposals: 1</span>
                </div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <div>
                <span style="float: right;">
                <a href="postDetails.html" class="icon-link gap-1 icon-link-hover stretched-link" style="border: #47b2e4; 
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
        </div> -->
<!--end of single post-->









</div>
</div>
<!-- end of posts container -->


<!-- footer -->
    <div class="footer">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <span class="footerText">© 2023 Dotjob.com</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex" style="margin-right: 20px;">
            <li class="ms-3"><a href="#"><i class="bi bi-twitter"></i></a></li>
            <li class="ms-3"><a href="#"><i class="bi bi-instagram"></i></a></li>
            <li class="ms-3"><a  href="#"><i class="bi bi-facebook"></i></a></li>
        </ul>
    </footer>
    </div>
<!-- end of footer -->

<!-- java script -->
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>

</body>
</html>

<?php
}
else {
  header("Location:../../index.php");
}
?>