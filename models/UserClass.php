<?php

class User {
    private $ID;
    protected $firstname;
    protected $lastname;
    protected $phonenumber;
    protected $email;
    protected $profileimage;
    protected $role;
    private $username;
    protected $password;
    protected $db;
    private static $userCounter;
    
    function __construct() {
        include_once '../include/DatabaseClass.php';
        $this->db = new database();
    }
    
    
    public function userinfo($info){
        $this->firstname = $info['firstname'];
        $this->lastname = $info['lastname'];
        $this->phonenumber = $info['phonenumber'];
        $this->email = $info['email'];
        $this->profileimage = $info['profileimage'];
        $this->role = $info['role'];
        $this->username = $info['username'];
        $this->password = $info['password'];
    }

    
    //Getter
    function getID(){
        return $this->ID;
    }

    function getFirstName(){
        return $this->firstname;
    }
    
    function getLastName(){
        return $this->lastname;
    }

    function getEmail(){
        return $this->email;
    }

    function getPhoneNumber(){
        return $this->phonenumber;
    }
    
    function getUserName(){
        return $this->username;
    }
    
    function getProfileImage(){
        return  $this->profileimage;
    }
    
    function getRole(){
        return $this->role;
    }
    
    function getPassword(){
        return $this->password;
    }
    
    function getuserCounter(){
        return self::$userCounter;
    }

    //Setter
    function setFirstName($firstname){
        $this->firstname = $firstname;
    }

    function setLastName($lastname){
        $this->lastname = $lastname;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function setPhoneNumber($phonenumber){
        $this->phonenumber = $phonenumber;
    }
    
    function setProfileImage($profileimage){
        $this->profileimage = $profileimage;
    }

    function setRole($role){
        $this->role = $role;
    }

    function setPassword($password){
        $this->password = $password;
    }
    
    //Methods
    // Login Method
    function login($username , $password){
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
            $this->db->close();
            return true;
        } else {
            $this->db->close();
            return false;
        }
    }

    // Login Method
    function logout(){
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
    

    public function getProfile() {
        // Implementation for retrieving user profile
    }

    // public function changePassword() {
    //     // Implementation for changing user password
    // }
    
}
?>