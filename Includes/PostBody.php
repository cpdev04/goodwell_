<?php
// Include the database connection
include("Includes/Connection.php");
date_default_timezone_set("Asia/Karachi");

// Check if the slug exists in the URL
if (isset($_GET['slug'])) {
    $PostSlug = ValidateFormData($_GET['slug']);
    // Fetch the Post ID using the slug
    $Query = "SELECT Post_ID FROM blog_post WHERE Post_Slug = '$PostSlug' LIMIT 1";
    $Result = $Connection->query($Query);

    if ($Result && $Result->num_rows > 0) {
        $Row = $Result->fetch_assoc();
        $PostID = $Row['Post_ID'];
    } else {
        echo "<p>Post not found for slug: $PostSlug</p>";
        header("Location: ../index.php");
        exit();
    }
} else {
    echo "<p>No slug provided.</p>";
    header("Location: ../index.php");
    exit();
}


// Update Post Stats
$Query = "SELECT * FROM post_visits WHERE Post_ID = '$PostID'";
$Result = $Connection->query($Query);

$Query1 = "SELECT * FROM blog_post WHERE Post_ID = '$PostID'";
$Result1 = $Connection->query($Query1);

if ($Result1->num_rows > 0) {
    while ($row = $Result1->fetch_assoc()) {
        $PageTitle = $row['Page_Title'];
        $PostTitle = $row['Post_Title'];
        // Meta
        $MetaTitle = $row['MetaTitle'];
        $MetaDesc = $row['MetaDesc'];
        $MetaKey = $row['MetaKey'];
        //   Meta
    }
}

if ($Result && $Result->num_rows > 0) {
    $Query = "UPDATE post_visits SET Post_Visits = Post_Visits + 1 WHERE Post_ID = '$PostID'";
    $Connection->query($Query);
} else {
    $Query = "INSERT INTO post_visits(Post_ID, Post_Visits) VALUES($PostID, 1)";
    $Connection->query($Query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
    <link href="assets/images/favicon/favicon.png" rel="icon">
    <script src="components/header.js" defer></script>
    <script src="components/footer.js" defer></script>
    <script src="components/service_aside.js" defer></script>
    <title>Good Well Hospital</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="../assets/css/libraries.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets_blog/style.css">
</head>

<body>
    <div id="wrap">

        <!--End Banner-->
         <header class="header header-layout2">
            <div class="header-topbar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                                    <li>
                                        <i class="icon-phone"></i><a href="tel:+917829224666">Emergency Line: +917829224666</a>
                                    </li>
                                    <li>
                                        <i class="icon-location"></i><a href="https://maps.app.goo.gl/7StUN1Bw1AnGEM627">56-04 cavalier tower dr Bender layout opp to decathlon kothanur bengaluru 560077</a>
                                    </li>
                                    <li>
                                        <i class="icon-clock"></i><a href="contact-us.html">Moon - Sun: 24 X 7</a>
                                    </li>
                                </ul>
                                <div class="d-flex">
                                    <ul class="social-icons list-unstyled mb-0 mr-30">
                                        <li><a href="https://www.facebook.com/profile.php?id=61575672526904"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/goodwell_hospital/"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://x.com/Goodwell_112">X</a></li>
                                        <li><a href="https://in.pinterest.com/digigoodwellhospital/"><i class="fab fa-pinterest"></i></a>
                                        </li>
                                    </ul><!-- /.social-icons -->

                                </div>
                            </div>
                        </div><!-- /.col-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.header-top -->
            <nav class="navbar navbar-expand-lg sticky-navbar">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="../assets/images/logo/goodwell_logo.jpeg" class="logo-dark logo-w" alt="goodwell logo">
                    </a>
                    <button class="navbar-toggler" type="button">
                        <span class="menu-lines"><span></span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNavigation" style="flex:none">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav__item">
                                <a href="../home-modern.html" class=" nav__item-link">Home</a>
                            </li>
                            <li class="nav__item ">
                                <a href="../about-us.html" class=" nav__item-link">About Us</a>
                            </li>
                            <li class="nav__item has-dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Services</a>
                                <ul class="dropdown-menu p-3" style="min-width: 600px;">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <li class="nav__item"><a href="../obstetrics-gynecology.html" class="nav__item-link">Obstetrics & Gynecology</a></li>
                                            <li class="nav__item"><a href="../ent.html" class="nav__item-link">ENT</a></li>
                                            <li class="nav__item"><a href="../pediatric.html" class="nav__item-link">Pediatric & Neonatology</a></li>
                                            <li class="nav__item"><a href="../internal-medicine.html" class="nav__item-link">Internal Medicine</a></li>
                                            <li class="nav__item"><a href="../cardiology.html" class="nav__item-link">Cardiology</a></li>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <li class="nav__item"><a href="../orthopedic.html" class="nav__item-link">Orthopedics</a></li>
                                            <li class="nav__item"><a href="../dermatology.html" class="nav__item-link">Dermatology</a></li>
                                            <li class="nav__item"><a href="../plastic-surgery.html" class="nav__item-link">Plastic Surgery</a></li>
                                            <li class="nav__item"><a href="../anesthesiology.html" class="nav__item-link">Anesthesiology</a></li>
                                            <li class="nav__item"><a href="#" class="nav__item-link">Urology</a></li>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <li class="nav__item"><a href="../pulmonology.html" class="nav__item-link">Pulmonology</a></li>
                                            <li class="nav__item"><a href="#" class="nav__item-link">Laproscopic Surgery</a></li>
                                            <li class="nav__item"><a href="../neurology.html" class="nav__item-link">Medical Neurology</a></li>
                                            <li class="nav__item"><a href="../neuro-surgery.html" class="nav__item-link">Neuro Surgery</a></li>
                                            <li class="nav__item"><a href="#" class="nav__item-link">Sports Medicine</a></li>
                                        </div>
                                    </div>
                                </ul>

                            </li>
                            <li class="nav__item has-dropdown">
                                <a href="../doctors-grid.html" class=" nav__item-link ">Team</a>
                            </li>

                            <li class="nav__item has-dropdown">
                                <a href="../gallery.html" class=" nav__item-link ">Gallery</a>
                            </li>
                            <li class="nav__item has-dropdown">
                                <a href="../blog.php" class=" nav__item-link ">Blog</a>
                            </li>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="../contact-us.html" class="nav__item-link">Contacts</a>
                            </li><!-- /.nav-item -->
                        </ul><!-- /.navbar-nav -->
                        <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
                    </div><!-- /.navbar-collapse -->
                    <div class="d-none d-xl-flex align-items-center position-relative ml-30">
                        <!-- /.miniPopup-departments -->
                        <a href="../appointment.html" class="btn btn__primary btn__rounded ml-30">
                            <i class="icon-calendar"></i>
                            <span style="white-space: nowrap;">Book Appointment</span>
                        </a>
                    </div>
                </div><!-- /.container -->
            </nav><!-- /.navabr -->
        </header>
    <!-- /.Header -->
    
    <!-- ========================
       page title 
    =========================== -->
       <!-- BREADCRUM -->
    <section class="page-title page-title-layout5 text-center bg-img" style="background-image: url(../assets/images/backgrounds/6.jpg); background-size: cover; background-position: center center;">
      
      <div class="container  ml-custom">
        <div class="row">
          <div class="col-12">
            <nav class="nav-breadcrum">
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                <li class="breadcrumb-item active" aria-current="page">
                 <?php echo $PostTitle ?>

                </li>
              </ol>
            </nav>
            <h1 class="pagetitle__heading">
              Blog

            </h1>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    <!-- BREADCRUM -->

        <!-- start post-body -->
        <div class="w3-row">
            <div class="w3-container"><?php echo isset($CommentMessage) ? $CommentMessage : ""; ?></div>
            <div class="w3-col l8 s12">
                <!-- Display the post content -->
                <?php DisplayPost($PostID); ?>

                <!-- COMMENTS -->
                <div class="w3-margin">
                    <div class="w3-container">
                        <h4><b style="color:black; text-transform:none;">Comments</b></h4>
                        <hr>
                    </div>
                    <form method="post" action="" class="w3-container"
                        style="background-color:aliceblue;padding:30px 10px">
                        <div class="w3-row-padding">
                            <p class="w3-text-red"> <?php echo isset($NameError) ? $NameError : ""; ?></p>
                            <p class="w3-text-red"> <?php echo isset($CommentError) ? $CommentError : ""; ?></p>
                            <div class="w3-quarter">
                                <input name="Name" class="w3-input w3-round" type="text" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="w3-rest">
                                <textarea name="Comment" style="resize: none;" rows="1" class="w3-input w3-round"
                                    placeholder="Your Comment" required></textarea>
                            </div>
                            <input name="PostId" value="<?php echo $PostID ?>" type="hidden">
                            <div style="margin-left:10px;margin-top:20px">
                                <button style="background-color:#1B5762;color:white;padding:15px 40px" name="AddComment"
                                    type="submit" class="w3-button w3-white w3-border"><b>Comment</b></button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <?php DisplayComments($PostID); ?>
                </div>
                <!-- END COMMENTS -->
            </div>

            <!-- Sidebar -->
            <div class="w3-col l4">
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4 style="color:black;text-transform: none;">Popular Posts</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        <?php PopularPosts(); ?>
                    </ul>
                </div>
                <hr>
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4 style="color:black;text-transform: none;">Tags</h4>
                    </div>
                    <div class="w3-container w3-white">
                        <p><?php Tags(); ?></p>
                    </div>
                </div>
            </div>
            <!-- END Sidebar -->
        </div>
        <!-- end post-body -->


    </div><!-- /.page-wrapper -->

<!-- ========================Footer
    ========================== -->
    <footer class="footer">
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3">
              <div class="footer-widget-about">
                <img src="../assets/images/logo/goodwell_logo.jpeg" alt="logo" class="mb-30">
                <p class="color-gray">Our goal is to deliver quality of care in a courteous, respectful, and
                  compassionate manner. We hope you will allow us to care for you and strive to be the first and best
                  choice for your family healthcare.
                </p>

              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-xl-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-1">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">Departments</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">Obstetrics & Gynecology</a></li>
                    <li><a href="#">Orthopedics</a></li>
                    <li><a href="#">Pulmonology</a></li>
                    <li><a href="#">ENT</a></li>
                    <li><a href="#">Dermatology</a></li>
                    <li><a href="#">Laproscopic Surgery</a></li>
                    <li><a href="#">Pediatric & Neonatology</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">Quick Links</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="home-modern.html">Home</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="doctors-grid.html">Team</a></li>
                    <li><a href="contact-us.html">Contacts</a></li>
                    <li><a href="#">Blogs</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="footer-widget-contact" style="padding: 32px 9px">
                <h6 class="footer-widget__title color-heading">Quick Contacts</h6>
                <ul class="contact-list list-unstyled">
                  <li>If you have any questions or need help, feel free to contact with our team.</li>
                  <li>
                    <div style="display: flex;gap: 10px;">
                      <div><a href="tel:6364444988 " class="phone__number">
                          <i class="icon-phone"></i> <span>6364444988 </span>
                        </a></div>
                      <div>
                        <a href="tel:9008049699 " class="phone__number">
                          <i class="icon-phone"></i> <span>9008049699 </span>
                        </a>
                      </div>
                    </div>
                    </li>
                  <li>
                    <div style="display: flex;gap: 10px">
                      <div><a href="tel:08029727745 " class="phone__number">
                          <i class="icon-phone"></i> <span>08029727745 </span>
                        </a></div>
                      <div>
                        <a href="tel:08029727746 " class="phone__number">
                          <i class="icon-phone"></i> <span>08029727746 </span>
                        </a>
                      </div>
                    </div>
                    </li>
                    
                    <li>
                    <a href="mailto:goodwellhospital2025@gmail.com" class="phone__number">
                      <i class="fas fa-envelope"></i> <span>goodwellhospital2025 <br> @gmail.com</span>
                    </a>
                  </li>
                  <li class="color-body">56-04 cavalier tower dr Bender layout opp to decathlon kothanur bengaluru 560077</li>
                </ul>
                <div class="d-flex align-items-center">
                  <a href="https://maps.app.goo.gl/7StUN1Bw1AnGEM627" class="btn btn__primary btn__link mr-30">
                    <i class="icon-arrow-right"></i> <span class="text-nowrap">Get Direction</span>
                  </a>
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="https://x.com/Goodwell_112">X</a></li>
                    <li><a href="https://www.facebook.com/profile.php?id=61575672526904"><i
                          class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/goodwell_hospital/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://in.pinterest.com/digigoodwellhospital/"><i class="fab fa-pinterest"></i></a>
                    </li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                  </ul><!-- /.social-icons -->
                </div>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
      <div class="footer-secondary">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 col-lg-6">
              <span class="fz-14">Copyright 2025 - Goodwell Hospital All Right Reserved</span>

            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-6 col-lg-6">
              <nav>
                <ul class="list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end mb-0">
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>

                </ul>
              </nav>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-secondary -->
    </footer>
    <!-- /.Footer -->
<!-- Footer area start -->



  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>