<?php
session_start();
include 'c:\xampp\htdocs\SW1_Project\include\headeradmin.php';
if($_SESSION['username'] && $_SESSION['userRole'] === "Admin")
{
?>
<section class="overlay"></section>

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

        <div style="display: flex; flex-direction :row ; justify-content: space-evenly;">
          <div style="position: relative;">
            <?php
            echo "Accepted posts";
            echo $post->acceptedCounter();
        
            ?>
          </div>
          <div style="position: relative;">
            <?php
            echo "Refused posts";
            echo $post->refuesedCounter();
        
            ?>
          </div>
          <div style="position: relative;">
            <?php
            echo "Pending posts";
            echo $post->pendingCounter();
        
            ?>
          </div>
        </div>
            <?php

          
          $data = $admin->displayPosts();
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
                      <form action="<?php echo APPURL ?>/views/admin/EditData.php" method="POST">
                         <button type="submit" name="Edit_Post" value="<?=$row['PostID']?>" class="btm btn-danger">Edit</button>
                      </form>
                  </td>
                  <td>
                      <form action="<?php echo APPURL ?>/controllers/RemovePostAdmin.php" method="POST">
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
                            <form action="<?php echo APPURL ?>/controllers/RemovePostAdmin.php" method="POST">
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
                $data = $admin->displayPosts();
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
                            <form action="<?php echo APPURL ?>/controllers/AcceptPostAdmin.php" method="POST" style=" flex: 2px;">
                                <button type="submit" name="Accept_Post" value="<?=$row['PostID']  ?>" class="btm btn-danger">Accept</button>
                            </form>
                        </td>
                        <td>
                            <form action="<?php echo APPURL ?>/controllers/RefusePostAdmin.php" method="POST">
                                <button type="submit" name="Refuse_Post" value="<?=$row['PostID']  ?>" class="btm btn-danger">Refuse</button>
                            </form>
                        </td>
                        <?php
                        }
                  }
                  ?>

                </tbody>
              </table>
            </div>
         </div>
</div>        
     
<?php
include 'c:\xampp\htdocs\SW1_Project\include\footeradmin.php';
}
else {
  header("Location:../../index.php");
}
?>