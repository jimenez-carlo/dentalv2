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

      <h4 class='page-title'>Welcome <?= $default->first_name ?></h4>



      <div class="ms-auto text-end my-5">
        <div class="row">

          <div class="col-md-6">
            <div class="card">
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="bg-dark p-10 text-white text-center">
                    <i class="mdi mdi-account fs-3 mb-1 font-16"></i>
                    <h5 class="mb-0 mt-1"><?= get_one("SELECT count(clinic_id) as `result` from tbl_clinic")->result ?? 0 ?></h5>
                    <small class="font-light">Total Clinic</small>
                  </div>
                </div>
              </form>
            </div>
          </div>


          <div class="col-md-6">
            <div class="card">
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="bg-dark p-10 text-white text-center">
                    <i class="mdi mdi-account fs-3 mb-1 font-16"></i>
                    <h5 class="mb-0 mt-1"><?= get_one("SELECT count(id) as `result` from tbl_member")->result ?? 0 ?></h5>
                    <small class="font-light">Total Member</small>
                  </div>
                </div>
              </form>
            </div>
          </div>


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

<?php include 'footer.php'; ?>