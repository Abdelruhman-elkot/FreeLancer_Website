<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../assets/css/reactTable.css">

  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
  <!-- Style -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />

  <!-- Fonts and icons -->
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet"> <!-- icons link -->
  
</head>

<body>

  <div>
    <nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">DOT JOB</span>
      </div>
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">DOT JOB</span>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Dashboard</span>
              </a>
            </li>
            <li class="list">
              <a href="reactTable.php" class="nav-link">
                <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="link">Users mangement</span>
              </a>
            </li>
          </div>
        </div>
      </div>
    </nav>

    <section class="overlay"></section>
=======
<?php
session_start();
include 'c:\xampp\htdocs\SW1_Project\include\headeradmin.php';
if($_SESSION['username'] && $_SESSION['userRole'] === "Admin")
{
?>
<section class="overlay"></section>
>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b

    <div class="fresh-table full-color-blue">


      <table id="fresh-table" class="table">

        <thead>
          <th data-field="PostID">PostID</th>
          <th data-field="ClientID">ClientID</th>
          <th data-field="Job Type">Job Type</th>
          <th data-field="Job Budget">Job Budget</th>
          <th data-field="Job Description">Job Description</th>
          <th data-field="Proposal Count">Proposal Count</th>
          <th data-field="Status">Status</th>
          <th data-field="Job Post Title">Job Post Title</th>
          <th>Actions</th>
        </thead>
        <tbody>
<<<<<<< HEAD
          <?php
          
          include_once '../../include/DatabaseClass.php';
          $db = new database();
          $sql = "SELECT * FROM jobposts";
          $data = $db->display($sql);
          $acceptedCount=0;
          $refusedCount=0;
          $pendingCount=0;

          foreach ($data as $row){
            if(isset($row['Status'])&& $row['Status'] == 'Accepted'){
              $acceptedCount++;

            }
            if(isset($row['Status'])&& $row['Status'] == 'Refused'){
              $refusedCount++;

            }
            if(isset($row['Status'])&& $row['Status'] == 'Pending'){
              $pendingCount++;

            }
          }
        ?>
=======

>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b
        <div style="display: flex; flex-direction :row ; justify-content: space-evenly;">
          <div style="position: relative;">
            <?php
            echo "Accepted posts";
<<<<<<< HEAD
            echo $acceptedCount;
=======
            echo $post->acceptedCounter();
>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b
        
            ?>
          </div>
          <div style="position: relative;">
            <?php
            echo "Refused posts";
<<<<<<< HEAD
            echo $refusedCount;
=======
            echo $post->refuesedCounter();
>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b
        
            ?>
          </div>
          <div style="position: relative;">
            <?php
            echo "Pending posts";
<<<<<<< HEAD
            echo $pendingCount;
=======
            echo $post->pendingCounter();
>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b
        
            ?>
          </div>
        </div>
            <?php

          
<<<<<<< HEAD

=======
          $data = $admin->displayPosts();
>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b
          foreach ($data as $row) {
            if ($row['Status'] === 'Accepted'){
            echo '<tr>';
            echo '<td>' . $row['PostID']        . '</td>';
            echo '<td>' . $row['ClientID']        . '</td>';
            echo '<td>' . $row['JobType']        . '</td>';
            echo '<td>' . $row['JobBudget']        . '</td>';
            echo '<td>' . $row['JobDescription']   . '</td>';
            echo '<td>' . $row['ProposalCount']   . '</td>';
            echo '<td>' . $row['Status']   . '</td>';
            echo '<td>' . $row['JobPostTitle']   . '</td>';
          
            ?>
                  <td>
<<<<<<< HEAD
                      <form action="../../views/admin/EditData.php" method="POST">
=======
                      <form action="<?php echo APPURL ?>/views/admin/EditData.php" method="POST">
>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b
                         <button type="submit" name="Edit_Post" value="<?=$row['PostID']?>" class="btm btn-danger">Edit</button>
                      </form>
                  </td>
                  <td>
<<<<<<< HEAD
                      <form action="../../controllers/RemovePostAdmin.php" method="POST">
=======
                      <form action="<?php echo APPURL ?>/controllers/RemovePostAdmin.php" method="POST">
>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b
                         <button type="submit" name="Remove_Post" value="<?=$row['PostID']  ?>" class="btm btn-danger">Remove</button>
                      </form>
                  </td> 

                    <?php

            echo '</tr>';
            }
            ?>
            <?php
            if( $row['Status'] === 'Refused'){

                echo '<tr>';
                echo '<td>' . $row['PostID']        . '</td>';
                echo '<td>' . $row['ClientID']        . '</td>';
                echo '<td>' . $row['JobType']        . '</td>';
                echo '<td>' . $row['JobBudget']        . '</td>';
                echo '<td>' . $row['JobDescription']   . '</td>';
                echo '<td>' . $row['ProposalCount']   . '</td>';
                echo '<td>' . $row['Status']   . '</td>';
                echo '<td>' . $row['JobPostTitle']   . '</td>';
                ?>
                        <td>
<<<<<<< HEAD
                            <form action="../../controllers/RemovePostAdmin.php" method="POST">
=======
                            <form action="<?php echo APPURL ?>/controllers/RemovePostAdmin.php" method="POST">
>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b
                                <button type="submit" name="Remove_Post" value="<?=$row['PostID']  ?>" class="btm btn-danger">Remove</button>
                            </form>
                        </td>
    
                        <?php
    
              echo '</tr>';
            }
          }
            ?>
        </tbody>
      </table>
    </div>
            
<div style="height: 60px; width: 40px" >
        <div class = "center">
            <section class="overlay"></section>
            <?php echo 'Post requests'?>
            <div class="Requests-table full-color-blue"> 


              <table id="Requests-table" class="table">

                <thead>
                  <th data-field="PostID">PostID</th>
                  <th data-field="ClientID">ClientID</th>
                  <th data-field="Job Post Title">Job Post Title</th>
                  <th data-field="Job Description">Job Description</th>
                  <th data-field="Job Type">Job Type</th>
                  <th>Actions</th>
                </thead>
                <tbody>
                  <?php
<<<<<<< HEAD
                  include_once '../../include/DatabaseClass.php';
                  $db = new database();
                  $sql = "SELECT * FROM jobposts";
                  $data = $db->display($sql);
=======
                $data = $admin->displayPosts();
>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b
                  foreach ($data as $row) {
                    if( $row['Status'] === 'Pending'){

                            echo '<tr>';
                            echo '<td>' . $row['PostID']        . '</td>';
                            echo '<td>' . $row['ClientID']        . '</td>';
                            echo '<td>' . $row['JobPostTitle']   . '</td>';
                            echo '<td>' . $row['JobDescription']   . '</td>';
                            echo '<td>' . $row['JobType']        . '</td>';
                            ?>
                        <td>
<<<<<<< HEAD
                            <form action="../../controllers/AcceptPostAdmin.php" method="POST" style=" flex: 2px;">
=======
                            <form action="<?php echo APPURL ?>/controllers/AcceptPostAdmin.php" method="POST" style=" flex: 2px;">
>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b
                                <button type="submit" name="Accept_Post" value="<?=$row['PostID']  ?>" class="btm btn-danger">Accept</button>
                            </form>
                        </td>
                        <td>
<<<<<<< HEAD
                            <form action="../../controllers/RefusePostAdmin.php" method="POST">
=======
                            <form action="<?php echo APPURL ?>/controllers/RefusePostAdmin.php" method="POST">
>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b
                                <button type="submit" name="Refuse_Post" value="<?=$row['PostID']  ?>" class="btm btn-danger">Refuse</button>
                            </form>
                        </td>
                        <?php
                        }
<<<<<<< HEAD
                        ?>

                    

                <?php
                
                    
=======
>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b
                  }
                  ?>

                </tbody>
              </table>
            </div>
         </div>
</div>        
     
<<<<<<< HEAD


  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

  <script type="text/javascript">
    var $table = $('#fresh-table')
    var $alertBtn = $('#alertBtn')
    $(function() {
      $table.bootstrapTable({
        classes: 'table table-hover table-striped',
        toolbar: '.toolbar',
        search: true,
        showRefresh: true,
        showToggle: true,
        showColumns: true,
        pagination: true,
        striped: true,
        sortable: true,
        pageSize: 8,
        pageList: [8, 10, 25, 50, 100],

      })

    })
  </script>

  <script src="../../assets/js/navbar.js"></script>
  <script src="../../assets/js/reactTbable.js"></script>






</body>

</html>
=======
<?php
include 'c:\xampp\htdocs\SW1_Project\include\footeradmin.php';
}
else {
  header("Location:../../index.php");
}
?>
>>>>>>> 2bd5c91b28226a43e669f2e600b2b9d8b063ee3b
