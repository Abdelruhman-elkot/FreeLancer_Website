<?php

include_once 'UserClass.php';
class Client extends User{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function writeJobPost($jobType, $jobBudget, $description){
    
    }

    public function getClientPosts(){
        
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