<?php
require 'c:\xampp\htdocs\SW1_Project\include\headerhome.php';
?>
<body>
  <!------ Slide Show ------->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(<?php echo APPURL;?>/assets/imgs/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h1 class="animate__animated animate__fadeInDown">Welcome To <span class="typed" data-typed-items="DOT JOB"></span></h1>
                <h2 class="animate__animated animate__fadeInUp">Start Your Career Now With Good Jobs</h2>
                <div>
                <?php if(isset($_SESSION['username']) && $_SESSION['userRole'] === 'Client') : ?>
                  <a href="<?php echo APPURL;?>/views/client/overview.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Dashboard</a>
                <?php elseif(isset($_SESSION['username']) && $_SESSION['userRole'] === 'Freelancer'): ?>
                  <a href="<?php echo APPURL;?>/views/freelancer/savedPosts.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saved Posts</a>
                <?php elseif(isset($_SESSION['username']) && $_SESSION['userRole'] === 'Admin'): ?>
                  <a href="<?php echo APPURL;?>/views/admin/admindashboard.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Dashboard</a>
                  <?php else : ?>
                    <a href="<?php echo APPURL;?>/views/shared/loginAndSignup.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Start</a>
                <?php endif;?>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(<?php echo APPURL;?>/assets/imgs/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h1 class="animate__animated animate__fadeInDown">Welcome To <span class="typed" data-typed-items="DOT JOB"></span></h1>
                <h2 class="animate__animated animate__fadeInUp">Start Your Career Now With Good Jobs</h2>
                <div>
                <?php if(isset($_SESSION['username']) && $_SESSION['userRole'] === 'Client') : ?>
                  <a href="<?php echo APPURL;?>/views/client/overview.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Dashboard</a>
                <?php elseif(isset($_SESSION['username']) && $_SESSION['userRole'] === 'Freelancer'): ?>
                  <a href="<?php echo APPURL;?>/views/freelancer/savedPosts.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saved Posts</a>
                <?php elseif(isset($_SESSION['username']) && $_SESSION['userRole'] === 'Admin'): ?>
                  <a href="<?php echo APPURL;?>/views/admin/admindashboard.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Dashboard</a>
                  <?php else : ?>
                    <a href="<?php echo APPURL;?>/views/shared/loginAndSignup.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Start</a>
                <?php endif;?>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(<?php echo APPURL;?>/assets/imgs/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h1 class="animate__animated animate__fadeInDown">Welcome To <span class="typed" data-typed-items="DOT JOB"></span></h1>
                <h2 class="animate__animated animate__fadeInUp">Start Your Career Now With Good Jobs</h2>
                <div>
                <?php if(isset($_SESSION['username']) && $_SESSION['userRole'] === 'Client') : ?>
                  <a href="<?php echo APPURL;?>/views/client/overview.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Dashboard</a>
                <?php elseif(isset($_SESSION['username']) && $_SESSION['userRole'] === 'Freelancer'): ?>
                  <a href="<?php echo APPURL;?>/views/freelancer/savedPosts.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saved Posts</a>
                <?php elseif(isset($_SESSION['username']) && $_SESSION['userRole'] === 'Admin'): ?>
                  <a href="<?php echo APPURL;?>/views/admin/admindashboard.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Dashboard</a>
                  <?php else : ?>
                    <a href="<?php echo APPURL;?>/views/shared/loginAndSignup.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Start</a>
                <?php endif;?>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section>


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="<?php echo APPURL;?>/index.php" class="logo mr-auto"><img src="<?php echo APPURL;?>/assets/imgs/logo/slogo.jpg" alt="logo"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="<?php echo APPURL;?>/views/freelancer/posts.php">Posts</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <?php if(isset($_SESSION['username']) && $_SESSION['userRole'] === 'Client') : ?>
            <li><a class="nav-link scrollto" href="<?php echo APPURL;?>/views/client/overview.php">Dashboard</a></li>
          <?php elseif(isset($_SESSION['username']) && $_SESSION['userRole'] === 'Freelancer'): ?>
            <li><a class="nav-link scrollto" href="<?php echo APPURL;?>/views/freelancer/savedPosts.php">Saved Posts</a></li>
          <?php elseif(isset($_SESSION['username']) && $_SESSION['userRole'] === 'Admin'): ?>
            <li><a class="nav-link scrollto" href="<?php echo APPURL;?>/views/admin/admindashboard.php">Dashboard</a></li>
          <?php else : ?>
            <li><a class="nav-link scrollto" href="<?php echo APPURL;?>/views/shared/loginAndSignup.php">Login/Register</a></li>
          <?php endif;?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main>

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/imgs/home/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-people"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-award"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1" class="counter purecounter"></p>
                <span class="counter-text">AWARD WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="<?php echo APPURL;?>/views/freelancer/posts.php">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="<?php echo APPURL;?>/views/freelancer/posts.php">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="<?php echo APPURL;?>/views/freelancer/posts.php">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="<?php echo APPURL;?>/views/freelancer/posts.php">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="<?php echo APPURL;?>/views/freelancer/posts.php">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="<?php echo APPURL;?>/views/freelancer/posts.php">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <?php $sql = "SELECT *, FirstName FROM jobposts join users on users.UserID = jobposts.ClientID WHERE Status = 'Accepted' ORDER BY PostID  DESC LIMIT 6";
        $result = $db->display($sql);
        ?>
        <div class="content-area">
        <div class="row mb-2">
            <?php
        foreach($result as $row){
                $statue = $row['Status'];
            if($statue === 'Accepted'){ ?>
                <div class="col-md-6" id="postBox">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: black;">
                <div class="col p-4 d-flex flex-column position-static" style="color: white;">
                <strong class="d-inline-block mb-2 text-primary-emphasis"><?php echo $row['FirstName'];?></strong>
                <h3 class="mb-0"><?php echo $row['JobPostTitle'];?></h3>
                        <div style="color: rgb(154, 149, 149);">
                        <span><i class="bi bi-calendar"></i><?php echo $row['CreationDate'];?></span>
                        <span style="margin-left: 20px;"><i class="bi bi-people"></i><?php echo "Number Of Proposals:" . $row['ProposalCount'];?></span>
                        </div>
                    <p class="card-text mb-auto"><?php echo $row['JobDescription'];?></p>
                    <div>
                        <span style="float: right;">
                        <a href="<?php echo APPURL;?>/views/freelancer/postDetails.php?PostID=<?php echo ($row['PostID']); ?>" name="show_details" class="icon-link gap-1 icon-link-hover stretched-link" style="border: #47b2e4; 
                        text-decoration: none;
                        text-align: center;
                        display: inline-block;
                        font-size: 16px;
                        color: white; 
                        background-color: #1DA1F2;
                        border-radius: 12px;
                        padding: 8px;
                        margin: 4px 2px;
                        font-weight: 700px;
                        width: 150px;
                        margin-top: 15px;
                        " 
                        id="btn-send" onclick="show_pup()">
                        View Details  <i class="bi bi-arrow-right-circle"></i>
                        </a>
                        </span>

                    </div>
                    </div>
                </div>
            </div>
            <?php
            }
        }
        ?>
</div>
</div>

<!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <img src="assets/imgs/team/Abdelruhman.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/imgs/team/Amir.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/imgs/team/Subway.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/imgs/team/Ziad.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div>
                <div class="address">
                  <i class="ri-map-pin-line"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>


              <div class="email mt-4">
                <i class="ri-mail-send-line"></i>
                <h4>Email:</h4>
                <p><a href="mailto:info@example.com" style="color: #000000;">info@example.com</a></p>
              </div>

              <div class="phone mt-4">
                <i class="ri-phone-line"></i>
                <h4>Call:</h4>
                <p><a href="tel:+155895548855" style="color: #000000;">01134455667</a></p>
              </div>

            </div>
          </div>


          <div class="col-lg-7 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Maxim</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong>01134455667<br>
                <strong>Email:</strong>info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i><a href="<?php echo APPURL;?>/views/freelancer/posts.php">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="<?php echo APPURL;?>/views/freelancer/posts.php">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="<?php echo APPURL;?>/views/freelancer/posts.php">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="<?php echo APPURL;?>/views/freelancer/posts.php">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="<?php echo APPURL;?>/views/freelancer/posts.php">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-2 footer-newsletter">
            <img src="assets/imgs/logo/logo.jpg" alt="Logo" style="position: relative; width: 350px; height: 250px;" />
          </div>

        </div>
      </div>
    </div>

<?php
require 'c:\xampp\htdocs\SW1_Project\include\footerhome.php';
?>