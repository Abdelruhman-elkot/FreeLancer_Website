<?php
include 'c:\xampp\htdocs\SW1_Project\models\AdminClass.php';
$admin = new Admin();
$user = new User();
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['signup'])) {

    if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['userRole'])) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phonenumber = $_POST['phonenumber'];
        $email = $_POST['email'];
        $role = $_POST['userRole'];

        // $password = password_hash($randompassword, PASSWORD_DEFAULT);
        $randompassword = $admin->generatePassword();
        $user->signUp($firstname, $lastname, $phonenumber, $email, $role, $randompassword);
        $username = $admin->generateUsername($firstname, $lastname);
        $admin->SendMail($email, $firstname, $username, $randompassword);

        header("Location: ../index.php");
    } else {
        echo "<script>alert(Please Check (Firstname - Lastname - Email) Fields not empty)</script>";
    }
}
?>