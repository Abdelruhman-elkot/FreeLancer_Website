<?php
include_once '../include/DatabaseClass.php';
include '../models\AdminClass.php';
$admin = new Admin();
if(isset($_POST["user_delete"])){
    $user_id = $_POST["user_delete"];
    // echo $user_id;
    $admin -> removeUser($user_id);
    header("Location:../views/admin/reactTable.php");
        exit();
}
?>