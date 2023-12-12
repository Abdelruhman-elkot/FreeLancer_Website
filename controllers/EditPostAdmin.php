<?php
include_once "../include/DatabaseClass.php";

          $sql = "SELECT * FROM jobposts";
          $db= new database();
          $data = $db->display($sql);
          if(isset($_POST['save'])){
            $jobTitle = $_POST['jobTitle'];
            $ID = $_POST['save'];
            $sql= "UPDATE jobposts SET JobPostTitle = $jobTitle WHERE PostID = '$ID'";
            $db->update($sql);
          }
?>