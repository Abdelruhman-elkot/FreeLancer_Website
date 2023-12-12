<?php
include_once '../include/DatabaseClass.php';
include '../models\AdminClass.php';
$admin = new Admin();
if(isset($_POST["Accept_Post"])){
    $user_id = $_POST["Accept_Post"];
    $admin -> acceptPost($user_id);
    header("Location:../views/admin/jobPostMangement.php");
    exit();


}

?>