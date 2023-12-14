<?php

include_once 'c:\xampp\htdocs\SW1_Project\models\FreelancerClass.php';
$freelancer = new Freelancer();
session_start();

if(isset($_POST['saved-btn'])){
    
    if(empty($_SESSION['username'])){

        echo '<div style="display:flex; flex-direction:column;box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;width:40%; height:25%;">
        <h2 style="text-align:centre; padding-top:10px; padding-left:20px"> Login First before You Can Save a Post</h2>
        <a href="../views/shared/loginAndSignup.php" style="width:30%; background-color:#1DA1F2; border:2px solid white; border-radius:15px; margin-top:60px; margin-left:55%; color:white; font-weight:800;  text-decoration:none; padding-left:50px">Go To Login Page</a>';


    }else{

        $freelancerId = $_SESSION['id'];
        $PostId = $_POST['PostID'];
        $check = $freelancer->saveJobPost($PostId, $freelancerId);
        if($check === true){
            header("Location:../views/freelancer/postDetails.php?PostID=$PostId");
        }
    }
}

if(isset($_POST['apply-btn'])){
    
        if (empty($_FILES["CV"]["name"])){
        echo "<script>alert('some inputs are empty');</script>";
        } else{
        $CV = $_FILES["CV"]["name"];
        $freelancerId = $_SESSION['id'];
        $PostId = $_POST['PostID'];

        if($freelancer->applyToJob($freelancerId, $PostId, $CV)) {
            header('Location: ../views/freelancer/posts.php');
            exit();
        }   
    }
}
?>