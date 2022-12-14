  <!-- Modal login -->
  <div class="modal fade" id="login_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Login</h5>
        </div>
        <form method="post" action="index.php?show_modal">
          <div class="modal-body">
            <?php if (isset($_POST['login'])) loginUser($_POST); ?>
            <div id="login_result"></div>
            <div class="bs-example bs-example-form">
              <div class="form-group input-group" id="username">
                <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-user"></i> Username</span>
                <input type="text" class="form-control" placeholder="Username" name="username" required>
              </div>
              <div class="form-group input-group" id="password">
                <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-lock"></i> Password</span>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal signup -->
  <div class="modal fade" id="register_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <?= (isset($_POST['registeruser'])) ? registerUser($_POST) : ''; ?>

          <h4 class="modal-title">Sign Up</h5>
        </div>
        <div class="modal-body">
          <form method="post" name="landing_signup" onsubmit="return confirm('Are you sure?');">
            <div id="signup_result"></div>
            <div class="row">
              <div class="form-group col-md-6" id="username">
                <label for="inputEmail4">First Name</label>
                <input type="text" class="form-control" name="first_name" required>
              </div>
              <div class="form-group col-md-6" id="username">
                <label for="inputEmail4">Last Name</label>
                <input type="text" class="form-control" name="last_name" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6" id="username">
                <label for="inputEmail4">Username</label>
                <input type="text" class="form-control" name="username" required>
              </div>
              <div class="form-group col-md-6" id="username">
                <label for="inputEmail4">Password</label>
                <input type="password" class="form-control" id="fname" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="validate" required><span>Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</span>
              </div>
            </div>
            
            <div class="row">
              <div class="form-group col-md-6" id="username">
              <label for="inputEmail4">City/Municipality</label>
              <div class="form-select">
                  <select name="municipality" id="municipality" class="form-control">
                    <?php foreach (get_list("SELECT * from tbl_city") as $res) { ?>
                      <option value="<?= $res['id'] ?>"><?= $res['name'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group col-md-6" id="username">
              <label for="inputEmail4">Barangay</label>
              <div class="form-select">
                  <select name="barangay" id="barangay" class="form-control">
                    <?php foreach (get_list("SELECT * from tbl_barangay where city_id = '015501'") as $res) { ?>
                      <option value="<?= $res['id'] ?>"><?= $res['name'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6" id="username">
                <label for="inputEmail4">E-mail</label>
                <input type="email" class="form-control" name="email" required>
              </div>
              <div class="form-group col-md-6" id="username">
                <label for="inputEmail4">Contact No.</label>
                <input type="number" class="form-control" name="contact"  required>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="registeruser" class="btn btn-primary">Sign Up</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer section -->
  <!-- <footer class="footer">
</footer> -->
  <!-- Footer section  -->
  <!-- JS FILES -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/modernizr.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript" src="js/jquery.contact.js"></script>
  <script type="text/javascript" src="js/jquery.devrama.slider.min-0.9.4.js"></script>
  <script type="text/javascript">
    $(document).on("change", "#municipality", function() {
    let value = $(this).val();
    $.get("dropdown.php?city=" + value, function(result) {
      $("#barangay").html(result);
    });
  });
    $(document).ready(function() {
      $('.slider-banner').DrSlider({
        'transition': 'fade',
        showNavigation: false,
        progressColor: "#03A9F4"
      });

      <?= isset($_GET['show_modal']) ? '$("#login_modal").modal("show")' : " " ?>
    });
  </script>
  </body>

  </html>