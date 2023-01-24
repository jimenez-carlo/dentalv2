<?php  include 'header.php'; ?>
<!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <style>
  .img-height {
    height: 400px;
    object-fit: contain;
  }
</style>
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="page-breadcrumb">
      <?php $id=$_SESSION['user']->id ?>
      <?php $default = get_one("select u.id,c.clinic_id,c.image,c.name,ui.first_name,ui.municipality,ui.barangay,c.description,ui.email,ui.contact,u.username,u.password from tbl_user u inner join tbl_clinic c on c.clinic_id = u.clinic_id inner join tbl_userinfo ui on ui.id = u.id where u.id = '$id'") ?>

        <div class="row">
            <!-- <h4 class="page-title">Welcome </h4> -->
            <?php
            if (isset($_SESSION['user'])) {
              if ($_SESSION['user']->access_id == 2) {
                echo "
                <h4 class='page-title'>Welcome $default->name</h4>
                ";
              } else if ($_SESSION['user']->access_id == 3) {
                echo "
                <h4 class='page-title'>Welcome $default->first_name</h4>
                ";
              } else if ($_SESSION['user']->access_id == 4) {
                echo "
                <h4 class='page-title'>Welcome $default->first_name</h4>
                ";
              }
            }
            ?>
            <br><br>
            <div class="ms-auto text-end">
              
          </div>
        </div>
        <div class="row">
      <div class="col-md-6">
        <div class="card">
          <img src="../images/d1.jpg" alt="" class="img-height">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <img src="../images/d2.jpg" alt="" class="img-height">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <img src="../images/d3.jpg" alt="" class="img-height">
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <img src="../images/d4.jpg" alt="" class="img-height">
        </div>
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
<?php  include 'footer.php'; ?>