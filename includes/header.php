<?php include 'head.php';?>
    


<style>

/* Hamburger Icon */
.hamburger {
  padding: 15px;
  cursor: pointer;
  position: relative;
  z-index: 1001;
  background-color: #333;
  width: fit-content;
}

.hamburger-container span {
  display: block;
  width: 25px;
  height: 3px;
  background: white;
  margin: 5px 0;
}

/* Menu Overlay */
.menu-overlay {
  position: fixed;
  top: 120px;
  left: 22px;
  width: 100%;
  height: 100%;
  /* background-color: rgba(33, 33, 33, 0.6); */
  display: none;
  justify-content: flex-end;
  align-items: flex-start;
  padding: 20px 0px 0px 0px;
  z-index: 10;
}

.menu-overlay.open {
  display: flex;
  justify-content: left;
}

/* Close Button */
.close-btn {
  position: absolute;
  top: 15px;
  right: 15px;
  font-size: 22px;
  background: white;
  padding: 5px 10px;
  border-radius: 3px;
  cursor: pointer;
}

/* Menu List Box */
.menu-list {
  list-style: none;
  padding: 0;
  background: white;
  box-shadow: 0 0 10px rgba(0,0,0,0.2);
  width: 92vw;
}

.menu-list li {
}

.menu-list li a {
  display: block;
  padding: 10px 20px;
  color: #3f444b;
  text-decoration: none;
}

/* Active Menu Item */
.menu-list li.active {
  background: #333;
}

.menu-list li.active a {
  color: white;
}
 
 
 .hamburger-toggle {
  /* padding: 15px; */
  cursor: pointer;
  /* background-color: #333; */
  /* width: fit-content; */
  /* position: relative; */
  z-index: 999999999;
}

/* Hamburger icon (3 lines) */
#hamburger-icon span {
  display: block;
  width: 25px;
  height: 3px;
  background: white;
  margin: 5px 0;
}

/* Close icon hidden by default */
#close-icon {
  display: none;
  color: white;
  font-size: 22px;
}
 </style> 

    <!-- MOBILE-MENU START -->
    <div class="menu-overlay" id="menu">
    <ul class="menu-list">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="about-us.php">About Us</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="careers.php">Careers</a></li>
    <li><a href="testimonial.php">Testimonials</a></li>
    <li><a href="contact-us.php">Contact</a></li>
    </ul>
  </div>

    <div class="mobile-menu">
        <div class="mobile-close">
            <a href="javascript:void(0)" id="menu-close"><i class="fa fa-times"></i></a>
        </div>
        <div class="mobile-menu-body" id="mobile-menu-body"></div>
    </div>

    <!-- MOBILE-MENU END -->

    <!-- HEADER CSS START -->
    <header class="main-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="header-logo">
                        <a href="index.php"><img src="images/logo.png" alt="logo"></a>

                        <div class="hamburger-toggle d-block d-lg-none d-sm-block" onclick="toggleMenu()">
                                  <div id="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                  </div>
                                  <div id="close-icon">✖</div>
                            </div>
               
                    </div>
                </div>
            
                <div class="col-lg-6 col-md-6  d-lg-block ">
                    <div class="header-navbar">
                        <ul class="list-item">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="careers.php">Careers</a></li>
                            <li><a href="testimonial.php">Testimonials</a></li>
                            <li><a href="contact-us.php">Contact</a></li>
                        </ul>  
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-3">
                    <div class="book-clean-btn header-btn text-end">
                        <button>Book a Cleaning</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->
