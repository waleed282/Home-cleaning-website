<?php include 'includes/header.php';?>

<section class="banner-section">
   <div class="banner-img">
   <img src="images/contact-banner.png" alt="">
  </div>
   <div class="container">
    <div class="banner-content">
    <h1>Contact</h1>
     </div>
    </div>
  </section>



  <section class="contact-us">
  <div class="container-fluid">
    <div class="row align-items-center">
      <!-- Contact Form Column -->
      <div class="col-lg-6">
        <div class="contact-form">
          <div class="row">
            <div class="col-lg-12">
              <div class="form-heading">
                <h4>CONTACT US</h4>
                <h1>Get in Touch with Us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum finibus nisl.</p>
              </div>
            </div>

            <!-- Contact Form Starts -->
            <form action="#" method="post" class="row">
              <div class="col-lg-6">
                <div class="form-group mb-3">
                  <input type="text" name="name" placeholder="Your Name" required>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group mb-3">
                  <input type="email" name="email" placeholder="Your Email" required>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group mb-3">
                  <input type="text" name="phone" placeholder="Phone Number">
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group mb-3">
                  <select name="service" required>
                    <option selected disabled>Select Service</option>
                    <option value="home">Home Cleaning</option>
                    <option value="office">Office Cleaning</option>
                    <option value="window">Window Cleaning</option>
                  </select>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="form-group mb-3">
                  <textarea name="message" id="message" rows="5" placeholder="Message" required></textarea>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="book-clean-btn">
                    <button>Submit Now  </button>
                </div>
              </div>
            </form>
            <!-- Contact Form Ends -->
          </div>
        </div>
      </div>

      <!-- Contact Image Column -->
      <div class="col-lg-6">
        <div class="contact-img">
          <img src="images/contact-image.png" alt="Contact Illustration" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="map">
    <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=melbourne+(melbourne)&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/collections/personal-trackers/">gps trackers</a></iframe></div>
</section>

<?php include 'includes/footer.php';?>   
