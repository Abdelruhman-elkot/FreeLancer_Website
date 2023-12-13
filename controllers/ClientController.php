<?php

session_start();
include_once 'c:\xampp\htdocs\SW1_Project\models\ClientClass.php';		
$client = new Client();


// Controller of Change Password
if (isset($_POST['change'])){
    $old_password = $_POST["oldpassword"];
    $new_password = $_POST["newpassword"];
    $renew_password = $_POST["renewpassword"];
    if($client->verifyOldPassword($old_password)){
        if($new_password === $renew_password){
            $client->changePassword($new_password);
            header('Location: ../views/client/overview.php');
        }else{
            echo "New password and confirm password do not match";
        }
    }else{
        echo "Old password is incorrect";
    }
}


// Controller for Edit(Update) Data
if (isset($_POST['save'])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phonenumber = $_POST["phone"];
    $email = $_POST["email"];
    $about = $_POST["about"];

    $client->editData($firstname, $lastname, $phonenumber, $email, $about);


    $targetDirectory = "../assets/imgs/";
    $targetFile = $targetDirectory . basename($_FILES["profile_picture"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    // Check if image file is a actual image or fake image
    if (isset($_POST["Save"])) {
        $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "<script>alert('File is not an image');</script>";
            $uploadOk = 0;
        }
    }

    // Check file size
    if ($_FILES["profile_picture"]["size"] > 500000) {
        echo "<script>alert('Your File is too large');</script>";
        $uploadOk = 0;
    }
    

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
        echo "<script>alert('only JPG, JPEG & PNG files are allowed')</script>";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "<script>alert('Sorry, your file was not uploaded');</script>";
    } else {
        if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFile)) {
            $_SESSION['profileimage'] = basename($_FILES["profile_picture"]["name"]);
            header("Location: ../views/client/overview.php");
        }
    }
    
    $client->editPhoto();
}

// Controller of Write Job Post 
if (isset($_POST['create']) && $_SESSION['id']) {
    if (!empty($_POST['jobTitle']) && !empty($_POST['jobBudget']) && !empty($_POST['jobDescription'] && !empty($_POST['jobType']))) {
        $jobTitle = $_POST['jobTitle'];
        $jobType = $_POST['jobType'];
        $jobBudget = $_POST['jobBudget'];
        $jobDescription = $_POST['jobDescription'];

        $client->writeJobPost($jobType, $jobBudget, $jobDescription, $jobTitle);
        header('Location: ../views/client/view_posts.php');
    }
}

?>