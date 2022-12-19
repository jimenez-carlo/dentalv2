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
        <h4 class="page-title">Editing Clinic Staff | ID - <?= $_GET['id'] ?></h4>
        <div class="ms-auto text-end">
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <?= (isset($_POST['editstaff'])) ? editStaff($_POST) : ''; ?>
    <div class="row">
      <div class="card">
        <div class="card-body">
          <form class="form-horizontal" method="post" onsubmit="return confirm('Are you sure?');" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="card-body">
                <?php $id = $_GET['id']; ?>
                <?php $default = get_one("select u.id,c.clinic_id,ui.first_name,ui.last_name,ui.email,ui.contact,u.username,u.password from tbl_user u inner join tbl_clinic c on c.clinic_id = u.clinic_id inner join tbl_userinfo ui on ui.id = u.id where u.id = '$id'") ?>
                <input type="hidden" name="id" value="<?= $default->id ?>">
                <input type="hidden" name="clinic_id" value="<?= $default->clinic_id ?>">
                <div class="form-group row">
                        <label class="col-sm-3 text-end control-label col-form-label">User Type</label>
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
                          <input type="text" class="form-control" id="fname" name="first_name" required value="<?= $default->first_name ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Last Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="fname" name="last_name" required value="<?= $default->last_name ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Username</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="fname" name="username" required value="<?= $default->username ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="fname" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="validate" required value="<?= $default->password ?>"><span>Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">E-mail</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="fname" name="email" required value="<?= $default->email ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Contact No.</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" id="fname" name="contact" required value="<?= $default->contact ?>">
                        </div>
                      </div>
              </div>

            </div>
            <div class="modal-footer">
              <a href="staffs.php" type="button" class="btn btn-secondary">Back to List</a>
              <button type="submit" class="btn btn-info" name="editstaff">Update</button>
            </div>
          </form>

        </div>
      </div>

      <!-- Button trigger modal -->





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
  $(document).on("change", "#municipality", function() {
    let value = $(this).val();
    $.get("../dropdown.php?city=" + value, function(result) {
      $("#barangay").html(result);
    });
  });
</script>