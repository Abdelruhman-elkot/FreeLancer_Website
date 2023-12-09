<?php

include_once 'UserClass.php';
class Client extends User{
    
    public function __construct(){
        parent::__construct();
    } 
    
    public function writeJobPost($jobType, $jobBudget, $description){
    
    }

    public function showAllHisPosts($clientID){
        $db = new database();
        $sql = "SELECT * , users.FirstName FROM jobposts join users on users.UserID = jobposts.ClientID WHERE ClientID = $clientID";
        $data = $db->conn->query($sql);
        return $data;
    }
    
    function changePassword($userID, $newPassword) {
        $sql = "UPDATE users SET userPassword = '$newPassword' WHERE UserID = '$userID'";
        return $this->db->update($sql);
    }

    public function verifyOldPassword($userID, $oldPassword) {
        $sql = "SELECT userPassword FROM users WHERE UserID = '$userID'";
        $result = $this->db->select($sql);

        if ($result && isset($result['userPassword'])) {
            return ($result['userPassword'] === $oldPassword);
        }

        return false;
    }

    public function acceptProposal(){

    }

    public function refuseProposal(){

    }


    

}


?>