<?php include 'header.php'; ?>

<?php $settings = get_one("SELECT * from tbl_settings where id = 1"); ?>
<style>
  .work {
    background: #fff !important;
    padding: 32px;
  }

  ul.primary-nav>li>a.active {
    text-decoration: underline black 3px;
  }

  section.active {
    border: 15px solid cyan;
  }

  .primary-img .background .active>img {
    object-fit: cover !important;
  }

  .projector>* {
    margin-top: 8vh;
    height: 92vh !important;
  }
</style>
<!-- banner text -->
<div class="banner">
  <div class="slider-banner">
    <!-- <div data-lazy-background="images/slides/ban.jpg"> -->
    <div data-lazy-background="images/slides/banner4.png">
      <h1 class="banner1" data-pos="['68%', '-40%', '10%', '12%']" data-duration="700" data-effect="move">
        Provincial Dental Clinic Management System
      </h1> <br>
      <p class="banner1" data-pos="['75%', '110%', '40%', '12%']" data-duration="700" data-effect="move">
        Provincial Dental Clinic Management System
      </p>
    </div>
  </div>
  <!-- banner text -->
</div>

<section id="contact" class="section">
  <div class="container">

    <div class="card">
      <div class="card-body">
        <h3 class="card-title mb-0">Email us @ </h3>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Details:</th>
            <th scope="col">Requirements to send:</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>PRC No.</td>
            <td>PRC ID</td>
            <td> ✔</td>
          </tr>
          <tr>
            <td>Clinic Name</td>
            <td>Business Permit</td>
            <td> ✔</td>
          </tr>
          <tr>
            <td>Clinic Address: Barangay & municiplaity</td>
            <td>NBI</td>
            <td> ✔</td>
          </tr>
          <tr>
            <td>First name, Last name</td>
            <td>Birth Certificate</td>
            <td> ✔</td>
          </tr>
          <tr>
            <td>Description</td>
            <td>Logo</td>
            <td> ✔</td>
          </tr>

        </tbody>
      </table>

    </div>
  </div>
</section>

<!-- contact section -->
<?php include 'footer.php'; ?>