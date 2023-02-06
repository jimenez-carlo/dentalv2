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
</style>
<!-- banner text -->
<div class="banner">
  <div class="slider-banner">
    <div data-lazy-background="images/slides/ban.jpg">
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
</section>
<!-- header section -->
<!-- intro section -->
<!-- <section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h3>Welcome to Smile Zone</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	<div class="site-info">
		<div class="phoneInfo"><h6>Call Today: </h6><a href="#">123–123–2323</a>; <a href="#">123–123–2323</a></div>
		<div class="timeInfo"><h6>Opening Hours: </h6> <em>Mon–Fri: 9am–6pm; Sun: 10am–1pm</em></div>
	</div>   
   </div>
  </div>
</section> -->
<!-- intro section -->
<!-- services section -->
<!-- <section id="services" class="services service-section">
  <div class="container">
  <div class="section-header">
                <h2 class="wow fadeInDown animated">Treatments</h2>
                <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-happy"></span>
        <div class="services-content">
          <h5>Cosmetic</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-layers"></span>
        <div class="services-content">
          <h5>Oral Surgery</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-wine"></span>
        <div class="services-content">
          <h5>Replacement</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-hotairballoon"></span>
        <div class="services-content">
          <h5>Orthodontics</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-heart"></span>
        <div class="services-content">
          <h5>Child Dental </h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-scope"></span>
        <div class="services-content">
          <h5>Restorative</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
        </div>
      </div>
    </div>
  </div>
</section> -->
<section id="contact" class="section">
  <div class="container">
    <div class="section-header">
      <h3 class="wow fadeInDown animated">Already a member of the Association and wants to have your own Dental Clinic Account? Click <u><a href="#">Here</a></u></h3>
      <p class="wow fadeInDown animated">Here at PDCMS you can now register your own Clinic online! <br><b> Not yet a member of the Association?</b> Click <u> <a href="#">Here</a></u></p>
    </div>
    <div class="card">
      <div class="card-body">
        <h3 class="card-title mb-0">For Inquiries Please Contact Us</h3>
        <br>
        <h5 >PDCMS.register@gmail.com || (+63) 916 3016 891</h5>
      </div>

      <!-- <table class="table">
        <thead>
          <tr>
            <th scope="col">Requirements to send:</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <?= str_replace("\n", "<br>", $settings->requirements) ?>
            </td>

          </tr>
        </tbody>
      </table> -->

    </div>
  </div>
</section>
<!-- services section  -->
<!--About-->
<section id="content-3-10" class="content-block data-section nopad content-3-10">
  <div class="image-container col-sm-6 col-xs-12 pull-left">
    <div class="background-image-holder">

    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
        <div class="editContent">
          <h3>About Us</h3>
        </div>
        <div class="editContent">
          <strong>Personalized Care</strong>
          <p>Our company provides a comprehensive dental clinic management system for provincial dental clinics. Our mission is to streamline clinic operations and improve patient care by offering a solution that is efficient, user-friendly, and accessible.<br>With our cutting-edge technology, dentists and clinic staff can manage appointments, patient records, billing, and other important tasks with ease.<br>Our goal is to empower provincial dental clinics with the tools they need to provide high-quality care to their communities.</p>
        </div>
        <a href="#gallery" class="btn btn-outline btn-outline outline-dark">Our Gallery</a>
      </div>
    </div><!-- /.row-->
  </div><!-- /.container -->
</section>


<!-- package section -->
<!-- <section class="video-section">
    <div class="container"> 
      <div class="row">  
              <div id="content24" data-section="content-24" class="data-section"> 
          <div class="col-md-6">
          <h3 class="eidtContent">Content Video</h3>
          <p class="eidtContent">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <p class="editContent">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
          <p class="editContent">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
          </div>
        <div class="col-md-6">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/146742515?badge=0" allowfullscreen=""></iframe>
          </div>
        </div> 
        </div>
        </div>  
    </div>
  </section> -->
<!-- package section -->

<!-- gallery section -->
<section id="gallery" class="gallery section">
  <div class="container-fluid">
    <div class="section-header">
      <h2 class="wow fadeInDown animated">Gallery</h2>
      <!-- <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p> -->
    </div>
    <div class="row m-5 p-5">
      <div class="col-lg-4 col-md-6 col-sm-6 work"> <a href="images/portfolio/c1.jpg" class="work-box"> <img src="images/portfolio/c1.jpg" alt="">
          <div class="overlay">
            <div class="overlay-caption">
              <p><span class="icon icon-magnifying-glass"></span></p>
            </div>
          </div>
          <!-- overlay -->
        </a> </div>
      <div class="col-lg-4 col-md-6 col-sm-6 work"> <a href="images/portfolio/c2.jpg" class="work-box"> <img src="images/portfolio/c2.jpg" alt="">
          <div class="overlay">
            <div class="overlay-caption">
              <p><span class="icon icon-magnifying-glass"></span></p>
            </div>
          </div>
          <!-- overlay -->
        </a> </div>
      <div class="col-lg-4 col-md-6 col-sm-6 work"> <a href="images/portfolio/c3.jpg" class="work-box"> <img src="images/portfolio/c3.jpg" alt="">
          <div class="overlay">
            <div class="overlay-caption">
              <p><span class="icon icon-magnifying-glass"></span></p>
            </div>
          </div>
          <!-- overlay -->
        </a> </div>
      <div class="col-lg-4 col-md-6 col-sm-6 work"> <a href="images/portfolio/c4.jpg" class="work-box"> <img src="images/portfolio/c4.jpg" alt="">
          <div class="overlay">
            <div class="overlay-caption">
              <p><span class="icon icon-magnifying-glass"></span></p>
            </div>
          </div>
          <!-- overlay -->
        </a> </div>
      <div class="col-lg-4 col-md-6 col-sm-6 work"> <a href="images/portfolio/c5.jpg" class="work-box"> <img src="images/portfolio/c5.jpg" alt="">
          <div class="overlay">
            <div class="overlay-caption">
              <p><span class="icon icon-magnifying-glass"></span></p>
            </div>
          </div>
          <!-- overlay -->
        </a> </div>
      <div class="col-lg-4 col-md-6 col-sm-6 work"> <a href="images/portfolio/c6.jpg" class="work-box"> <img src="images/portfolio/c6.jpg" alt="">
          <div class="overlay">
            <div class="overlay-caption">
              <p><span class="icon icon-magnifying-glass"></span></p>
            </div>
          </div>
          <!-- overlay -->
        </a> </div>
    </div>
  </div>
</section>
<!-- gallery section -->
<!-- our team section -->
<!-- <section id="teams" class="section teams">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Our Team</h2>
                <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="person"><img src="images/team-1.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Jonh Dow</h4>
            <h5 class="role">Doctor</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#"><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#"><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-2.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Markus Linn</h4>
            <h5 class="role">Doctor</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-3.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Chris Jemes</h4>
            <h5 class="role">Doctor</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="person"> <img src="images/team-4.jpg" alt="" class="img-responsive">
          <div class="person-content">
            <h4>Vintes Mars</h4>
            <h5 class="role">Doctor</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
          </div>
          <ul class="social-icons clearfix">
            <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li> 
            <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li> 
          </ul>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- our team section -->
<!-- <section id="pricing5" data-section="pricing-5" class="data-section">
    <div class="container">
          <div class="section-header">
                <h2 class="wow fadeInDown animated">Pricing</h2>
                <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
         <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <div class="table">
                    <h3 class="editContent">Basic</h3>
                    <h2 class="editContent">$13</h2>
                    <p class="editContent">Per Month</p>
                    <ul class="table-content">
                        <li class="editContent"><i class="fa fa-hdd-o"></i> 10 GB Storage</li>
                        <li class="editContent"><i class="fa fa-pie-chart"></i> 500 GB Bandwidth</li>
                        <li class="editContent"><i class="fa fa-envelope-o"></i> Email Support</li>
                        <li class="editContent"><i class="fa fa-cogs"></i> 24x7 Support</li>
                    </ul>

                    <div class="text-center text-uppercase">
                        <a href="#" class="btn btn-default-green-transparent-tiny editContent">Signup Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="table long-table">
                    <h3 class="editContent">Premium</h3>
                    <h2 class="editContent">$23</h2>
                    <p class="editContent">Per Month</p>
                    <ul class="table-content">
                        <li class="editContent"><i class="fa fa-hdd-o"></i> 10 GB Storage</li>
                        <li class="editContent"><i class="fa fa-pie-chart"></i> 500 GB Bandwidth</li>
                        <li class="editContent"><i class="fa fa-envelope-o"></i> Email Support</li>
                        <li class="editContent"><i class="fa fa-cogs"></i> 24x7 Support</li>
                    </ul>

                    <div class="text-center text-uppercase">
                        <a href="#" class="btn btn-default-blue-tiny editContent">Signup Now</a>
                    </div>
                </div>

            </div>

            <div class="col-md-3">
                <div class="table">
                    <h3 class="editContent">Developer</h3>
                    <h2 class="editContent">$33</h2>
                    <p class="editContent">Per Month</p>
                    <ul class="table-content">
                        <li class="editContent"><i class="fa fa-hdd-o"></i> 10 GB Storage</li>
                        <li class="editContent"><i class="fa fa-pie-chart"></i> 500 GB Bandwidth</li>
                        <li class="editContent"><i class="fa fa-envelope-o"></i> Email Support</li>
                        <li class="editContent"><i class="fa fa-cogs"></i> 24x7 Support</li>
                    </ul>

                    <div class="text-center text-uppercase">
                        <a href="#" class="btn btn-default-green-transparent-tiny editContent">Signup Now</a>
                    </div>
                </div>

            </div>
         </div>
    </div>
</section> -->
<!-- Testimonials section -->
<!-- <section id="testimonials" class="section testimonials no-padding">
  <div class="container-fluid">
    <div class="row no-gutter">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa 
semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                <p>Chris Mentsl</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Praesent eget risus vitae massa Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa 
semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                <p>Kristean velnly</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa 
semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                <p>Markus Denny</p>
              </blockquote>
            </div>
          </li>
          <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Vitae massa semper aliquam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa 
semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                <p>John Doe</p>
              </blockquote>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section> -->
<!-- Testimonials section -->

<!-- contact section -->


<script>
  const items = document.querySelectorAll("ul.primary-nav>li>a");
  items.forEach(element => {

    element.addEventListener("click", function() {
      console.log("clicked");
      clearActive();
      element.classList.add("active");
      console.log(this.getAttribute("href"));
      document.querySelector(this.getAttribute("href")).classList.add("active");
    });

  });

  function clearActive() {
    let items = document.querySelectorAll(".primary-nav ul>li>a");
    items.forEach(element => {
      element.classList.remove("active");
    });

    let sections = document.querySelectorAll("section");
    sections.forEach(element => {
      element.classList.remove("active");
    });
  }
</script>
<!-- contact section -->
<?php include 'footer.php'; ?>