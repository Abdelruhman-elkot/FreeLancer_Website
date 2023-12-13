<?php
include 'c:\xampp\htdocs\SW1_Project\models\UserClass.php';

class Admin extends User
{

    private int $adminCount;

    public function __construct()
    {
        parent::__construct();
    }

    public function addUser($firstname, $lastname, $phonenumber, $email, $role)
    {
        $randompassword = $this->generatePassword();
        $this->signUp($firstname, $lastname, $phonenumber, $email, $role, $randompassword);
        $username = $this->generateUsername($firstname, $lastname);
        $this->SendMail($email, $firstname, $username, $randompassword);
        header("Location: ../views/admin/admindashboard.php");
    }

    public function removeUser($userID)
    {
        $sql = "DELETE FROM users WHERE UserID = '$userID'";
        $this->db->delete($sql);    
    }

    public function generateUsername($firstname, $lastname)
    {
        $row = $this->db->getLastRecordData('users' , 'UserID');
        $username = $firstname . "_" . $lastname . "#" . ($row['UserID']);

        $sql = "UPDATE users SET Username = '$username' WHERE UserID = '".$row['UserID']."'";
        $this->db->update($sql);
        return $username;
    }

    public function generatePassword($length = 8)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $password;
    }

    public function acceptPost($postID) 
    {
        $sql = "UPDATE jobposts SET Status = 'Accepted' WHERE PostID = '$postID'";
        $this->db->update($sql);

    }

    public function refusePost($postID)
    {
        $sql = "UPDATE jobposts SET Status = 'Refused' WHERE PostID = '$postID'";
        $this->db->update($sql);
    }

    public function updateJobPost($jobTitle,$ID)
    {
        $sql= "UPDATE jobposts SET JobPostTitle = '$jobTitle' WHERE PostID = '$ID'";
        $this->db->update($sql);
    }

    public function removePost($postID)
    {
        $sql = "DELETE FROM jobposts WHERE PostID = '$postID'";
        $this->db->delete($sql); 
    }

    public function SendMail($email, $name, $username, $password)
    {
        include 'C:\xampp\htdocs\SW1_Project\emails\vendor\mail_config.php';

        $mailer->setFrom("dotjob.freelace7@gmail.com", "Dot Job Admin");    // the sender
        $mailer->addAddress($email, $name);

        $mailer->Subject = "sending username and password";

        $mailer->isHTML(true);

        $mailer->Body = "hello $name <br>this is the <strong>$username</strong> and <strong>$password</strong>";
        $mailer->AltBody = "hello $name this is the $username and $password";

        $mailer->send();
    }

    public function displayUsers(){
        $sql = "SELECT * FROM users";
        $data = $this->db->display($sql);
        return $data;
    }

    public function displayPosts(){
        $sql = "SELECT * FROM jobposts";
        $data = $this->db->display($sql);
        return $data;
    }

    public function adminCounter(){
        $sql = "SELECT * FROM users";
        $data = $this->db->display($sql);
        $this->adminCount=0;
        foreach ($data as $row){
            if(isset($row['UserRole']) && $row['UserRole'] == 'Admin'){
                $this->adminCount++;
            }
        }
        return $this->adminCount;
    }
}
