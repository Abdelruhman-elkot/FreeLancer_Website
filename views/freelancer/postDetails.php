<?php 
include '../../include/DatabaseClass.php'; 
    
    session_start();

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>

    <link href="../../assets/Templates/Arsha/assets/img/favicon.png" rel="icon">
    <link href="../../assets/Templates/Arsha/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <script src="https://kit.fontawesome.com/2ce6a94813.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="../../assets/Templates/Arsha/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../assets/Templates/Arsha/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/Templates/Arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/Templates/Arsha/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/Templates/Arsha/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/Templates/Arsha/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../assets/Templates/Arsha/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/Templates/Arsha/assets/css/style.css">

    <link rel="canonical" href="../../assets/bootstrap-5.3.2-examples/buttons">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

    <link rel="cononical" href="../../assets/bootstrap-5.3.2-examples/modals/">
    <link rel="stylesheet" href="../../assets/bootstrap-5.3.2-examples/modals/modals.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.2-alpha1/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../../assets/css/style2.css">
</head>
<body>
<!--Header-->
    <header id="header" class="w-100 bg-black " style="position: relative; padding-left:50px;">
        <div class="container d-flex align-items-center">
    
        <h1 class="logo me-auto"><a href="index.html">Dot Job</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    
        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto" href="#">Home</a></li>
            <li><a class="nav-link scrollto active" href="posts.php">Posts</a></li>

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
        </nav><!-- .navbar -->

        </div>
    </header>
<!-- end of header -->


<hr class="topline">

<!-- Post details -->
<?php

$db = new database();
$conn = $db->getConnection();

$post = $conn->query("Select jobposts.PostID, jobposts.ClientID, jobposts.JobType, jobposts.JobBudget,
jobposts.CreationDate, jobposts.JobDescription, jobposts.ProposalCount, jobposts.JobPostTitle, users.FirstName
from jobposts
join users on users.UserID = jobposts.ClientID  WHERE PostID =". $_GET['PostID'] );

if ($post && $post->num_rows > 0) {
    $row = $post->fetch_assoc();
    
    $clientName = $row['FirstName'];
    $jobPostTitle = $row['JobPostTitle'];
    $postDate = $row['CreationDate'];
    $numProposals = $row['ProposalCount'];
    $jobDescription = $row['JobDescription'];
    $postID = $row['PostID'];
    $jobType = $row['JobType'];
    $budget = $row['JobBudget'];
    $noOfProposals = $row['ProposalCount'];
    $deadline = $row['CreationDate'];

}
echo '<div class="container" style="margin-top: 60px; margin-left: 60px;">
    <div class="row g-5" id="postFrame">
    <div class="col-md-8" >

        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1">'.$jobPostTitle.'</h2>
            <p class="blog-post-meta">'.$postDate.'<a href="#" style="text-decoration: none;"> By @'.$clientName.'</a></p>

    <p>'.
    $jobDescription
    .'</p>
    
        </article>
</div>

<!-- job description -->
    <div class="col-md-4">
    <div class="class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
        <p> <i class="fa-regular fa-clock"></i> <strong>  Job Type: </strong>'. $jobType .'</p>
            <p> <i class="fa-solid fa-dollar-sign"></i><strong>  Budget: </strong>'.  $budget.'</i></p>
            <p> <i class="fa-solid fa-person"></i><strong>  No of proposal: </strong>'.  $noOfProposals.'</p>
            <p> <i class="fa-regular fa-bell"></i><strong>  Deadline: </strong>'.  $deadline.'</i></p>
        </div>
    </div>
    </div>
<hr>
<!-- buttons -->

<nav class="blog-pagination" aria-label="Pagination">
    <div class="postIcons" style="margin-bottom: 20px;">
        <button href="" onclick="show_pup()" name="apply-btn" ><i class="fa-solid fa-arrow-up"></i></span>  Apply</button>
        

        <form action="../../controllers/SavedButton.php" method="POST">' ?>
        <?php if(isset($_SESSION['username'])) { ?>
            <?php echo '<div><input type="hidden" name="FreelancerID" value="'.$_SESSION['ID'].'"></div>'; ?>
        <?php } else { ?>
            <?php echo '<div><input type="hidden" name="FreelancerID" value=""></div>'; ?>
        <?php } ?>
        <?php echo '<div><input type="hidden" name="PostID" value="'.$postID.'"></div>'; ?>
        <div><input type="submit"  name="saved-btn" class="btn btn-primary" value="Save post" style="height:50px; background-color:1DA1F2"></div> 

        
</form>
</div>
</nav>

</div>


<!-- apply form pop up -->
<div class="card" id="pup">
    <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">Apply Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="hide_pup()" ></button>
            </div>

            <div class="modal-body p-5 pt-0">

            <form class="" method="post" action="../../controllers/applyform.php">

                <div class="form-floating mb-3">
                    <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" name="Email">
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control rounded-3" id="floatingPassword" placeholder="0123456789" name="PhoneNum">
                    <label for="floatingPassword">Phone Number</label>
                </div>

                <div class="form-floating mb-3">
                    <div>
                        <textarea
                            rows="6"
                            name="message"
                            id="message"
                            placeholder="Type your skills,work experience.... "
                            class="formbold-form-input"
                        ></textarea>
                    </div>
                </div>
                <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="apply-btn">Apply Now!</button>
            </form>
            </div>
        </div>
        </div>
    </div>
    </div>

<!-- end of apply form pop up -->




</div> <!--end of container div-->

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

<!-- java script of pop-up apply form -->
    <script>
    function show_pup(){
        document.getElementById('pup').classList.add('open');
    }
    function hide_pup(){
        document.getElementById('pup').classList.remove('open');
    }
    </script>

    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
</body>
</html>