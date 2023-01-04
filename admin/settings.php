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
        <h4 class="page-title">Settings</h4>
        <div class="ms-auto text-end">
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <?= (isset($_POST['settings'])) ? editSettings(array_merge($_POST, $_FILES)) : ''; ?>
    <div class="row">
      <div class="card">
        <div class="card-body">
          <form class="form-horizontal" method="post" onsubmit="return confirm('Are you sure?');" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="card-body">
                <?php $default = get_one("select * from tbl_settings where id = 1") ?>
                <div class="form-group row">
                  <label for="fname" class="col-sm-1 control-label col-form-label">Requirements</label>
                  <div class="col-sm-11">
                    <textarea style="height: 300px;" name="requirements" class="form-control">
                      <?php echo htmlentities($default->requirements) ?>
                    </textarea>
                  </div>
                </div>

              </div>

            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-info" name="settings">Update</button>
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
  // var quill = new Quill('#requirements', {
  //   theme: 'snow'
  // });
</script>