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
              <a href="#" class="nav-link">
                <i class="bx bx-bar-chart-alt-2 icon"></i>
                <span class="link">Revenue</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-bell icon"></i>
                <span class="link">Notifications</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-message-rounded icon"></i>
                <span class="link">Messages</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-pie-chart-alt-2 icon"></i>
                <span class="link">Analytics</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-heart icon"></i>
                <span class="link">Saved Posts</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-folder-open icon"></i>
                <span class="link">Orders</span>
              </a>
            </li>
          </ul>
          <div class="bottom-cotent">
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-cog icon"></i>
                <span class="link">Settings</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Logout</span>
              </a>
            </li>
          </div>
        </div>
      </div>
    </nav>

    <section class="overlay"></section>

       <div class="fresh-table full-color-blue"> 
  <!--
    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
  -->

  <!---<div class="toolbar">
    <button id="alertBtn" class="btn btn-default">Alert</button>
  </div>--->
  <?php

      ?>
  <table id="fresh-table" class="table">
    
    <thead>
      <th data-field="id">ID</th>
      <th data-field="name">Username</th>
      <th data-field="salary">Email</th>
      <th data-field="country">UserRole</th>
      <th data-field="city">PhoneNumber</th>
      <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
    </thead>
    <tbody>
      <?php
            $db = new database();
            $sql ="SELECT * FROM users";
            $data = $db-> display($data);
            foreach($data as $row){
                echo '<tr>';
                    echo '<td>' . $row['UserID']        .'</td>';
                    echo '<td>' . $row['Username']        .'</td>';
                    echo '<td>' . $row['Email']        .'</td>';
                    echo '<td>' . $row['UserRole']        .'</td>';
                    echo '<td>' . $row['PhoneNumber']        .'</td>';
                echo '</tr>';
    }
?>
    </tbody>
  </table>
</div>
<div class="center">
  <h1>ADD USER</h1>
  <form method="post" action="">
    <div class="txt_field">
      <input type="text" required>
      <span></span>
      <label for="">Full Name</label>
    </div>
    <div class="txt_field">
      <input type="text" required>
      <span></span>
      <label for="">Username</label>
    </div>
    <div class="txt_field">
      <input type="email" required>
      <span></span>
      <label for="">Email</label>
    </div>
    <div class="txt_field">
      <input type="password" required>
      <span></span>
      <label for="">Password</label>
    </div>
    <div class="txt_field">
      <input type="tel" required>
      <span></span>
      <label for="">Phone Number</label>
    </div>
    <input type="submit" value="ADD">

  </form>
</div>

      
    </div>
    
    
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

<script type="text/javascript">
  var $table = $('#fresh-table')
  var $alertBtn = $('#alertBtn')

  window.operateEvents = {
    'click .like': function (e, value, row, index) {
      alert('You click like icon, row: ' + JSON.stringify(row))
      console.log(value, row, index)
    },
    'click .edit': function (e, value, row, index) {
      alert('You click edit icon, row: ' + JSON.stringify(row))
      console.log(value, row, index)
    },
    'click .remove': function (e, value, row, index) {
      $table.bootstrapTable('remove', {
        field: 'id',
        values: [row.id]
      })
    }
  }

  function operateFormatter(value, row, index) {
    return [
      '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
        '<i class="fa fa-heart"></i>',
      '</a>',
      '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
        '<i class="fa fa-edit"></i>',
      '</a>',
      '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
        '<i class="fa fa-remove"></i>',
      '</a>'
    ].join('')
  }

  $(function () {
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

      formatShowingRows: function (pageFrom, pageTo, totalRows) {
        return ''
      },
      formatRecordsPerPage: function (pageNumber) {
        return pageNumber + ' rows visible'
      }
    })

    $alertBtn.click(function () {
      alert('You pressed on Alert')
    })
  })

</script>



   <!---   <script src="../../assets/js/reactTbable.js"></script>-->
            <script src="../../assets/js/navbar.js"></script>
            <script src="../../assets/js/reactTbable.js"></script>

            
            
            

   
</body>
</html>