<?php

require 'autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mailer = new PHPMailer();                                // make an object

$mailer->isSMTP();                                        // iwant to send mstp mails
// $mailer->SMTPDebug = SMTP::DEBUG_SERVER;
$mailer->Host = "smtp.gmail.com";
$mailer->SMTPSecure = "ssl";           
$mailer->Port = 465;                  
$mailer->SMTPAuth = true;
$mailer->Username = 'dotjob.freelace7@gmail.com'; // Your SMTP username
// $mailer->Password = 'Dotjobpassword12#'; // Your SMTP password
$mailer->Password = 'nnla qgpy oucd rvwz'; // app password    Your SMTP password