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
  <!-- <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css"> -->
</head>

<body>
  <!--- <nav>
    
         
            <div class="logo">
                <i class="bx bx-menu menu-icon"></i>
                <span class="logo-name"> DOT JOB</span>
            </div>
            <div class="sidebar">
                <div class="logo">
                <i class="bx bx-menu menu-icon"></i>
                <span class="logo-name"> DOT JOB</span>
            </div>
                <div class="sidebar-content">
                    <ul class="lists">
                        <a href="#" class="nav-link">
                            <i class="bx bx-home-alt"></i>
                            <span class="link">HOME</span>
                        </a>
                    </ul>
                </div>
            </div>
         </nav> ---->
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
              <a href="jobPostMangement.php" class="nav-link">
                <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="link">Post mangement</span>
              </a>
            </li>

          </div>
        </div>
      </div>
    </nav>

    <section class="overlay"></section>

    <div class="fresh-table full-color-blue">

      <table id="fresh-table" class="table">

        <thead>
          <th data-field="id">ID</th>
          <th data-field="name">Username</th>
          <th data-field="salary">Email</th>
          <th data-field="country">UserRole</th>
          <th data-field="city">PhoneNumber</th>
          <th>Actions</th>
        </thead>
        <tbody>
          <?php
          include_once '../../include/DatabaseClass.php';
          $db = new database();
          $sql = "SELECT * FROM users";
          $data = $db->display($sql);
          $clientCount=0;
          $freelancerCount=0;
          $adminCount=0;
          foreach ($data as $row){
            if(isset($row['UserRole']) && $row['UserRole'] == 'Client'){
              $clientCount++;
            }
            if(isset($row['UserRole']) && $row['UserRole'] == 'Freelancer'){
              $freelancerCount++;
            }
            if(isset($row['UserRole']) && $row['UserRole'] == 'Admin'){
              $adminCount++;
            }
          }
          ?>
        
        <div style="display: flex; flex-direction :row ; justify-content: space-evenly;">
          <div style="position: relative;">
            <?php
            echo "Clients";
            echo $clientCount;
        
            ?>
          </div>
          <div style="position: relative;">
            <?php
            echo "Freelancers";
            echo $freelancerCount;
        
            ?>
          </div>
          <div style="position: relative;">
            <?php
            echo "Admins";
            echo $adminCount;
        
            ?>
          </div>
        </div>
       
    <div style="display: flex; flex-direction :row ; justify-content: space-evenly;">
     <div style="position: relative;"> </div>
        <div style="position: relative;">
            <?php
            echo "Clients";
            echo number_format((float)($clientCount/($clientCount+$freelancerCount) ),3,'.','') *100 . "%";
        
            ?>
          </div>
          <div style="position: relative;">
            <?php
            echo "Freelancers";
            echo number_format((float)($freelancerCount/($clientCount+$freelancerCount)),3,'.','') *100 . "%";
        
            ?>
          </div>
    </div>

<?php



          foreach ($data as $row) {
            echo '<tr>';
            echo '<td>' . $row['UserID']        . '</td>';
            echo '<td>' . $row['Username']        . '</td>';
            echo '<td>' . $row['Email']        . '</td>';
            echo '<td>' . $row['UserRole']        . '</td>';
            echo '<td>' . $row['PhoneNumber']        . '</td>';
          
            ?>
                  <td>
                      <form action="../../controllers/DeleteUser.php" method="POST">
                        <button type="submit" name="user_delete" value="<?= $row["UserID"]; ?>" class="btm btn-danger">Delete</button>
                      </form>
                  </td>

                    <?php

            echo '</tr>';


          }
          ?>
        </tbody>
      </table>
    </div>



  </div>
    <div class="container" id="container">
      <div class = "center">
        <div class="form-container signup-container">
            <form method="post" action="../../controllers/AddUserAdmin.php">
                <h1>Add user</h1>
                <input type="text" placeholder="First name" name="firstname" required />
                <input type="text" placeholder="Last name" name="lastname" required />
                <input type="tel" placeholder="Phone number" name="phonenumber" required />
                <input type="email" placeholder="Email" name="email" title="Make sure to enter a valid email" required />
            <div>
                <label>You Are ?</label>
            </div>
                <div>
                    <label for="client">
                        <input type="radio" name="userRole" value="Client" id="client" style="max-width: min-content;" required />Client</label>
                    <label for="freelancer">
                        <input type="radio" name="userRole" value="Freelancer" id="freelancer" style="max-width: min-content;" />Freelancer</label>
                    <label for="Admin">
                        <input type="radio" name="userRole" value="Admin" id="Admin" style="max-width: min-content;" />Admin</label>
                </div>
                <button type="submit" name="submit">Add</button>
            </form>
        </div>
      </div>
    </div>

            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            <script src="validation.js"></script>


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