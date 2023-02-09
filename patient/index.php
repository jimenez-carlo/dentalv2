<?php include 'header.php'; ?>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
  <style>
    .img-height {
      height: 400px;
      object-fit: contain;
    }
  </style>
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
    <div class="row">
      <?php $id = $_SESSION['user']->id ?>
      <?php $default = get_one("select u.id,ui.first_name,ui.municipality,ui.barangay,ui.email,ui.contact,u.username,u.password from tbl_user u inner join tbl_userinfo ui on ui.id = u.id where u.id = '$id'") ?>
      <!-- <h4 class="page-title">Welcome </h4> -->
      <?php
      if (isset($_SESSION['user'])) {
        if ($_SESSION['user']->access_id == 5) {
          echo "
                <h4 class='page-title'>Welcome $default->first_name</h4>
                ";
        }
      }
      ?>
      <div class="ms-auto text-end">
        <div id='calendar'></div>
      </div>

    </div>

  </div>
  <footer class="footer text-center">
  </footer>
  <!-- ============================================================== -->
  <!-- End footer -->
  <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<?php include 'footer.php'; ?>