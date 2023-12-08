<?php

    include_once '../include/DatabaseClass.php';		
    $db = new database();

    if (isset($_POST['submit'])){
        if (empty($_POST['username']) OR empty($_POST['password'])){
            echo "<script>alert('some inputs are empty');</script>";
        }else{
            $username = $_POST['username'];
            $password = $_POST['password'];

            $conn = $db->getConnection();
            $login = $conn->query("SELECT * FROM users WHERE Username='$username'");
            
            if ($login && $login->num_rows > 0) {
                $row = $login->fetch_assoc();

                if ($username === $row['Username']) {
                    if ($password === $row['userPassword']) {
                        session_start();
                        $_SESSION['username'] = $row['Username'];
                        $_SESSION['firstname'] = $row['FirstName'];
                        $_SESSION['lastname'] = $row['LastName'];
                        $_SESSION['phonenumber'] = $row['PhoneNumber'];
                        $_SESSION['email'] = $row['Email'];
                        $_SESSION['ID']=$row['UserID'];
                        header("Location:../index.php");
                    }else{
                        echo "<script>alert('wrong password');</script>";
                    }
                }else{
                    echo "<script>alert('wrong username');</script>";
                }
            } else {
                echo "<script>alert('Username not found');</script>";
            }
        }
    }
    
    
    /* // 7war el apply wl save
    if(empty($_SESSION['username'])){
        echo "<script>alert('Login First');</script>";
        header("location: ../views/shared/loginAndSignup.php")
    }else{
        
    } */
?>