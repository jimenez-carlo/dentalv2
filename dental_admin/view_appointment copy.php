<?php include 'header.php'; ?>
<style>
  input {
    text-transform: uppercase;
  }
</style>
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
      <div class="col-12 d-flex no-block align-items-center" style="margin-bottom: 6px;">
        <h4 class="page-title">Viewing Appointment #<?= $_GET['id'] ?></h4>

        <div class="ms-auto text-end">

          <a href="appointments.php" class="btn btn-info col-12" type="button" style="margin-right: 4px;">Back To Appointment List</a>

        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <?= (isset($_POST['accept'])) ? accept_appointment($_POST['accept']) : ''; ?>
    <?= (isset($_POST['reject'])) ? reject_appointment($_POST['reject']) : ''; ?>
    <?= (isset($_POST['paid'])) ? paid_appointment($_POST['paid']) : ''; ?>
    <?php $id = $_GET['id']  ?>
    <?php $clinic_details = get_clinic(get_one("SELECT clinic_id from tbl_appointment where id = $id")->clinic_id); ?>
    <?php $appointment_details = get_one("SELECT DATE_FORMAT(appointment_date,'%m-%d-%Y') as appointment_date, remarks,status_id,paid_id,id,patient_id from tbl_appointment where id = $id"); ?>
    <?php $patient_details = get_patient((int)$appointment_details->patient_id); ?>
    <?php $clinic_details = get_clinic(get_one("SELECT clinic_id from tbl_appointment where id = $id")->clinic_id); ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">


                <form method="post">
                  <div class="table-responsive">
                    <table id="table_eto" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Service</th>
                          <th style="width: 0.1%;">Qty</th>
                          <th>Price</th>
                        </tr>
                      </thead>
                      <?php $tmp = 0 ?>

                      <tbody>

                        <?php foreach (get_list("SELECT i.*,s.srvc_name from tbl_appointment_items i inner join tbl_service s on s.id = i.service_id where i.appointment_id = $id") as $key => $res) { ?>
                          <tr>
                            <td><?= $res['srvc_name'] ?></td>
                            <td><?= $res['qty'] ?></td>
                            <td style="text-align:right"><?= number_format($res['price'] * $res['qty'], 2) ?></td>
                          </tr>
                          <?php $tmp += ($res['price'] * $res['qty']); ?>
                        <?php } ?>

                        <tr>
                          <td style="font-weight:bold" colspan="2">TOTAL</td>
                          <td style="text-align:right;font-weight:bold"><?= number_format($tmp, 2) ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>


              <div class="col-md-6">
                <form method="post" onsubmit="return confirm('Are you sure?');">
                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Clinic:</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" class="form-control" disabled value="<?= isset($clinic_details->name) ? $clinic_details->name : '' ?>" />
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Dentist:</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <select id="" class="form-control" name="dentist_id" disabled>
                          <?php if (isset($clinic_details)) { ?>
                            <?php foreach (get_list("select u.id,ui.first_name,ui.last_name from tbl_user u inner join tbl_userinfo ui on ui.id = u.id where u.access_id = 3 and u.clinic_id = " . $clinic_details->clinic_id) as $res) { ?>
                              <option value="<?= $res['id'] ?>" <?= ($clinic_details->dentist_id ?? 0) == $res['id'] ? 'selected' : ''  ?>><?= strtoupper($res['first_name'] . ' - ' . $res['last_name']) ?></option>
                            <?php } ?>
                        </select>
                      <?php } ?>
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Status:</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" class="form-control" disabled value="<?= get_appointment_status($appointment_details->status_id) ?>" />
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">PAID/UNDPAID:</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" class="form-control" disabled value="<?= get_paid_status($appointment_details->paid_id) ?>" />
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Appointment Date:</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" name="appointment_date" disabled class="form-control mydatepicker" placeholder="mm-dd-yyyy" value="<?= isset($appointment_details->appointment_date) ? $appointment_details->appointment_date : '' ?>" required />
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Remarks:</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <textarea name="remarks" class="form-control" disabled><?= isset($appointment_details->remarks) ? $appointment_details->remarks : '' ?></textarea>
                      </div>
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Name (Patient):</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" class="form-control" disabled value="<?= strtoupper($patient_details->first_name . " " . $patient_details->last_name) ?>" />
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Contact (Patient):</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" class="form-control" disabled value="<?= $patient_details->contact ?>" />
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Email (Patient):</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" class="form-control" disabled value="<?= $patient_details->email ?>" />
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Municipality (Patient):</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" class="form-control" disabled value="<?= get_municipality($patient_details->municipality) ?>" />
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Barangay (Patient):</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" class="form-control" disabled value="<?= get_barangay($patient_details->barangay) ?>" />
                      </div>
                    </div>
                  </div>



                  <div class="text-center">
                    <button class="btn btn-info" style="width:30%" type="submit" name="accept" value="<?= $appointment_details->id ?>" <?= ($appointment_details->status_id > 1) ? 'disabled' : '' ?>> ACCEPT</button>
                    <button class="btn btn-info" style="width:30%" type="submit" name="paid" value="<?= $appointment_details->id ?>" <?= ($appointment_details->paid_id > 1) ? 'disabled' : '' ?>> PAID</button>
                    <button class="btn btn-info" style="width:30%" type="submit" name="reject" value="<?= $appointment_details->id ?>" <?= ($appointment_details->status_id > 1) ? 'disabled' : '' ?>> REJECT</button>
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


  <?php include 'footer.php'; ?>