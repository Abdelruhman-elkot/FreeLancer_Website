<?php
include 'c:\xampp\htdocs\SW1_Project\models\UserClass.php';
$user = new User();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['login'])) {

    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $check = $user->login($username, $password);

        if ($check === true) {
            $role = $_SESSION['userRole'];

            if ($role === 'Admin') {
            header("Location:../views/admin/admindashboard.php");
            } 
            
            elseif ($role === 'Client') {
                header("Location:../views/client/overview.php");
            } 
            
            elseif ($role === 'Freelancer'){
                header("Location:../views/freelancer/posts.php");
            } 

        } else {
			$param = "false";
			header("Location:../views/shared/loginAndSignup.php?id=$param");
        }
    }
}
?>