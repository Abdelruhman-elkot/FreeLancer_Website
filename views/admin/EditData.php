<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
 <?php
        $postID = $_POST['Edit_Post'];
 ?>
 <form method="POST" action="../../controllers/AdminController.php">
    <div>
        <label for="jobTitle">Job title</label>
            <input style="height: 20px;" type="text" name= "jobTitle" id="jobTitle">
    </div>
    <div>
        
    <button type="submit" name="save" value=<?=$postID?>>Save</button>
    </div>
   </form>
    <?php 
    ?>
</body>
</html>

