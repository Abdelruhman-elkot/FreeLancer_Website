
<?php 
    session_start();
    include '../../include/DatabaseClass.php'; 
    include_once '../../models/JobPostClass.php';
    include_once '../../models/FreelancerClass.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Posts</title>

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
    <header id="header" class="w-100 bg-black " style="position: relative; padding-left:30px; ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html">Dot Job</a></h1>
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto" href="#">Home</a></li>
                        <li><a class="nav-link scrollto" href="posts.php">Posts</a></li>
                        <li><a class="nav-link scrollto active" href="savedPosts.php">Saved Posts</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
        </div>
    </header>
<!-- end of header -->

<hr>

<?php 

    $freeLancerId=$_SESSION['id'];

    $freeLancer = new Freelancer();

    $result = $freeLancer->viewSavedPosts($freeLancerId);

    if($result){ ?>
        <div class="content-area" >
            <div class="row mb-2">
                <div><h1 style="margin-bottom:50px; text-align:center; font-weight:900;" >  Saved posts </h1></div>
                    <hr style="margin-bottom:40px">

                <?php while($row=mysqli_fetch_assoc($result)){
                    $JobPost = new JobPost($row['JobType'],$row['JobBudget'], $row['JobDescription'], $row['ProposalCount'], $row['FirstName'], $row['JobPostTitle'], $row['CreationDate'], $row['PostID']);
                ?>
                    <div class="col-md-6" id="postBox">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" 
                            style="background-color: black;">
                            <div class="col p-4 d-flex flex-column position-static" style="color: white;">
                                <strong class="d-inline-block mb-2 text-primary-emphasis"> <?php echo $JobPost->getClientName(); ?> </strong>
                                <h3 class="mb-0"> <?php echo $JobPost->getjobPostTitle(); ?> </h3>
                                    <div style="color: rgb(154, 149, 149);">
                                <span><i class="bi bi-calendar"></i> <?php echo $JobPost->getCreationDate(); ?> </span>
                                <span style="margin-left: 20px;"><i class="bi bi-people"></i>  Number Of Proposals:  <?php echo $JobPost->getNumProposals(); ?> </span>
                            </div>
                                <p class="card-text mb-auto"> <?php echo $JobPost->getDescription(); ?> </p>
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
                                        id="btn-send" onclick="show_pup()"> View Details  <i class="bi bi-arrow-right-circle"></i>
                            </a>
                            </span>
                        </div>
                        </div>
                    </div>
                    </div>
    <?php  }
    } ?>


<!-- footer -->
<div class="footer" style="position: fixed; bottom:0;">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
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


</body>
</html>