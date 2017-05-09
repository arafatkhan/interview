<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Interview
 * @since nterview 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title><?php bloginfo('title' ); ?></title>

    <!-- ====Favicons==== -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">
    
    
    <!-- ====Google Font Stylesheet==== -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- ====Font Awesome Stylesheet==== -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- ====Bootstrap Stylesheet==== -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- ====Owl Carousel Stylesheet==== -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css" rel="stylesheet">
    
    <!-- ====bxSlider Stylesheet==== -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.min.css" rel="stylesheet">
    
    <!-- ====Main Stylesheet==== -->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    
    <!-- ====Responsive Stylesheet==== -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/responsive-style.css" rel="stylesheet">

    <!-- ====Main Color Scheme CSS==== -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/main-color-1.css" rel="stylesheet" type='text/css' id="mainColorScheme">

    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
    
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader--bounce">
            <div class="preloader-bouncer--1"></div>
            <div class="preloader-bouncer--2"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Navigation Area Start -->
        <nav id="navigation">
            <div class="contact-bar">
                <div class="container">
                    <div class="social-icons pull-left">
                        <ul class="nav nav-tabs">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="contact-bar--text pull-left">
                        <p><a href="mailto:support@example.com"><i class="fa fm fa-envelope-o"></i>support@example.com</a></p>
                    </div>
                    <div class="contact-bar--text pull-left">
                        <p><a href="tel:+444000000000"><i class="fa fm fa-phone"></i>+444-000-000-000</a></p>
                    </div>
                    <div class="contact-bar--text text-capitalize pull-right">
                        <p><a href="login.html"><i class="fa fm fa-user"></i>login</a><span class="slash">/</span><a href="http://billing.ywhmcs.com/register.php?systpl=OrDomainCV1"><i class="fa fm fa-user-plus"></i>signup</a></p>
                    </div>
                </div>
            </div>
            <div class="navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Logo Start -->
                        <a href="index.html" class="navbar-brand"><span><i class="fa fa-globe"></i> Or</span>Domain</a>
                        <!-- Logo End -->
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right reset-padding">
                        <!-- Navigation Links Start -->
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.html">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hosting <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="shared-hosting.html">Shared</a></li>
                                    <li><a href="reseller-hosting.html">Reseller</a></li>
                                    <li><a href="vps-hosting-1.html">VPS Style 1</a></li>
                                    <li><a href="vps-hosting-2.html">VPS Style 2</a></li>
                                    <li><a href="dedicated-hosting-1.html">Dedicated Style 1</a></li>
                                    <li><a href="dedicated-hosting-2.html">Dedicated Style 2</a></li>
                                </ul>
                            </li>
                            <li><a href="domains.html">Domains</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="datacenter.html">Datacenter</a></li>
                                    <li><a href="testimonial.html">Testimonial</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="affiliate.html">Affiliate</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog_sidebar-left.html">Blog Sidebar Left</a></li>
                                    <li><a href="blog_sidebar-right.html">Blog Sidebar Right</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                        <!-- Navigation Links End -->
                    </div>
                </div>
            </div>
        </nav>