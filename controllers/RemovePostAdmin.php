<?php
include_once '../include/DatabaseClass.php';
include '../models\AdminClass.php';
$admin = new Admin();
if(isset($_POST["Remove_Post"])){
    $user_id = $_POST["Remove_Post"];
    $admin -> removePost($user_id);
    header("Location:../views/admin/jobPostMangement.php");
    exit();


}

?>