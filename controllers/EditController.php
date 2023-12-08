<?php

    session_start();
    include_once '../include/DatabaseClass.php';		
    $db = new database();

    if (isset($_POST['save'])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phonenumber = $_POST["phone"];
    $email = $_POST["email"];


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

    $sql = "UPDATE users SET FirstName ='$firstname', LastName='$lastname', PhoneNumber='$phonenumber', Email='$email', ProfileImage='".basename($_FILES["profile_picture"]["name"])."' WHERE UserID = '".$_SESSION['id']."'";
    $db->update($sql);
    
    // $conn = $db->getConnection();
    $login = $conn->query("SELECT * FROM `users` WHERE UserID = '".$_SESSION['id']."'");
    if ($login->num_rows > 0) {
        $row = $login->fetch_assoc();
    }
    $_SESSION['firstname'] = $row['FirstName'];
    $_SESSION['lastname'] = $row['LastName'];
    $_SESSION['email'] = $row['Email'];
    $_SESSION['phonenumber'] = $row['PhoneNumber'];

} else {
    echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
}

?>