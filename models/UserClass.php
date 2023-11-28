<?php

class UserClass {
    private int $userId;
    private string $firstName;

    private string $lastName;
    private string $userName;
    private int $phoneNumber;
    private string $profileImage;
    private string $role;
    private string $password;

    private static $userCounter;

    

    public function __construct(string $firstName, string $lastName, int $phoneNumber, string $profileImage, string $password) {
    }
    function setFirstName(string $firstName){
        $this->firstName = $firstName;

    }
    function setLastName(string $lastName){
        $this->lastName = $lastName;
    }
    function  setphoneNumber(string $phoneNumber){
        $this->$phoneNumber = $phoneNumber;
    }
    function setProfileImage(string $profileImage){
        $this->$profileImage = $profileImage;
    }
    function  setRole(string $role){
            $this->$role = $role;
    }
    function setPassword(string $password){
        $this->$password = $password;
    }

    function getFirstName(): string{
        return $this->firstName;
    }

    function getLastName(): string{
        return $this->lastName;
    }

    function getUserName(): string{
        return $this->userName;
    }
    function getPhoneNumber(): string{
        return $this->phoneNumber;
    }
    function getProfileImage(): string{
        return  $this->profileImage;
    }

    function getRole(): string{
        return $this->role;
    }

    function getPassword(): string{
        return $this->password;
    }

    function getuserCounter(){
        return self::$userCounter;
    
    }


    public function login(string $username, string $password){}

    public function logout(){}

    public function changePassword(string $oldPassword, string $newPassword){}

    public function viewPost(string $viewPost){}






}













?>