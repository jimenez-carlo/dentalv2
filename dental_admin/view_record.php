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
        <h4 class="page-title">Viewing Dental Record #<?= $_GET['id'] ?></h4>

        <div class="ms-auto text-end">

          <a href="view_appointment.php?id=<?= $_GET['id'] ?>" class="btn btn-info col-12" type="button" style="margin-right: 4px;">Back To Appointment List</a>

        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <?= (isset($_POST['accept'])) ? accept_appointment($_POST['accept']) : ''; ?>
    <?= (isset($_POST['reject'])) ? reject_appointment($_POST) : ''; ?>
    <?= (isset($_POST['paid'])) ? paid_appointment($_POST['paid']) : ''; ?>
    <?= (isset($_POST['upload'])) ? uplaod_teethv(array_merge($_POST, $_FILES)) : ''; ?>
    <?php $id = $_GET['id']  ?>
    <?php $clinic_details = get_one("SELECT * from tbl_dental_record where appointment_id = $id"); ?>

    <style>
      .teeth>td>td {
        width: 20px !important;
        display: inline-block;
      }

      .vl {
        border-left: 5px solid black;
        height: 36%;
        position: absolute;
        left: 50%;
        margin-left: -3px;
        top: 6%;
      }

      .hl {
        border-bottom: 5px solid black;
        height: 18%;
        width: 22%;
        position: absolute;
        left: 39%;
        /* margin-left: -3px; */
        top: 6.5%;
      }
    </style>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h5 class="page-title">Dental Record</h5>
            <div class="row">
              <center>
                <div class="ct">
                  <div class="hl"></div>
                  <div class="vl"></div>
                  <table class="teeth">
                    <tr>
                      <td><input type="text" name="status_55" style="width:20px"></td>
                      <td><input type="text" name="status_54" style="width:20px"></td>
                      <td><input type="text" name="status_53" style="width:20px"></td>
                      <td><input type="text" name="status_52" style="width:20px"></td>
                      <td><input type="text" name="status_51" style="width:20px"></td>
                      <td><input type="text" name="status_61" style="width:20px"></td>
                      <td><input type="text" name="status_62" style="width:20px"></td>
                      <td><input type="text" name="status_63" style="width:20px"></td>
                      <td><input type="text" name="status_64" style="width:20px"></td>
                      <td><input type="text" name="status_65" style="width:20px"></td>
                    </tr>
                    <tr>
                      <td><input type="text" name="right_55" style="width:20px"></td>
                      <td><input type="text" name="right_54" style="width:20px"></td>
                      <td><input type="text" name="right_53" style="width:20px"></td>
                      <td><input type="text" name="right_52" style="width:20px"></td>
                      <td><input type="text" name="right_51" style="width:20px"></td>
                      <td><input type="text" name="left_61" style="width:20px"></td>
                      <td><input type="text" name="left_62" style="width:20px"></td>
                      <td><input type="text" name="left_63" style="width:20px"></td>
                      <td><input type="text" name="left_64" style="width:20px"></td>
                      <td><input type="text" name="left_65" style="width:20px"></td>
                    </tr>
                    <tr>
                      <td>55</td>
                      <td>54</td>
                      <td>53</td>
                      <td>52</td>
                      <td>51</td>
                      <td>61</td>
                      <td>62</td>
                      <td>63</td>
                      <td>64</td>
                      <td>65</td>
                    </tr>
                  </table>
                  <table class="teeth">
                    <tr>
                      <td><input type="text" name="status_18" style="width:20px"></td>
                      <td><input type="text" name="status_17" style="width:20px"></td>
                      <td><input type="text" name="status_16" style="width:20px"></td>
                      <td><input type="text" name="status_15" style="width:20px"></td>
                      <td><input type="text" name="status_14" style="width:20px"></td>
                      <td><input type="text" name="status_13" style="width:20px"></td>
                      <td><input type="text" name="status_12" style="width:20px"></td>
                      <td><input type="text" name="status_11" style="width:20px"></td>
                      <td><input type="text" name="status_21" style="width:20px"></td>
                      <td><input type="text" name="status_22" style="width:20px"></td>
                      <td><input type="text" name="status_23" style="width:20px"></td>
                      <td><input type="text" name="status_24" style="width:20px"></td>
                      <td><input type="text" name="status_25" style="width:20px"></td>
                      <td><input type="text" name="status_26" style="width:20px"></td>
                      <td><input type="text" name="status_27" style="width:20px"></td>
                      <td><input type="text" name="status_28" style="width:20px"></td>
                    </tr>
                    <tr>
                      <td><input type="text" name="left_18" style="width:20px"></td>
                      <td><input type="text" name="left_17" style="width:20px"></td>
                      <td><input type="text" name="left_16" style="width:20px"></td>
                      <td><input type="text" name="left_15" style="width:20px"></td>
                      <td><input type="text" name="left_14" style="width:20px"></td>
                      <td><input type="text" name="left_13" style="width:20px"></td>
                      <td><input type="text" name="left_12" style="width:20px"></td>
                      <td><input type="text" name="left_11" style="width:20px"></td>
                      <td><input type="text" name="right_21" style="width:20px"></td>
                      <td><input type="text" name="right_22" style="width:20px"></td>
                      <td><input type="text" name="right_23" style="width:20px"></td>
                      <td><input type="text" name="right_24" style="width:20px"></td>
                      <td><input type="text" name="right_25" style="width:20px"></td>
                      <td><input type="text" name="right_26" style="width:20px"></td>
                      <td><input type="text" name="right_27" style="width:20px"></td>
                      <td><input type="text" name="right_28" style="width:20px"></td>
                    </tr>
                    <tr>
                      <td>18</td>
                      <td>17</td>
                      <td>16</td>
                      <td>15</td>
                      <td>14</td>
                      <td>13</td>
                      <td>12</td>
                      <td>11</td>
                      <td>21</td>
                      <td>22</td>
                      <td>23</td>
                      <td>24</td>
                      <td>25</td>
                      <td>26</td>
                      <td>27</td>
                      <td>28</td>
                    </tr>
                  </table>
                  <table class="teeth">
                    <tr>
                      <td>48</td>
                      <td>47</td>
                      <td>46</td>
                      <td>45</td>
                      <td>44</td>
                      <td>43</td>
                      <td>42</td>
                      <td>41</td>
                      <td>31</td>
                      <td>32</td>
                      <td>33</td>
                      <td>34</td>
                      <td>35</td>
                      <td>36</td>
                      <td>37</td>
                      <td>38</td>
                    </tr>
                    <tr>
                      <td><input type="text" name="status_48" style="width:20px"></td>
                      <td><input type="text" name="status_47" style="width:20px"></td>
                      <td><input type="text" name="status_46" style="width:20px"></td>
                      <td><input type="text" name="status_45" style="width:20px"></td>
                      <td><input type="text" name="status_44" style="width:20px"></td>
                      <td><input type="text" name="status_43" style="width:20px"></td>
                      <td><input type="text" name="status_42" style="width:20px"></td>
                      <td><input type="text" name="status_41" style="width:20px"></td>
                      <td><input type="text" name="status_31" style="width:20px"></td>
                      <td><input type="text" name="status_32" style="width:20px"></td>
                      <td><input type="text" name="status_33" style="width:20px"></td>
                      <td><input type="text" name="status_34" style="width:20px"></td>
                      <td><input type="text" name="status_35" style="width:20px"></td>
                      <td><input type="text" name="status_36" style="width:20px"></td>
                      <td><input type="text" name="status_37" style="width:20px"></td>
                      <td><input type="text" name="status_38" style="width:20px"></td>
                    </tr>
                    <tr>
                      <td><input type="text" name="left_48" style="width:20px"></td>
                      <td><input type="text" name="left_47" style="width:20px"></td>
                      <td><input type="text" name="left_46" style="width:20px"></td>
                      <td><input type="text" name="left_45" style="width:20px"></td>
                      <td><input type="text" name="left_44" style="width:20px"></td>
                      <td><input type="text" name="left_43" style="width:20px"></td>
                      <td><input type="text" name="left_42" style="width:20px"></td>
                      <td><input type="text" name="left_41" style="width:20px"></td>
                      <td><input type="text" name="right_31" style="width:20px"></td>
                      <td><input type="text" name="right_32" style="width:20px"></td>
                      <td><input type="text" name="right_33" style="width:20px"></td>
                      <td><input type="text" name="right_34" style="width:20px"></td>
                      <td><input type="text" name="right_35" style="width:20px"></td>
                      <td><input type="text" name="right_36" style="width:20px"></td>
                      <td><input type="text" name="right_37" style="width:20px"></td>
                      <td><input type="text" name="right_38" style="width:20px"></td>
                    </tr>
                  </table>
                  <table class="teeth">
                    <tr>
                      <td>85</td>
                      <td>84</td>
                      <td>83</td>
                      <td>82</td>
                      <td>81</td>
                      <td>71</td>
                      <td>72</td>
                      <td>73</td>
                      <td>74</td>
                      <td>75</td>
                    </tr>
                    <tr>
                      <td><input type="text" name="status_85" style="width:20px"></td>
                      <td><input type="text" name="status_84" style="width:20px"></td>
                      <td><input type="text" name="status_83" style="width:20px"></td>
                      <td><input type="text" name="status_82" style="width:20px"></td>
                      <td><input type="text" name="status_81" style="width:20px"></td>
                      <td><input type="text" name="status_71" style="width:20px"></td>
                      <td><input type="text" name="status_72" style="width:20px"></td>
                      <td><input type="text" name="status_73" style="width:20px"></td>
                      <td><input type="text" name="status_74" style="width:20px"></td>
                      <td><input type="text" name="status_75" style="width:20px"></td>
                    </tr>
                    <tr>
                      <td><input type="text" name="right_55" style="width:20px"></td>
                      <td><input type="text" name="right_54" style="width:20px"></td>
                      <td><input type="text" name="right_53" style="width:20px"></td>
                      <td><input type="text" name="right_52" style="width:20px"></td>
                      <td><input type="text" name="right_51" style="width:20px"></td>
                      <td><input type="text" name="left_61" style="width:20px"></td>
                      <td><input type="text" name="left_62" style="width:20px"></td>
                      <td><input type="text" name="left_63" style="width:20px"></td>
                      <td><input type="text" name="left_64" style="width:20px"></td>
                      <td><input type="text" name="left_65" style="width:20px"></td>
                    </tr>
                  </table>
                </div>

                <br>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <td>Condition</td>
                      <td>Restoration & Prosthethics</td>
                      <td>Surgery</td>
                    <tr>
                  </thead>
                  </tr>
                  <td><b>D</b> - Decayed (Caries indicated for Filling)</td>
                  <td><b>J</b> - Jacked Crown </td>
                  <td><b>X</b> - Extraction due to Caries</td>
                  </tr>
                  <tr>
                    <td><b>M</b> - Missing due to Caries </td>
                    <td><b>A</b> - Amalgam Filling</td>
                    <td><b>XO</b> - Extraction due to Other Causes </td>
                  </tr>
                  <tr>
                    <td><b>F</b> - Filled</td>
                    <td><b>AB</b> - Abutment </td>
                    <td><b>C</b> - Present Teeth</td>
                  </tr>
                  <tr>
                    <td><b>I</b> - Caries Indicated for Extraction</td>
                    <td><b>P</b> - Pontic </td>
                    <td><b>Cm</b> - Congenitally Missing</td>
                  </tr>
                  <tr>
                    <td><b>RF</b> - Roof Fragment</td>
                    <td><b>In</b> - Inlay</td>
                    <td><b>Sp</b> - Supermumerary</td>
                  </tr>
                  <tr>
                    <td><b>MO</b> - Missing due to Other Causes</td>
                    <td><b>Fx</b> - Fixed Cure Composite</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><b>Im</b> - Impacted Tooth</td>
                    <td><b>S</b> - Sealants</td>
                    <td></td>
                  </tr>
                </table>
                <div class="col-md-12">
                  <form method="post" onsubmit="return confirm('Are you sure?');" enctype="multipart/form-data">

                    <input type="hidden" value="<?= $appointment_details->id ?>" name="id">

                    <!-- <div class=" text-center">
                      <button class="btn btn-info" style="width:10%" type="submit" name="upload"> UPLOAD</button>
                      <a href="view_receipt.php?id=<?= $appointment_details->id ?>" class="btn btn-secondary" style="width:20%">View Receipt</a>
                      <a href="view_receipt.php?id=<?= $appointment_details->id ?>" class="btn btn-secondary" style="width:20%">View Record</a>
                    </div> -->
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

  <script>
    jQuery(".mydatepicker").datepicker({
      format: 'mm-dd-yyyy',
      startDate: '+1d'
    });
  </script>