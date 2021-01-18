<?php
if (!isset($_GET['memberid'])) {

  echo '<h1>Your required profile not exist</h1>';
} else {

  include('../admin/config.php');
  $sql = "SELECT * FROM profile where memberid= $_GET[memberid]";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $pro5 = mysqli_fetch_assoc($result);
    



?>
    <!DOCTYPE html>
    <html lang="en" class="no-js">

    <!-- Mirrored from lmpixels.com/demo/breezycv/light/1/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jan 2021 10:16:48 GMT -->

    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>My CV</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <meta name="description" content="BreezyCV - Resume / CV / vCard Template" />
      <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
      <meta name="author" content="lmpixels" />
      


      <link rel="stylesheet" href="css/reset.css" type="text/css">
      <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
      <link rel="stylesheet" href="css/animations.css" type="text/css">
      <link rel="stylesheet" href="css/perfect-scrollbar.css" type="text/css">
      <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
      <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
      <link rel="stylesheet" href="css/main.css" type="text/css">

      <script src="js/modernizr.custom.js"></script>
    </head>

    <body>
    
      <!-- Animated Background -->
      <div class="lm-animated-bg" style="background-image: url(img/main_bg.png);"></div>
      <!-- /Animated Background -->

      <!-- Loading animation -->
      <div class="preloader">
        <div class="preloader-animation">
          <div class="preloader-spinner">
          </div>
        </div>
      </div>
      <!-- /Loading animation -->

      <div class="page">
        <div class="page-content">

          <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
              <div class="header-photo">
                <?php
                if(!empty($pro5['picture'])){
                  echo '<img src = "data:image/png;base64,' . base64_encode($pro5['picture']) . '" alt="'.$pro5['name'].'" />';
              
                }else
                echo '<img src="img/main_photo.jpg" alt="'.$pro5['name'].'">';
                
            ?>
                
              </div>
              <div class="header-titles">
                <h2><?php echo $pro5['name']; ?></h2>
                <h4><?php echo $pro5['work1']; ?></h4>
              </div>
            </div>

            <ul class="main-menu">
              <li class="active">
                <a href="#home" class="nav-anim">
                  <span class="menu-icon lnr lnr-home"></span>
                  <span class="link-text">Home</span>
                </a>
              </li>
              <li>
                <a href="#about-me" class="nav-anim">
                  <span class="menu-icon lnr lnr-user"></span>
                  <span class="link-text">About Me</span>
                </a>
              </li>
              <li>
                <a href="#resume" class="nav-anim">
                  <span class="menu-icon lnr lnr-graduation-hat"></span>
                  <span class="link-text">Resume</span>
                </a>
               </li>
              <!-- <li>
                <a href="#portfolio" class="nav-anim">
                  <span class="menu-icon lnr lnr-briefcase"></span>
                  <span class="link-text">Portfolio</span>
                </a>
              </li>
              <li>
                <a href="#blog" class="nav-anim">
                  <span class="menu-icon lnr lnr-book"></span>
                  <span class="link-text">Blog</span>
                </a>
              </li> -->
              <li>
                <a href="#contact" class="nav-anim">
                  <span class="menu-icon lnr lnr-envelope"></span>
                  <span class="link-text">Contact</span>
                </a>
              </li>
            </ul>



            <div class="header-buttons">
              <a href="#" target="_blank" class="btn btn-primary"><i class="fab fa-facebook-f"></i> Facebook</a>
            </div>

            <div class="copyrights">© 2020 All rights reserved.</div>
          </header>

          <!-- Mobile Navigation -->
          <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- End Mobile Navigation -->

          <!-- Arrows Nav -->
          <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
          </div>
          <!-- End Arrows Nav -->

          <div class="content-area">
            <div class="animated-sections">
              <!-- Home Subpage -->
              <section data-id="home" class="animated-section start-page">
                <div class="section-content vcentered">

                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <div class="title-block">
                        <h2><?php echo $pro5['name']; ?></h2>
                        <div class="owl-carousel text-rotation">
                          <div class="item">
                            <div class="sp-subtitle"><?php echo $pro5['work1']; ?></div>
                          </div>

                          <div class="item">
                            <div class="sp-subtitle"><?php echo $pro5['work2']; ?></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </section>
              <!-- End of Home Subpage -->

              <!-- About Me Subpage -->
              <section data-id="about-me" class="animated-section">
                <div class="page-title">
                  <h2>About <span>Me</span></h2>
                </div>

                <div class="section-content">
                  <!-- Personal Information -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-7">
                      <?php echo $pro5['about']; ?>
                    </div>

                    <div class="col-xs-12 col-sm-5">
                      <div class="info-list">
                        <ul>
                          <li>
                            <span class="title">Age</span>
                            <span class="value"><?php echo $pro5['age']; ?></span>
                          </li>

                          <li>
                            <span class="title">Residence</span>
                            <span class="value"><?php echo $pro5['country']; ?></span>
                          </li>

                          <li>
                            <span class="title">Address</span>
                            <span class="value"><?php echo $pro5['address']; ?></span>
                          </li>

                          <li>
                            <span class="title">e-mail</span>
                            <span class="value"><?php echo $pro5['email']; ?></span>
                          </li>

                          <li>
                            <span class="title">Phone</span>
                            <span class="value"><?php echo $pro5['phone']; ?></span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- End of Personal Information -->

                  <div class="white-space-50"></div>

                  <!-- Services -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>What <span>I Do</span></h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col-xs-12 col-sm-6">
                      <div class="col-inner">
                        <?php
                        $sql = 'SELECT * FROM `profile-detail-work` WHERE memberid=' . $_GET['memberid'] . ' ';
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                          $row = mysqli_fetch_all($result);
                        }
                        $i = 0;
                        $iconlist = array(1 => '<i class="lnr lnr-store"></i>', 2 => '<i class="lnr lnr-laptop-phone"></i>', 3 => '<i class="lnr lnr-pencil"></i>', 4 => '<i class="lnr lnr-flag"></i>');
                        foreach ($row as $work) {
                          if ($i == 2) {
                            echo '</div> </div> <div class="col-xs-12 col-sm-6"> <div class="col-inner">';
                          }
                        ?>
                          <div class="info-list-w-icon">

                            <div class="info-block-w-icon">
                              <div class="ci-icon">
                                <?php echo $iconlist[$work[3]] ?>

                              </div>
                              <div class="ci-text">
                                <h4><?php echo $work[2] ?></h4>
                                <p><?php echo $work[4] ?></p>
                              </div>
                            </div>
                          </div>
                        <?php
                          $i += 1;
                        }
                        echo '</div> </div> ';
                        ?>


                      </div>
                      <!-- End of Services -->


                    </div>
              </section>
              <!-- End of About Me Subpage -->

              <!-- Resume Subpage -->
              <section data-id="resume" class="animated-section">
                <div class="page-title">
                  <h2>Resume</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <div class="col-xs-12 col-sm-7">

                      <div class="block-title">
                        <h3>Education</h3>
                      </div>

                      <div class="timeline timeline-second-style clearfix">

                        <?php
                        include('../admin/config.php');
                        $sql = 'SELECT * FROM `profile-resume-education` WHERE memberid=' . $_GET['memberid'] . ' ';
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                          $row = mysqli_fetch_all($result);
                        }

                        foreach ($row as $edu) { ?>
                          <div class="timeline-item clearfix">
                            <div class="left-part">
                              <h5 class="item-period"><?php echo $edu[2] ?></h5>
                              <span class="item-company"><?php echo $edu[4] ?></span>
                            </div>
                            <div class="divider"></div>
                            <div class="right-part">
                              <h4 class="item-title"><?php echo $edu[5] ?></h4>
                              <p><?php echo $edu[6] ?></p>
                            </div>
                          </div>
                        <?php } ?>
                      </div>



                      <div class="white-space-50"></div>

                      <div class="block-title">
                        <h3>Experience</h3>
                      </div>

                      <div class="timeline timeline-second-style clearfix">
                        <?php
                        $sql = 'SELECT * FROM `profile-resume-exp` WHERE memberid=' . $_GET['memberid'] . ' ';
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                          $row = mysqli_fetch_all($result);
                        }

                        foreach ($row as $exp) { ?>
                          <div class="timeline-item clearfix">
                            <div class="left-part">
                              <h5 class="item-period"><?php echo $exp[2] ?></h5>
                              <span class="item-company"><?php echo $exp[3] ?></span>
                            </div>
                            <div class="divider"></div>
                            <div class="right-part">
                              <h4 class="item-title"><?php echo $exp[4] ?></h4>
                              <p><?php echo $exp[5] ?></p>
                            </div>
                          </div>
                        <?php } ?>
                      </div>
                    </div>

                    <!-- Skills & Certificates -->
                    <div class="col-xs-12 col-sm-5">

                      <?php
                      include('../admin/config.php');
                      $sql = 'SELECT * FROM `profile-resume-skill` WHERE memberid=' . $_GET['memberid'] . ' ';
                      $result = mysqli_query($conn, $sql);
                      if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_all($result);
                      }

                      foreach ($row as $skill) { ?>
                        <!-- Design Skills -->
                        <div class="block-title">
                          <h3><?php echo $skill[2] ?><span>Skills</span></h3>
                        </div>

                        <div class="skills-info skills-second-style">

                          <?php
                          $sql = 'SELECT * FROM `skill-detail` WHERE skillid=' . $skill[1] . ' ';
                          $result = mysqli_query($conn, $sql);
                          if (mysqli_num_rows($result) > 0) {
                            $subrow = mysqli_fetch_all($result);
                          }

                          foreach ($subrow as $sub_skill) { ?>
                            <!-- Skill 1 -->
                            <div class="skill clearfix">
                              <h4><?php echo $sub_skill[2];  ?></h4>
                              <div class="skill-value"><?php echo $sub_skill[3] . '%' ?></div>
                            </div>
                            <?php $val = $sub_skill[2];
                            if ($val < 65) $pro= '1';
                            if ($val > 65 && $val <= 75) $pro= '8';
                            if ($val > 75 && $val <= 85) $pro= '6';
                            if ($val > 85 && $val <=  90) $pro= '9';
                            if ($val >= 95 && $val <=  100) $pro= '5';
                            if($val==100) $pro='7' ?>
                            <div class="skill-container skill-<?php echo $pro?>">
                              <div class="skill-percentage"></div>
                            </div>
                            <!-- End of Skill 1 -->
                          <?php } ?>



                        </div>
                      <?php } ?>

                      <div class="white-space-10"></div>

                      <!-- Knowledges -->
                      <div class="block-title">
                        <h3>Knowledges</h3>
                      </div>

                      <ul class="knowledges">
                      <?php
                          $sql = 'SELECT * FROM `knowlege` WHERE memberid=' . $_GET['memberid'] . ' ';
                          $result = mysqli_query($conn, $sql);
                          if (mysqli_num_rows($result) > 0) {
                            $knowrow = mysqli_fetch_all($result);
                          }

                          foreach ($knowrow as $know) { 
                            echo "<li>$know[2]</li>";
                         } ?>
                      </ul>
                      <!-- End of Knowledges -->
                    </div>
                    <!-- End of Skills & Certificates -->
                  </div>

                  <div class="white-space-50"></div>
                  <?php
                      include('../admin/config.php');
                      $sql = 'SELECT * FROM `certificate` WHERE memberid=' . $_GET['memberid'] . ' ';
                      $result = mysqli_query($conn, $sql);
                      if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_all($result);
                      

                      ?>
                  <!-- Certificates -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Certificates</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <?php foreach ($row as $certi) {  ?>
                    <!-- Certificate 1 -->
                    <div class="col-xs-12 col-sm-6">
                      <div class="certificate-item clearfix">
                        <div class="certi-logo">
                          <img src="<?php echo $certi[4]?>" alt="logo" width="120px" height="141px">
                        </div>

                        <div class="certi-content">
                          <div class="certi-title">
                            <h4><?php echo $certi[2]?></h4>
                          </div>
                          <div class="certi-date">
                            <span><?php echo $certi[3]?></span>
                          </div>
                          <div class="certi-company">
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Certificate 1 -->


                  </div>
                  <!-- End of Certificates -->
                  <?php }} ?>
                </div>
              </section>
              <!-- End of Resume Subpage -->
              <!-- Contact Subpage -->
              <section data-id="contact" class="animated-section">
                <div class="page-title">
                  <h2>Contact</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <!-- Contact Info -->
                    <div class="col-xs-12 col-sm-2"></div>
                    <div class="col-xs-12 col-sm-8">
                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-map-marker"></i>
                        <h4><?php echo $pro5['address']; ?></h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-phone-handset"></i>
                        <h4><?php echo $pro5['phone']; ?>0</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-envelope"></i>
                        <h4><?php echo $pro5['email']; ?></h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-checkmark-circle"></i>
                        <h4>Freelance Available</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>


                    </div>
                    <!-- End of Contact Info -->



                  </div>

                </div>
              </section>
              <!-- End of Contact Subpage -->
            </div>
          </div>

        </div>
      </div>

      <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="js/jquery-2.1.3.min.js"></script>
      <script src="js/modernizr.custom.js"></script>
      <script src="js/animating.js"></script>

      <script src="js/imagesloaded.pkgd.min.js"></script>
      <script src='../../../../../www.google.com/recaptcha/api.js'></script>

      <script src='js/perfect-scrollbar.min.js'></script>
      <script src='js/jquery.shuffle.min.js'></script>
      <script src='js/masonry.pkgd.min.js'></script>
      <script src='js/owl.carousel.min.js'></script>
      <script src="js/jquery.magnific-popup.min.js"></script>

      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
      <script src="js/jquery.googlemap.js"></script>
      <script src="js/validator.js"></script>
      <script src="js/main.js"></script>
    </body>

    <!-- Mirrored from lmpixels.com/demo/breezycv/light/1/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jan 2021 10:17:01 GMT -->

    </html>

<?php
    mysqli_close($conn);
  } else {
    echo '<h1>Your required profile not exist</h1>';
  }
}
?>
<p>Ifyou are member, please create your cv.</p>
<a name="" id="" class="btn btn-success" href="add.php" role="button">click here</a>