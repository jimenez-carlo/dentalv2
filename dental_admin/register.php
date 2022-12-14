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

        <h4 class="page-title">Manage Dental Clinic Staffs</h4>
        <div class="ms-auto text-end">
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-4">
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Create Staff
        </button>
      </div>
      <br>
      <br>
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <table id="table_eto" class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>User Type</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Contact no#</th>
                  <th style="width: 0.1%;">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $cid = $_SESSION['user']->clinic_id ?>
                <?php $aid = $_SESSION['user']->access_id ?>
                <?php foreach (get_list("SELECT a.name as `usertype`,ui.email,ui.contact,u.id,ui.first_name,ui.last_name,u.clinic_id from tbl_user u inner join tbl_userinfo ui on ui.id = u.id inner join tbl_access a on u.access_id = a.id where u.clinic_id=$cid and not u.access_id =$aid") as $res) { ?>
                  <tr>
                    <td><?= $res['clinic_id'] ?></td>
                    <td><?= $res['usertype'] ?></td>
                    <td><?= $res['first_name'] ?></td>
                    <td><?= $res['last_name'] ?></td>
                    <td><?= $res['email'] ?></td>
                    <td style="width: 0.1%;display:flex">
                      <a href="edit.php?id=<?= $res['id'] ?>" class="btn btn-success me-1" type="button">Edit </a>
                      <form method="post" onsubmit="return confirm('Are you sure?');">
                        <button class="btn btn-danger" type="submit" name="delete" value="<?= $res['clinic_id'] ?>">Delete </button>
                      </form>
                    </td>
                  </tr>
                <?php } ?>

              </tbody>

            </table>
          </div>

        </div>
      </div>




      <div class="col-md-12">
        <div class="card">
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <form class="form-horizontal" method="post" onsubmit="return confirm('Are you sure?');" enctype="multipart/form-data">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Create Dental Clinic Staff</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="card-body">
                      <h4 class="card-title">Staff Information Entry</h4>
                      <div class="form-group row">
                        <label class="col-sm-3 text-end control-label col-form-label  ">User Type</label>
                        <div class="col-md-9" data-select2-id="11">
                          <select name="access_id" class="form-select shadow-none">
                            <option value="3">Dentist</option>
                            <option value="4">Dental Clerk</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">First Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="fname" name="first_name" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Last Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="fname" name="last_name" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Username</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="fname" name="username" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="fname" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="validate" required><span>Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">E-mail</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="fname" name="email" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Contact No.</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" id="fname" name="contact" required>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info" name="registerstaff">Submit</button>
                  </div>
                </form>
              </div>
            </div>
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