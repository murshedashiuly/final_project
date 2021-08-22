

       
    
    <!-- Page title -->
    <section class="page-title" style="background-image:url(<?=base_url()?>asset/images/background/3.jpg)">
        <div class="container">
            <div class="outer-box">
                <h1>Contact Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-3.html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </section>

    

    <!-- Contact section -->
    <section class="contact-section sp-two">
        <div class="rotate-image">
            <img class="rotate-me" src="<?=base_url()?>asset/images/resource/testi.png" alt="">
        </div>
        <div class="container">
            <div class="contact-info">
                <div class="sec-title centered">
                    <h4>Contact</h4>
                    <h1>Get In Touch</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info-block">
                            <h5>Address</h5>
                            <div class="text">New York City Center, West 55th Street, New York</div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info-block">
                            <h5>Email</h5>
                            <div class="text"><a href="mailto:info@yourmail.com">info@yourmail.com</a></div>
                            <div class="text"><a href="mailto:themetona@gmail.com">themetona@gmail.com</a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-info-block">
                            <h5>Phone</h5>
                            <div class="text"><a href="tel:+1 111 222 888">+1 111 222 888</a></div>
                            <div class="text"><a href="tel:+1 222 333 999">+1 222 333 999</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="default-form-area">
                <div class="sec-title centered mb-20">
                    <h1>Contact Form</h1>
                </div>
                <form id="contact-form" name="contact_form" class="contact-form" action="https://muzaddidul.com/Corola/inc/sendmail.php" method="post">
                    <div class="row clearfix">
                        <div class="col-md-6 column">        
                            <div class="form-group">
                                <input type="text" name="form_name" class="form-control" value="" placeholder="Name" required="">
                            </div>
                        </div>
                        <div class="col-md-6 column">
                            <div class="form-group">
                                <input type="email" name="form_email" class="form-control required email" value="" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="col-md-6 column">
                            <div class="form-group">
                                <input type="text" name="form_phone" class="form-control" value="" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6 column">
                            <div class="form-group">
                                <input type="text" name="form_subject" class="form-control" value="" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md-12 column">
                            <div class="form-group">
                                <textarea name="form_message" class="form-control textarea required" placeholder="Message..."></textarea>
                            </div>
                        </div>                                            
                    </div>
                    <div class="contact-section-btn center">
                        <div class="form-group style-two">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                            <button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait...">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End form -->
        </div>
    </section>



    <!-- map section -->
    <section class="map-section">
        <div class="home-google-map">
            <div 
                class="google-map" 
                id="contact-google-map" 
                data-map-lat="40.714060" 
                data-map-lng="-74.013334" 
                data-icon-path="<?=base_url()?>asset/images/icons/map-marker.png"
                data-map-title="Chester"
                data-map-zoom="11" >
            </div>
        </div>  
    </section>
    
    
