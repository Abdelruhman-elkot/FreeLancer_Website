<?php
<<<<<<< HEAD

include_once '../include/DatabaseClass.php';
$db = new database();
include "../models/AdminClass.php";
=======
include 'c:\xampp\htdocs\SW1_Project\models\AdminClass.php';
>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b
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
<<<<<<< HEAD

        $sql = "INSERT INTO users (FirstName, LastName, PhoneNumber, Email, UserRole, userPassword) VALUES ('$firstname', '$lastname', '$phonenumber', '$email', '$role', '$randompassword')";
        $db->insert($sql);

        $row = $db->getLastRecordData('users' , 'UserID');
        $username = $firstname . "_" . $lastname . "#" . ($row['UserID']);

        $sql = "UPDATE users SET Username = '$username' WHERE UserID = '".$row['UserID']."'";
        $db->update($sql);

        //$admin->SendMail($email,$firstname,$username,$randompassword);

=======
        $randompassword = $admin->generatePassword();
        $user->signUp($firstname, $lastname, $phonenumber, $email, $role, $randompassword);
        $username = $admin->generateUsername($firstname, $lastname);
        $admin->SendMail($email, $firstname, $username, $randompassword);
>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b

        header("Location: ../index.php");
    } else {
        echo "<script>alert(Please Check (Firstname - Lastname - Email) Fields not empty)</script>";
    }
}
?>