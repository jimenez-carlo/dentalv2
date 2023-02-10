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
        <h4 class="page-title">Association Members</h4>
        <div class="ms-auto text-end">
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <?= (isset($_POST['import'])) ? importMembers(array_merge($_POST, $_FILES)) : ''; ?>
    <?= (isset($_POST['delete'])) ? deleteMember($_POST['delete']) : ''; ?>
    <?= (isset($_POST['approve'])) ? approveMember($_POST['approve']) : ''; ?>
    <div class="row">
      <div class="col-4">
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Import CSV/Excel
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
                  <th>PRC No</th>
                  <th>Full Name</th>
                  <th>QR</th>
                  <th>Municipality</th>
                  <th>Barangay</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $ctr = 1; ?>
                <?php foreach (get_list("SELECT c.name as `city`,b.name as `barangay`,s.name as `status`,m.* from tbl_member m left join tbl_barangay b on b.id = m.barangay_id left join tbl_city c on c.id = m.city_id inner join tbl_appointment_status s on s.id = m.paid_status_id ") as $res) { ?>
                  <tr>
                    <td><?= $res['prc_no'] ?></td>
                    <td><?= $res['first_name'] ?> <?= $res['last_name'] ?></td>
                    <td><img src="../images/members/<?= $res['qr'] ?>" alt="" width="30px" height="30px"></td>
                    <td><?= $res['city'] ?></td>
                    <td><?= $res['barangay'] ?></td>
                    <td><?= $res['status'] ?></td>
                    <td style="width: 0.1%;display:flex">
                      <a href="edit_member.php?id=<?= $res['id'] ?>" class="btn btn-info me-1" type="button">View </a>
                      <form method="post" onsubmit="return confirm('Are you sure?');" style="margin-right:4px">
                        <button class="btn btn-info" type="submit" name="approve" value="<?= $res['id'] ?>" <?= ($res['paid_status_id'] == 1) ? '' : 'disabled' ?>>Approve </button>
                      </form>
                      <form method="post" onsubmit="return confirm('Are you sure?');">
                        <button class="btn btn-danger" type="submit" name="delete" value="<?= $res['id'] ?>">Delete </button>
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
                <h5 class="modal-title" id="staticBackdropLabel">Import CSV</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="card-body">

                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">File(csv/excel)</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" name="file" required>
                    </div>
                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info" name="import">Submit</button>
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