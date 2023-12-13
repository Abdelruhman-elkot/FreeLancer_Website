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
        $result = $this->db->conn->query("Select jobposts.PostID, jobposts.ClientID, jobposts.JobType, jobposts.JobBudget,jobposts.Status,
        jobposts.CreationDate, jobposts.JobDescription, jobposts.ProposalCount, jobposts.JobPostTitle, users.FirstName
        from jobposts
        join users on users.UserID = jobposts.ClientID 
        Where JobPostTitle like '%$search%' or JobDescription like '%$search%'" );
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

    public function applyToJob($CV){
        $sql = "INSERT INTO proposals (CV) VALUES ('$CV')";
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