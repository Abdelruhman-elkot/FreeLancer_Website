<?php

    include_once '../include/DatabaseClass.php';		
    $db = new database();

    if (isset($_POST['submit'])){

        if (empty($_POST['firstname']) OR empty($_POST['lastname']) OR empty($_POST['email'])){
            echo "<script>alert('some inputs are empty');</script>";
        }else{

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $username = $firstname . "_" . $lastname . "#";

            function generateRandomPassword($length = 8) {
                $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                $password = '';
                
                for ($i = 0; $i < $length; $i++) {
                    $password .= $characters[rand(0, strlen($characters) - 1)];
                }
                
                return $password;
            }
            
            $randompassword = generateRandomPassword();
            // $password = password_hash($randompassword, PASSWORD_DEFAULT);

            $sql = "INSERT INTO Users (FirstName, LastName, PhoneNumber, Email, Username, userPassword) VALUES ('$firstname', '$lastname', '$phonenumber', '$email', '$username', '$randompassword')";
            $db->insert($sql);

            header("Location: ../index.php");
        }
    }

?>