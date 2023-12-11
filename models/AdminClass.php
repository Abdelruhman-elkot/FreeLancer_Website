<?php
include "../models/UserClass.php";

class Admin extends User
{
    private static $adminCounter;

    public function __construct()
    {
        parent::__construct();
    }

    public function addUser()
    {

    }

    public function removeUser($userID)
    {
        $db = new database();
        $sql = "DELETE FROM users WHERE UserID = '$userID'";
        $db->delete($sql);    
    }

    public function allotUsername()
    {
    }

    function generatePassword($length = 8)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $password = '';

        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $password;
    }


    public function removePost($postID)
    {
        $db = new database();
        $sql = "DELETE FROM jobposts WHERE PostID = '$postID'";
        $db->delete($sql); 
    }

    public function acceptPost($postID) 
    {
        $sql = "UPDATE jobposts SET Status = 'Accepted' WHERE PostID = '$postID'";
        $db = new database();
        $db->update($sql);

    }

    public function refusePost($postID)
    {
        $sql = "UPDATE jobposts SET Status = 'Refused' WHERE PostID = '$postID'";
        $db = new database();
        $db->update($sql);
    }

    public function updateJobPost()
    {
    }

    public function SendMail($email, $name, $username, $password)
    {
        include "../emails/vendor/mail_config.php";

        $mailer->setFrom("dotjob.freelace7@gmail.com", "Dot Job Admin");    // the sender
        $mailer->addAddress($email, $name);

        $mailer->Subject = "sending username and password";

        $mailer->isHTML(true);

        $mailer->Body = "hello $name <br>this is the <strong>$username</strong> and <strong>$password</strong>";
        $mailer->AltBody = "hello $name this is the $username and $password";

        $mailer->send();
    }
}
