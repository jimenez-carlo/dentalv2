<?php include 'header.php'; ?>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-12 d-flex no-block align-items-center">

        <h4 class="page-title">Manage Clinic Services</h4>
        <div class="ms-auto text-end">
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-4">
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Add Services
        </button>
      </div>
      <br>
      <br>
      <div class="card">
        <div class="card-body">
          <?= (isset($_POST['addservice'])) ? addService($_POST) : ''; ?>
          <div class="table-responsive">
            <table id="table_eto" class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Service Name</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th style="width: 0.1%;">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $cid = $_SESSION['user']->clinic_id ?>
                <?php foreach (get_list("SELECT s.id,s.srvc_name,s.srvc_desc,s.srvc_price from tbl_clinic u inner join tbl_service s on s.clinic_id = u.clinic_id where s.clinic_id=$cid") as $res) { ?>
                  <tr>
                    <td><?= $res['id'] ?></td>
                    <td><?= $res['srvc_name'] ?></td>
                    <td><?= $res['srvc_desc'] ?></td>
                    <td><?= $res['srvc_price'] ?></td>
                    <td style="width: 0.1%;display:flex">
                      <button class="btn btn-success me-1" type="button">Edit </button>
                      <button class="btn btn-danger" type="button">Delete </button>
                    </td>
                  </tr>
                <?php } ?>

              </tbody>

            </table>
          </div>

        </div>
      </div>



      <!-- MODAL STARTS HERE -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form class="form-horizontal" method="post" onsubmit="return confirm('Are you sure?');" enctype="multipart/form-data">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Adding Dental Clinic Services</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="card-body">

                  <h4 class="card-title">Service Information Entry</h4>
                  <br><br>
                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Enter Service</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="fname" name="srvc_name" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Description</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="fname" name="srvc_desc" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Price</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" id="fname" name="srvc_price" required>
                    </div>
                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info" name="addservice">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>



    </div>

    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Page wrapper  -->
  <!-- ============================================================== -->
</div>
<?php include 'footer.php'; ?>
<script>
  $('#table_eto').DataTable();
</script>