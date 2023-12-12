<?php
include_once '../include/DatabaseClass.php';
include '../models\AdminClass.php';
$admin = new Admin();
if(isset($_POST["Refuse_Post"])){
    $user_id = $_POST["Refuse_Post"];
    $admin -> refusePost($user_id);
    header("Location:../views/admin/jobPostMangement.php");
    exit();


}

?>