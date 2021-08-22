<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Corola - Coronavirus Medical Prevention HTML Template</title>

<!-- Stylesheets -->
<link href="<?=base_url()?>asset/css/bootstrap.css" rel="stylesheet">
<link href="<?=base_url()?>asset/css/style.css" rel="stylesheet">
<link href="<?=base_url()?>asset/css/responsive.css" rel="stylesheet">

<!-- Fav Icons -->
<link rel="shortcut icon" href="<?=base_url()?>asset/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?=base_url()?>asset/images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="<?=base_url()?>asset/js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
    
    <!-- pre loader  -->
    <div class="preloader"></div>

    <!-- main header -->
    <header class="main-header">

        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="outer-box clearfix">
                    <!--Top Left-->
                    <div class="top-left float-sm-left">
                        <ul class="topbar-info">
                            <li>
                                <a href="tel:+1 111 222 888"><i class="fa fa-phone"></i> +1 111 222 888</a>
                            </li>
                            <li>
                                <a href="mailto:info@yourmail.com"><i class="fa fa-envelope"></i> info@yourmail.com</a>
                            </li>
                        </ul>   
                    </div>
                    <!--Top Right-->
                    <div class="top-right float-sm-right">
                        <div class="social-links clearfix">
                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                            <a href="#"><span class="fab fa-twitter"></span></a>
                            <a href="#"><span class="fab fa-linkedin-in"></span></a>
                            <a href="#"><span class="fab fa-pinterest"></span></a>
                            <a href="#"><span class="fab fa-skype"></span></a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <!-- Header upper -->
        <div class="header-upper">
            <div class="container clearfix">
                    
                <div class="float-left logo-outer">
                    <div class="logo"><a href="index-2.html"><img src="<?=base_url()?>asset/images/logo.png" alt="" title=""></a></div>
                </div>
                
                <div class="float-right upper-right clearfix">
                    
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown current"><a href="#">Home</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>user/home2">Homepage One</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">About</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>user/about">About Us</a></li>
                                            <li><a href="<?=base_url()?>user/team">Medical Team</a></li>
                                            <li><a href="<?=base_url()?>user/faq">FAQ's</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?=base_url()?>user/prevention">Prevention</a></li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>user/service">Services</a></li>
                                            <li><a href="<?=base_url()?>user/testimonial">Testimonial</a></li>
                                            <li><a href="<?=base_url()?>user/covid_19">Covid-19</a></li>
                                            <li><a href="<?=base_url()?>user/error">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>user/blog_2">Blog Classic</a></li>
                                            <li><a href="<?=base_url()?>user/blog_details">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?=base_url()?>user/contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav>                        
                        <!-- Main Menu End-->

                          <div class="menu-right-content">
                            <a class="navbar" style="color:blue;"><?=$this->session->userdata('username')?></a>
                        </div>
                        <div class="menu-right-content">
                             <div class="link-btn"><a href="<?=base_url()?>logout" class="theme-btn btn-style-two" data-toggle="" data-target="">Log Out</a></div>
                         </div>


                    </div>
                    
                </div>
                    
            </div>
        </div>
        <!--End Header Upper-->


        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="clearfix">
                    <!--Logo-->
                    <div class="logo float-left">
                        <a href="index-2.html" class="img-responsive"><img src="<?=base_url()?>asset/images/logo.png" alt="" title=""></a>
                    </div>
                    
                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="dropdown current"><a href="index-2.html">Home</a>
                                        <ul>
                                           <li><a href="<?=base_url()?>user/home2">Homepage One</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">About</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>user/about">About Us</a></li>
                                            <li><a href="<?=base_url()?>user/team">Medical Team</a></li>
                                            <li><a href="<?=base_url()?>user/faq">FAQ's</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?=base_url()?>user/prevention">Prevention</a></li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>user/service">Services</a></li>
                                            <li><a href="<?=base_url()?>user/testimonial">Testimonial</a>
                                            <li><a href="<?=base_url()?>user/covid_19">Covid-19</a></li>
                                            <li><a href="<?=base_url()?>user/error">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>user/blog_2">Blog Classic</a></li>
                                            <li><a href="<?=base_url()?>user/blog_details">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?=base_url()?>user/contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>
                </div>
                    
                
            </div>
        </div>
        <!--End Sticky Header-->
    </header>

