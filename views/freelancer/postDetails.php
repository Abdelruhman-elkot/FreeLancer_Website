<?php  
    require 'c:\xampp\htdocs\SW1_Project\include\headerhome.php';
    include_once 'c:\xampp\htdocs\SW1_Project\models\FreelancerClass.php';
    $freelancer = new Freelancer();
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
                    <li><a class="nav-link scrollto" href="<?php echo APPURL; ?>/views/freelancer/savedPosts.php">Saved Posts</a></li>
                    <li><a class="nav-link scrollto" href="<?php echo APPURL; ?>/controllers/LogoutController.php">Logout</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


<hr class="topline">


<!-- Post details -->

<?php
    $post = $freelancer->postDetails();
?>
    <div class="container" style="margin-top: 60px; margin-left: 60px;">
        <div class="row g-5" id="postFrame">
        <div class="col-md-8" >
        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1"><?php echo $post['JobPostTitle'];?></h2>
            <p class="blog-post-meta"><?php echo $post['CreationDate'];?><a href="#" style="text-decoration: none;"> By @ <?php echo $post['FirstName'];?></a></p>
            <p><?php echo $post['JobDescription'];?></p>
        </article>
        </div>

<!-- list of job description -->
    <div class="col-md-4">
    <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
            <p><i class="fa-regular fa-clock"></i><strong>Job Type:</strong><?php echo $post['JobType'];?></p>
            <p><i class="fa-solid fa-dollar-sign"></i><strong>Budget:</strong><?php echo $post['JobBudget'];?></p>
            <p><i class="fa-solid fa-person"></i><strong>No of proposal:</strong><?php echo $post['ProposalCount'];?></p>
            <p><i class="fa-regular fa-bell"></i><strong>Post Created:</strong><?php echo $post['CreationDate'];?></i></p>
        </div>
    </div>
    </div>
<!-- end of list of job description -->

<hr>

<!-- buttons -->
<?php 
if(!isset($_SESSION['id']) || $_SESSION['userRole'] === "Freelancer") { ?>
<nav class="blog-pagination" aria-label="Pagination">
    <div class="postIcons" style="margin-bottom: 20px;">
        <button onclick="show_pup()" name="apply-btn"><i class="fa-solid fa-arrow-up"></i></span>Apply</button>
    <form action="../../controllers/FreelancerController.php" method="POST">
        <?php if(isset($_SESSION['username'])) { ?>
            <div><input type="hidden" name="FreelancerID" value="<?php echo $_SESSION['id'];?>"></div>
        <?php } else { ?>
            <div><input type="hidden" name="FreelancerID" value=""></div>
        <?php } ?>
            <div><input type="hidden" name="PostID" value="<?php echo $post['PostID'];?>"></div>
        <div><input type="submit"  name="saved-btn" class="btn btn-primary" value="Save post" style="height:50px; background-color:1DA1F2"></div> 
    </form>
    </div>
</nav>
<?php } ?>
</div>


<!-- apply form pop up -->
<div class="card" id="pup">
    <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">Apply Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="hide_pup()"></button>
            </div>

            <div class="modal-body p-5 pt-0">
            <form method="post" action="../../controllers/FreelancerController.php">

                <div class="form-floating mb-3">
                    <input type="file" class="form-control rounded-3" id="floatingInput" name="CV">
                    <label for="floatingInput">Upload CV</label>
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


<!-- java script of pop-up apply form -->
    <script>
    function show_pup(){
        document.getElementById('pup').classList.add('open');
    }
    function hide_pup(){
        document.getElementById('pup').classList.remove('open');
    }
    </script>

<footer id="footer">
<?php
require 'c:\xampp\htdocs\SW1_Project\include\footerhome.php';
?>