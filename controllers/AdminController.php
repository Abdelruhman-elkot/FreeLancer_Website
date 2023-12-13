<?php 
include 'c:\xampp\htdocs\SW1_Project\models\AdminClass.php';
$admin = new Admin();

if (isset($_POST['add_user'])) {
    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['userRole'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phonenumber = $_POST['phonenumber'];
        $email = $_POST['email'];
        $role = $_POST['userRole'];

        $admin->addUser($firstname, $lastname, $phonenumber, $email, $role);
    }
}

if(isset($_POST["user_delete"])){
    $user_id = $_POST["user_delete"];
    $admin -> removeUser($user_id);
    header("Location:../views/admin/admindashboard.php");
    exit();
}

if(isset($_POST["Accept_Post"])){
    $user_id = $_POST["Accept_Post"];
    $admin->acceptPost($user_id);
    header("Location:../views/admin/jobPostMangement.php");
    exit();
}

if(isset($_POST["Refuse_Post"])){
    $user_id = $_POST["Refuse_Post"];
    $admin->refusePost($user_id);
    header("Location:../views/admin/jobPostMangement.php");
    exit();
}

if(isset($_POST["Remove_Post"])){
    $user_id = $_POST["Remove_Post"];
    $admin -> removePost($user_id);
    header("Location:../views/admin/jobPostMangement.php");
    exit();
}

?>