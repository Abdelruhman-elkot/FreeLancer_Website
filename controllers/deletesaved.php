<?php 
        include '../include/DatabaseClass.php'; 
        $db = new database();
        session_start();

    if(isset($_GET['PostID']) AND isset($_GET['FreelancerId'])) {

        $postID = $_GET['PostID'];
        $freelancerID = $_GET['FreelancerId'];
        

        // $conn = $db->getConnection();

        $sql = "DELETE FROM savedposts WHERE PostID='$postID' AND FreelancerId='$freelancerID'";
        $db->delete($sql);
        header('location:../views/freelancer/savedPosts.php');
    }



?>