<?php

include_once '../include/DatabaseClass.php';		
$db = new database();
include "../models/AdminClass.php";
$admin = new Admin();

if (isset($_POST['submit'])) {

    if (empty($_POST['firstname']) or empty($_POST['lastname']) or empty($_POST['email'])) {
        echo "<script>alert(Please Check (Firstname - Lastname - Email) Fields not empty)</script>";
        // $validate = true;
    } else {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phonenumber = $_POST['phonenumber'];
        $email = $_POST['email'];
        $role = $_POST['userRole'];

        function generateRandomPassword($length = 8)
        {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $password = '';

            for ($i = 0; $i < $length; $i++) {
                $password .= $characters[rand(0, strlen($characters) - 1)];
            }

            return $password;
        }

        $randompassword = generateRandomPassword();
        // $password = password_hash($randompassword, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (FirstName, LastName, PhoneNumber, Email, UserRole, userPassword) VALUES ('$firstname', '$lastname', '$phonenumber', '$email', '$role', '$randompassword')";
        $db->insert($sql);

        $row = $db->getLastRecordData('users' , 'UserID');
        $username = $firstname . "_" . $lastname . "#" . ($row['UserID']);

        $sql = "UPDATE users SET Username = '$username' WHERE UserID = '".$row['UserID']."'";
        $db->update($sql);

        $admin->SendMail($email,$firstname,$username,$randompassword);


        header("Location: ../index.php");
    }
}
