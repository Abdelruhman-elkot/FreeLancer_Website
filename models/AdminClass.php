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

    public function removeUser()
    {
    }

    public function allotUsername()
    {
    }

    public function allotPassword()
    {
    }

    public function addToWall()
    {
    }

    public function addJobPost()
    {
    }

    public function removejobPost()
    {
    }

    public function acceptJobPost()
    {
    }

    public function refuseJobPost()
    {
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
