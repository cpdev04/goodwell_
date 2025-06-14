document.addEventListener("DOMContentLoaded", () => {
    const header = `
    <header class="header header-layout2">
      <div class="header-topbar ">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                  <li>
                    <i class="icon-phone"></i><a href="tel:9008049699">Emergency Line: +91 9008049699</a>
                  </li>
                  <li>
                    <i class="icon-location"></i><a href="https://maps.app.goo.gl/7StUN1Bw1AnGEM627">56-04 cavalier tower dr Bender layout opp to decathlon kothanur bengaluru 560077</a>
                  </li>
                  <li>
                    <i class="icon-clock"></i><a href="contact-us.html">Mon - Sun: 24 X 7</a>
                  </li>
                </ul>
                <div class="d-flex">
                  <ul class="social-icons list-unstyled mb-0 mr-30">
                     <li><a href="https://www.facebook.com/profile.php?id=61575672526904"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/goodwell_hospital/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://x.com/Goodwell_112">X</a></li>
                    <li><a href="https://in.pinterest.com/digigoodwellhospital/"><i class="fab fa-pinterest"></i></a>
                    </li>
                    <li><a href="https://in.pinterest.com/digigoodwellhospital/"><i class="fab fa-youtube"></i></a>
                    </li>
                  </ul><!-- /.social-icons -->

                </div>
              </div>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-top -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="assets/images/logo/goodwell_logo.jpeg" class="logo-dark logo-w" alt="goodwell logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav mx-auto">
              <li class="nav__item">
                <a href="index.html" class=" nav__item-link">Home</a>
              </li>
              <li class="nav__item ">
                <a href="about-us.html" class=" nav__item-link">About Us</a>
              </li>
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Services</a>
                <ul class="dropdown-menu p-3" style="min-width: 600px;">
                  <div class="row">
                    <div class="col-12 col-md-4">
                      <li class="nav__item"><a href="obstetrics-gynecology.html" class="nav__item-link">Obstetrics & Gynecology</a></li>
                      <li class="nav__item"><a href="ent.html" class="nav__item-link">ENT</a></li>
                      <li class="nav__item"><a href="pediatric.html" class="nav__item-link">Pediatric & Neonatology</a></li>
                      <li class="nav__item"><a href="internal-medicine.html" class="nav__item-link">Internal Medicine</a></li>
                      <li class="nav__item"><a href="cardiology.html" class="nav__item-link">Cardiology</a></li>
                    </div>
                    <div class="col-12 col-md-4">
                      <li class="nav__item"><a href="orthopedic.html" class="nav__item-link">Orthopedics</a></li>
                      <li class="nav__item"><a href="dermatology.html" class="nav__item-link">Dermatology</a></li>
                      <li class="nav__item"><a href="plastic-surgery.html" class="nav__item-link">Plastic Surgery</a></li>
                      <li class="nav__item"><a href="anesthesiology.html" class="nav__item-link">Anesthesiology</a></li>
                      <li class="nav__item"><a href="#" class="nav__item-link">Urology</a></li>
                    </div>
                    <div class="col-12 col-md-4">
                      <li class="nav__item"><a href="pulmonology.html" class="nav__item-link">Pulmonology</a></li>
                      <li class="nav__item"><a href="#" class="nav__item-link">Laproscopic Surgery</a></li>
                      <li class="nav__item"><a href="neurology.html" class="nav__item-link">Medical Neurology</a></li>
                      <li class="nav__item"><a href="neuro-surgery.html" class="nav__item-link">Neuro Surgery</a></li>
                      <li class="nav__item"><a href="#" class="nav__item-link">Sports Medicine</a></li>
                    </div>
                  </div>
                </ul>

              </li>
              <li class="nav__item">
                <a href="rehabcare.html" class=" nav__item-link ">rehabilitation Center</a>
              </li>
              <li class="nav__item">
                <a href="our-expert.html" class=" nav__item-link ">Our Expert</a>
              </li>

              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link active">Resources</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="gallery.html" class=" nav__item-link ">Gallery</a>
                  </li>
                  <li class="nav__item">
                     <a href="#" class=" nav__item-link ">Blog</a>
                  </li>
                </ul>
              </li>

         
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="contact-us.html" class="nav__item-link">Contacts</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
          <div class="d-none d-xl-flex align-items-center position-relative ml-30">
             <!-- /.miniPopup-departments -->
            <a href="appointment.html" class="btn btn__primary btn__rounded ">
              <i class="icon-calendar"></i>
              <span>Book Appointment</span>
            </a>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header>
  `;
    document.getElementById("header").innerHTML = header;
});
