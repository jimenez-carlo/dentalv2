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
        <h4 class="page-title">Dental Clinic Accounts</h4>
        <div class="ms-auto text-end">
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <?= (isset($_POST['register'])) ? registerClinic(array_merge($_POST, $_FILES)) : ''; ?>
    <?= (isset($_POST['delete'])) ? deleteClinic($_POST['delete']) : ''; ?>
    <div class="row">
      <div class="col-4">
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Create Clinic
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
                  <th>Logo</th>
                  <th>Clinic Name</th>
                  <th>Municipality</th>
                  <th>Barangay</th>
                  <th>Email</th>
                  <th>Contact no#</th>
                  <th style="width: 0.1%;">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $ctr = 1; ?>
                <?php foreach (get_list("SELECT c.`image`,c.name as `clinic_name`,m.name as `municipality`,b.name as `barangay`,ui.email,ui.contact,u.id,u.clinic_id from tbl_user u inner join tbl_userinfo ui on ui.id = u.id inner join tbl_clinic c on c.clinic_id = u.clinic_id inner join tbl_city m on m.id = ui.municipality inner join tbl_barangay b on b.id = ui.barangay where u.access_id = 2") as $res) { ?>
                  <tr>
                    <td><?= $res['clinic_id'] ?></td>
                    <td><img src="../images/clinic/<?= $res['image'] ?>" alt="" width="30px" height="30px"></td>
                    <td><?= $res['clinic_name'] ?></td>
                    <td><?= $res['municipality'] ?></td>
                    <td><?= $res['barangay'] ?></td>
                    <td><?= $res['email'] ?></td>
                    <td><?= $res['contact'] ?></td>
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


      </div>
      <!-- Button trigger modal -->


      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form class="form-horizontal" method="post" onsubmit="return confirm('Are you sure?');" enctype="multipart/form-data">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create Dental Clinic</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="card-body">

                  <h4 class="card-title">Clinic Information Entry</h4>
                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Clinic Name*</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="fname" name="clinic_name" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">City/Municipality*</label>
                    <div class="col-sm-9">
                      <select name="municipality" id="municipality" class="form-control">
                        <?php foreach (get_list("SELECT * from tbl_city") as $res) { ?>
                          <option value="<?= $res['id'] ?>"><?= $res['name'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Barangay*</label>
                    <div class="col-sm-9">
                      <select name="barangay" id="barangay" class="form-control">
                        <?php foreach (get_list("SELECT * from tbl_barangay where city_id = '015501'") as $res) { ?>
                          <option value="<?= $res['id'] ?>"><?= $res['name'] ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Username*</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="fname" name="username" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Password*</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="fname" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="validate" required><span>Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">E-mail*</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="fname" name="email" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Contact No.*</label>
                    <div class="col-sm-9">
                      <input type="number" pattern="" class="form-control" id="fname" name="contact" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Clinic Logo*</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" name="image_koto" required accept=".jpg,.jpeg,.png">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Description*</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" name="description" required></textarea>
                    </div>
                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info" name="register">Submit</button>
              </div>
            </form>
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
  $(document).on("change", "#municipality", function() {
    let value = $(this).val();
    $.get("../dropdown.php?city=" + value, function(result) {
      $("#barangay").html(result);
    });
  });


  $('#table_eto').DataTable();
</script>