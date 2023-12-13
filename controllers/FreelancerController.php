<?php

include_once 'c:\xampp\htdocs\SW1_Project\models\FreelancerClass.php';
$freelancer = new Freelancer();

if(isset($_POST['saved-btn'])){
    
        $PostId = $_POST['PostID'];
        $check = $freelancer->saveJobPost($PostId);
        if($check === true){
            header("Location:../views/freelancer/postDetails.php?PostID=$PostId");
        }
    }

if(isset($_POST['apply-btn'])){
    
    
    
        if (empty($_POST['CV'])){
        echo "<script>alert('some inputs are empty');</script>";
        } else{
        $CV = $_POST['CV'];

        if($freelancer->applyToJob($CV)) {
            header('Location: ../views/freelancer/posts.php');
        }   
    }
}
?>