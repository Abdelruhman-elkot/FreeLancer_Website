<?php

include_once 'UserClass.php';

class Freelancer extends User{
    private static $freelancerCounter;

    function getfreelancerCounter(){
        return self::$freelancerCounter;
    }

    public function __construct(){
        parent::__construct();

    }

    public function viewAllJobPosts(){
        $db = new database();
        $result = $db->conn->query("Select jobposts.PostID, jobposts.ClientID, jobposts.JobType, jobposts.JobBudget,
        jobposts.CreationDate, jobposts.JobDescription, jobposts.ProposalCount, jobposts.JobPostTitle, users.FirstName, jobposts.Status
        from jobposts
        join users on users.UserID = jobposts.ClientID ");
        return $result;
    }

    public function searchForJop($search){
        $db = new database();
        $result = $db->conn->query("Select jobposts.PostID, jobposts.ClientID, jobposts.JobType, jobposts.JobBudget,
        jobposts.CreationDate, jobposts.JobDescription, jobposts.ProposalCount, jobposts.JobPostTitle, users.FirstName, jobposts.Status
        from jobposts
        join users on users.UserID = jobposts.ClientID 
        Where JobPostTitle like '%$search%' or JobDescription like '%$search%'   " );
        return $result;
    }

    public function postDetails() {
        $db = new database();
        $post = $db->conn->query("Select jobposts.PostID, jobposts.ClientID, jobposts.JobType, jobposts.JobBudget,
            jobposts.CreationDate, jobposts.JobDescription, jobposts.ProposalCount, jobposts.JobPostTitle, users.FirstName, jobposts.Status
        from jobposts
        join users on users.UserID = jobposts.ClientID  WHERE PostID =". $_GET['PostID'] );
        return $post;
    }

    public function saveJobPost($PostID, $FreeLancerId){
        $db = new database();
        $sql = "INSERT INTO savedposts( PostID, FreelancerId) VALUES ('$PostID', '$FreeLancerId' )";
        $db->insert($sql);
        return true;
    }

    public function applyToJob($Email, $phonenumber, $skills){
        $db = new database();
        $sql = "INSERT INTO applyform ( Email, PhoneNumber, FreelancerSkills) VALUES ('$Email', '$phonenumber', '$skills')";
        $db->insert($sql);
        return true;
    }

    public function viewSavedPosts($freeLancerId) {
        $db = new database();
        $result = $db->conn->query("Select DISTINCT jobposts.JobType , jobposts.JobBudget, jobposts.JobDescription,jobposts.ProposalCount,jobposts.JobPostTitle,
                    jobPosts.ClientID,
                    jobPosts.PostID,
                    jobPosts.CreationDate,
                    jobposts.Status,
                    users.FirstName
            from savedposts 
            join jobposts on jobposts.PostID = savedposts.PostID
            join users on users.UserID = jobposts.ClientID
            WHERE savedposts.FreelancerId = $freeLancerId;" );
        return $result;
    }
}


?>