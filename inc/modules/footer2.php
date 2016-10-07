        <section id="contact">
          <div class="container">
            <div class="row">
              <div class="col-md-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h2 class="section-title">That's Where We Are</h2>
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="info">
                      <div class="icon">
                        <i class="mdi-maps-map"></i>
                      </div>
                      <h4>Location</h4>
                      <p>Chiswick, London, UK</p>
                      <p>City of London, UK</p>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="info">
                      <div class="icon">
                        <i class="mdi-content-mail"></i>
                      </div>
                      <h4>Email</h4>
                      <p>sales@computrad.co.uk</p>
                      <p>technical@computrad.co.uk</p>
                    </div>
                  </div>
                  <div class="clear"></div>
                  <div class="col-md-6 col-sm-6">
                    <div class="info">
                      <div class="icon">
                        <i class="mdi-action-settings-phone"></i>
                      </div>
                      <h4>Phone Number</h4>
                      <p>+44 (0) 208 997 9888</p>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="info">
                      <div class="icon">
                        <i class="mdi-action-thumb-up"></i>
                      </div>
                      <h4>Social Media</h4>
                      <p>@computrad</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
                <h2 class="section-title">How can we help?</h2>
                  <!-- Start Contact Form -->
                  <form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake" action="inc/php/main-form-process.php">
                    <div class="form-group">
                      <div class="controls">
                        <i class="mdi-action-account-box"></i>
                        <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="row nopadding">
                    <div class="col-md-6">
                    <div class="form-group">
                      <div class="controls">
                        <i class="mdi-content-mail"></i>
                        <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <div class="controls">
                        <i class="mdi-communication-phone"></i>
                        <input type="text" class="form-control" id="phone" placeholder="Phone Number" required data-error="Please enter your Phone Number">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    </div>
                    </div>
                    <div class="row nopadding">
                    <div class="col-md-8">
                    <div class="form-group">
                      <div class="controls">
                        <input type="text" id="company" class="form-control" placeholder="Company" required data-error="Please enter your company name">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                      <div class="controls">
                        <input type="number" id="company-size" class="form-control" placeholder="Company Size" required data-error="Please enter your company size">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    </div>
                    </div>
                    <div class="form-group">
                      <div class="controls">
                        <textarea form="contactForm" id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                        <div class="help-block with-errors"></div>
                      </div>  
                    </div>

                    <button type="submit" id="submit" class="btn btn-primary"></i> Send Message</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div> 
                    <div class="clearfix"></div>   

                  </form>     
                  <!-- End Contact Form -->
              </div>
            </div>
          </div>
        </section> 

        <section class="map main-feature-gray">   
        <div class="row">
        <div class="col-md-6 map-area">     
          <div class="map">
            <img src="inc/img/chiswick-loc.png">
          </div>

        </div>
        <div class="col-md-6 map-area">  
          <div class="map">
            <img src="inc/img/city-loc.png">
          </div>
        </div>
        </div>
        </section>
        <section id="footer">
            <div class="container">
              <div class="container">
                <div class="row botnav-row">
                  <div class="col-md-9 col-sm-12 col-xs-12">
                    <?php include 'inc/modules/botnav.php'; ?>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12">
                    <h3>Find us on</h3>
                    <a class="social" href="https://www.facebook.com/Computrad-247272888660363/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a class="social" href="https://twitter.com/computrad" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a class="social" href="https://plus.google.com/b/103801365996110305265/+ComputradUk/" target="_blank"><i class="fa fa-google-plus"></i></a>
                    <a class="social" href="https://www.linkedin.com/company/1086647" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>  
            </div>      
            <!-- Go to Top Link -->
          </section> 

          <section id="copyright">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <p class="copyright-text">
                    Computrad (Europe) Holdings Ltd - Company Number: 07765328 - Trading as Computrad - <a href="../privacy.php">Our Privacy Policy</a>
                  </p>
                </div>
              </div>
            </div>
          </section>     
        </div>  