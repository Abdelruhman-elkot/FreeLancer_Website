<?php

    session_start();
    include_once '../include/DatabaseClass.php';		
    $db = new database();
    $select = $db->conn->query("SELECT * FROM `users` WHERE UserID = '".$_SESSION['id']."'");

    if (isset($_POST['change'])){
        $old_password = $_POST["oldpassword"];
        $new_password = $_POST["newpassword"];
        $renew_password = $_POST["renewpassword"];


        if ($select->num_rows > 0) {
            $row = $select->fetch_assoc();
        }
        if ($old_password === $row['userPassword']){
            $sql = "UPDATE users SET userPassword = '$new_password' WHERE UserID = '".$_SESSION['id']."'";
            $db->update($sql);
        }

    }
?>