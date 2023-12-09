<?php 
session_start();
include_once '../include/DatabaseClass.php';		
$db = new database();

if (isset($_POST['create']) && $_SESSION['id']) {
    if (!empty($_POST['jobTitle']) && !empty($_POST['jobBudget']) && !empty($_POST['jobDescription'] && !empty($_POST['jobType']))) {
        $jobTitle = $_POST['jobTitle'];
        $jobType = $_POST['jobType'];
        $jobBudget = $_POST['jobBudget'];
        $jobDescription = $_POST['jobDescription'];
    }

    $sql = "INSERT INTO jobposts (ClientID, JobType, JobBudget, JobDescription, JobPostTitle) VALUES ('".$_SESSION['id']."', '$jobType', '$jobBudget', '$jobDescription', '$jobTitle')";
    $db->insert($sql);
}