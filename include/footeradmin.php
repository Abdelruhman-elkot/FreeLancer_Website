<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!-- <script src="validation.js"></script> -->


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

  <script src="<?php echo APPURL ?>/assets/js/navbar.js"></script>
  <script src="<?php echo APPURL ?>/assets/js/reactTbable.js"></script>
</body>
</html>