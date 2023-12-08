<?php 

if(isset($_POST['logout'])){
    include '../models/UserClass.php';
    $user = new User();
    $user->logout();
}