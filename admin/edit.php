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
        <h4 class="page-title">Editing Clinic | ID - <?= $_GET['id'] ?></h4>
        <div class="ms-auto text-end">
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <?= (isset($_POST['edit'])) ? editClinic(array_merge($_POST, $_FILES)) : ''; ?>
    <div class="row">
      <div class="card">
        <div class="card-body">
          <form class="form-horizontal" method="post" onsubmit="return confirm('Are you sure?');" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="card-body">
                <?php $id = $_GET['id']; ?>
                <?php $default = get_one("select u.id,c.clinic_id,c.image,c.name,ui.municipality,ui.barangay,c.description,ui.email,ui.contact,u.username,u.password from tbl_user u inner join tbl_clinic c on c.clinic_id = u.clinic_id inner join tbl_userinfo ui on ui.id = u.id where u.id = '$id'") ?>
                <input type="hidden" name="id" value="<?= $default->id ?>">
                <input type="hidden" name="clinic_id" value="<?= $default->clinic_id ?>">
                <div class="form-group row">
                  <label for="fname" class="col-sm-3 text-end control-label col-form-label">Clinic Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="fname" name="clinic_name" required value="<?= $default->name ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="fname" class="col-sm-3 text-end control-label col-form-label">City/Municipality</label>
                  <div class="col-sm-9">
                    <select name="municipality" id="municipality" class="form-control">
                      <?php foreach (get_list("SELECT * from tbl_city") as $res) { ?>
                        <option value="<?= $res['id'] ?>" <?= ($default->municipality == $res['id']) ? 'selected' : ''  ?>><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="fname" class="col-sm-3 text-end control-label col-form-label">Barangay</label>
                  <div class="col-sm-9">
                    <select name="barangay" id="barangay" class="form-control">
                      <?php foreach (get_list("SELECT * from tbl_barangay where city_id = '$default->municipality'") as $res) { ?>
                        <option value="<?= $res['id'] ?>" <?= ($default->barangay == $res['id']) ? 'selected' : ''  ?>><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
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
                    <input type="number" pattern="" class="form-control" id="fname" name="contact" required value="<?= $default->contact ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="fname" class="col-sm-3 text-end control-label col-form-label">Clinic Logo</label>
                  <div class="col-sm-9">
                    <input type="file" class="form-control" name="image_koto" accept=".jpeg,.png">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="fname" class="col-sm-3 text-end control-label col-form-label">Description</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" name="description" required><?= $default->description ?></textarea>
                  </div>
                </div>
              </div>

            </div>
            <div class="modal-footer">
              <a href="clinics.php" type="button" class="btn btn-secondary">Back to List</a>
              <button type="submit" class="btn btn-info" name="edit">Update</button>
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