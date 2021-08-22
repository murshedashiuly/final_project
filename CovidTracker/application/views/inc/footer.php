  <!--Main Footer-->
    <footer class="main-footer" style="background-image:url(<?=base_url()?>asset/images/background/bg1.jpg);">
        <div class="border-img">
            <img src="<?=base_url()?>asset/images/resource/footer-b.png" alt="">
        </div>
        <div class="rotate-image">
            <img class="rotate-me" src="<?=base_url()?>asset/images/resource/rt4.png" alt="">
        </div>
        <div class="container">
            <div class="row clearfix">

                <!--Big Column-->
                <div class="big-column col-lg-6 col-md-12">
                    <div class="row clearfix">
                    
                        <!--Footer Column-->
                        <div class="footer-column col-lg-8 col-md-6">
                            <div class="footer-widget logo-widget">
                                <div class="footer-logo"><a href="index-2.html"><img src="<?=base_url()?>asset/images/logo.png" alt=""></a></div>
                                <div class="widget-content">
                                    <div class="text"> Consectetur adipisicing elit sed do ei usmod tempor incididunt.enim minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip
                                    </div>
                                    
                                    <ul class="social-icon-one">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                        <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                                        <li><a href="#"><span class="fab fa-skype"></span></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-6">
                            <div class="footer-widget links-widget">
                                <h2>Quick links</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="blog-details.html">Blog</a></li>
                                        <li><a href="prevention.html">Prevention</a></li>
                                        <li><a href="contact.html">Contact </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-lg-6 col-md-12">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6">
                            <h2>Latest News</h2>
                            <!--Latest News-->
                            <div class="posts-widget">
                                <div class="posts">
                                    <div class="post">
                                        <figure class="post-thumb"><img src="<?=base_url()?>asset/images/resource/flp1.jpg" alt=""></figure>
                                        <div class="desc-text"><a href="blog-details.html">Use masks to avoid Coronaviruses</a></div>
                                        <div class="time">02 Apr 2020</div>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><img src="<?=base_url()?>asset/images/resource/flp2.jpg" alt=""></figure>
                                        <div class="desc-text"><a href="blog-details.html">Do not delay if the symptoms appear </a></div>
                                        <div class="time">02 Apr 2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6">
                            <h2>Instagram</h2>
                            
                            <div class="footer-widget gallery-widget">
                                <div class="row clearfix">
                                    <figure class="image"><a href="<?=base_url()?>asset/images/resource/fg1.jpg" data-fancybox-group="instagram-gallery" class="lightbox-image" title="Caption Here"><img src="<?=base_url()?>asset/images/resource/fg1.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="<?=base_url()?>asset/images/resource/fg2.jpg" data-fancybox-group="instagram-gallery" class="lightbox-image" title="Caption Here"><img src="<?=base_url()?>asset/images/resource/fg2.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="<?=base_url()?>asset/images/resource/fg3.jpg" data-fancybox-group="instagram-gallery" class="lightbox-image" title="Caption Here"><img src="<?=base_url()?>asset/images/resource/fg3.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="<?=base_url()?>asset/images/resource/fg4.jpg" data-fancybox-group="instagram-gallery" class="lightbox-image" title="Caption Here"><img src="<?=base_url()?>asset/images/resource/fg4.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="<?=base_url()?>asset/images/resource/fg5.jpg" data-fancybox-group="instagram-gallery" class="lightbox-image" title="Caption Here"><img src="<?=base_url()?>asset/images/resource/fg5.jpg" alt=""></a></figure>
                                    <figure class="image"><a href="<?=base_url()?>asset/images/resource/fg6.jpg" data-fancybox-group="instagram-gallery" class="lightbox-image" title="Caption Here"><img src="<?=base_url()?>asset/images/resource/fg6.jpg" alt=""></a></figure>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                    
            </div>

        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="copyright">&copy; 2020 Corola All Rights Reserved.</div>
        </div>
    </footer>
    <!--End Main Footer-->

    <!-- start appointment popup-->
    <!-- <div class="modal fade appointment" id="appointment" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="appointment-inner">
                    
                    <?=$this->session->flashdata('success')?>
                    <form id="appointment-form" name="appointment_form" class="appointment-form" action="#" method="post">
                        <div class="column"> 

                           <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" value="<?=set_value('name')?>" placeholder="Enter Name" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="error"><?=form_error('name')?></div>

                        </div>
                        
                        <div class="column">

                         <div class="form-group">
                            <label for="exampleInputEmail1">Mobile</label>
                            <input type="text" name="mobile" class="form-control" value="<?=set_value('mobile')?>" placeholder="Enter Mobile" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="error"><?=form_error('mobile')?></div>

                        </div>
                       
                        
                        <div class="column">

                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" value="<?=set_value('password')?>" placeholder="Enter Password😊" id="exampleInputPassword1">
                          </div>
                          <div class="error"><?=form_error('password')?></div>

                        </div>   

                        <div class="column">

                          <div class="form-group">
                            <label for="exampleInputPassword1">Verify Password</label>
                            <input type="password" name="verify_password"  class="form-control" value="<?=set_value('verify_password')?>" placeholder="Enter Verify Password" id="exampleInputPassword1">
                          </div>
                         <div class="error"><?=form_error('verify_password')?></div>


                        </div>   

                        <div class="contact-section-btn">
                            <div class="form-group style-two m-0">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait...">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end appointment popup-->


</div>
<!--End pagewrapper--> 

<!-- Scroll Top Button -->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</button>
    

<!-- jequery plugins -->

<script src="<?=base_url()?>asset/js/jquery.js"></script>
<script src="<?=base_url()?>asset/js/popover.js"></script>
<script src="<?=base_url()?>asset/js/bootstrap.min.js"></script>

<script src="<?=base_url()?>asset/js/wow.js"></script>
<script src="<?=base_url()?>asset/js/owl.js"></script>
<script src="<?=base_url()?>asset/js/validate.js"></script>
<script src="<?=base_url()?>asset/js/mixitup.js"></script>
<script src="<?=base_url()?>asset/js/isotope.js"></script>
<script src="<?=base_url()?>asset/js/appear.js"></script>
<script src="<?=base_url()?>asset/js/jquery.fancybox.js"></script>
<script src="<?=base_url()?>asset/js/jquery.background-video.js"></script>
<script src="<?=base_url()?>asset/js/jquery.mCustomScrollbar.min.js"></script>

<script src="<?=base_url()?>asset/js/script.js"></script>

</body>
</html>