<?php
include_once 'c:\xampp\htdocs\SW1_Project\models\UserClass.php';
class Freelancer extends User{
    private int $freelancerCount;

    public function __construct(){
        parent::__construct();

    }

    public function viewAllJobPosts(){
        $sql = "SELECT * , users.FirstName FROM jobposts join users on users.UserID = jobposts.ClientID";
        $result = $this->db->display($sql);
        return $result;
    }

    public function postDetails() {
        $sql = "SELECT * , users.FirstName FROM jobposts join users on users.UserID = jobposts.ClientID  WHERE PostID =". $_GET['PostID']."";
        $post = $this->db->select($sql);
        return $post;
    }

    public function searchForJop($search){
        $sql = "SELECT * , users.FirstName FROM jobposts join users WHERE JobPostTitle LIKE '%$search%' OR FirstName  LIKE '%$search%' OR CreationDate LIKE '%$search%'";
        $result = $this->db->display($sql);
        return $result;
    }

    public function saveJobPost($PostID){
        $sql = "INSERT INTO savedposts (PostID, FreelancerId) VALUES ('$PostID', '".$_SESSION['id']."')";
        $this->db->insert($sql);
        return true;
    }

    public function viewSavedPosts() {
        $result = $this->db->display("SELECT DISTINCT * , users.FirstName FROM savedposts join jobposts on jobposts.PostID = savedposts.PostID join users on users.UserID = jobposts.ClientID WHERE savedposts.FreelancerId = '".$_SESSION['id']."'");
        return $result;
    }

    public function applyToJob($Email, $phonenumber, $skills){
        $sql = "INSERT INTO applyform (Email, PhoneNumber, FreelancerSkills) VALUES ('$Email', '$phonenumber', '$skills')";
        $this->db->insert($sql);
        return true;
    }

    public function freelancerCounter(){
        $sql = "SELECT * FROM users";
        $data = $this->db->display($sql);
        $this->freelancerCount=0;
        foreach ($data as $row){
            if(isset($row['UserRole']) && $row['UserRole'] == 'Freelancer'){
                $this->freelancerCount++;
            }
        }
        return $this->freelancerCount;
    }
}

?>