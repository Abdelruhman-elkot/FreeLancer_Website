<?php
include_once 'c:\xampp\htdocs\SW1_Project\models\UserClass.php';
class Client extends User{

    private int $clientCount;
    
    public function __construct(){
        parent::__construct();
    }

    public function changePassword($newPassword) {
        $sql = "UPDATE users SET userPassword = '$newPassword' WHERE UserID = '".$_SESSION['id']."'";
        $this->db->update($sql);
    }

    public function verifyOldPassword($oldPassword) {
        $sql = "SELECT * FROM users WHERE UserID = '".$_SESSION['id']."'";
        $result = $this->db->select($sql);

        if ($result['userPassword'] === $oldPassword) {
                return true;
        }
        return false;
    }
    
    public function writeJobPost($jobType, $jobBudget, $jobDescription, $jobTitle){
        $sql = "INSERT INTO jobposts (ClientID, JobType, JobBudget, JobDescription, JobPostTitle) VALUES ('".$_SESSION['id']."', '$jobType', '$jobBudget', '$jobDescription', '$jobTitle')";
        $this->db->insert($sql);
    }

    public function showAllHisPosts(){
        $sql = "SELECT * , users.FirstName FROM jobposts join users on users.UserID = jobposts.ClientID WHERE ClientID = '".$_SESSION['id']."'";
        $data = $this->db->display($sql);
        return $data;
    }

    public function editData($firstname, $lastname, $phonenumber, $email, $about){
        $sql = "UPDATE users SET FirstName ='$firstname', LastName='$lastname', PhoneNumber='$phonenumber', Email='$email', About='$about' WHERE UserID = '".$_SESSION['id']."'";
        $this->db->update($sql);
        $row = $this->db->select("SELECT * FROM `users` WHERE UserID = '".$_SESSION['id']."'");
        $_SESSION['firstname'] = $row['FirstName'];
        $_SESSION['lastname'] = $row['LastName'];
        $_SESSION['email'] = $row['Email'];
        $_SESSION['phonenumber'] = $row['PhoneNumber'];
        $_SESSION['about'] = $row['About'];
    }
    
    public function editPhoto(){
        $sql = "UPDATE users SET ProfileImage = '".basename($_FILES["profile_picture"]["name"])."' WHERE UserID = '".$_SESSION['id']."'";
        $this->db->update($sql);
    }
    

    public function acceptProposal($propID){
        $sql = "UPDATE proposals SET Status = 'Accepted' WHERE ProposalID = '$propID'";
        $this->db->update($sql);
    }

    public function refuseProposal($propID){
        $sql = "UPDATE proposals SET Status = 'Refused' WHERE ProposalID = '$propID'";
        $this->db->update($sql);
    }

    public function clientCounter(){
        $sql = "SELECT * FROM users";
        $data = $this->db->display($sql);
        $this->clientCount = 0;
        foreach ($data as $row){
            if(isset($row['UserRole']) && $row['UserRole'] == 'Client'){
                $this->clientCount++;
            }
        }
        return $this->clientCount;
    }

}
?>