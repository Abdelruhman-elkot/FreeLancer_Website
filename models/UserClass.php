<?php

class User {

    // Attributes
    private int $ID;
    private string $firstname;
    private string $lastname;
    private string $phonenumber;
    private string $email;
    private string $profileimage;
    private string $role;
    private string $username;
    private string $password;
    private string $about;
    public $db;
    
    // Constructor
<<<<<<< HEAD
    function __construct() {
        include_once '../include/DatabaseClass.php';
=======
    public function __construct() {
        include_once 'c:\xampp\htdocs\SW1_Project\include\DatabaseClass.php';
>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b
        $this->db = new database();
    }
    
    //Methods
    // SignUp Method
    public function signUp($firstname, $lastname, $phonenumber, $email, $role, $password){
        $sql = "INSERT INTO users (FirstName, LastName, PhoneNumber, Email, UserRole, userPassword) VALUES ('$firstname', '$lastname', '$phonenumber', '$email', '$role', '$password')";
        $this->db->insert($sql);
    }

    // Login Method
    public function login($username , $password){
        $this->username = $username;
        $this->password = $password;

        $sql = "SELECT * FROM users WHERE Username = '$username' AND userPassword = '$password'";
        $result = $this->db->select($sql);

        if (isset($result)) {
            session_start();
            $_SESSION['id'] = $result['UserID'];
            $_SESSION['firstname'] = $result['FirstName'];
            $_SESSION['lastname'] = $result['LastName'];
            $_SESSION['email'] = $result['Email'];
            $_SESSION['phonenumber'] = $result['PhoneNumber'];
            $_SESSION['profileimage'] = $result['ProfileImage'];
            $_SESSION['userRole'] = $result['UserRole'];
            $_SESSION['username'] = $result['Username'];
            $_SESSION['userpassword'] = $result['userPassword'];
            $_SESSION['about'] = $result['About'];
            $this->db->close();
            return true;
        } else {
            $this->db->close();
            return false;
        }
    }

    // Logout Method
    public function logout(){
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['firstname']);
        unset($_SESSION['lastname']);
        unset($_SESSION['email']);
        unset($_SESSION['phonenumber']);
        unset($_SESSION['profileimage']);
        unset($_SESSION['userRole']);
        unset($_SESSION['username']);
        unset($_SESSION['userpassword']);
        session_destroy();
        $this->db->close();
        header("Location:../index.php");
        exit();
    }
}
?>