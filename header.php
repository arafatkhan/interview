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
    
    
    <!-- ====Owl Carousel Stylesheet==== -->


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
                                <?php 
                                       /**
                                        * Displays a navigation menu
                                        * @param array $args Arguments
                                        */
                                        $args = array(
                                            'theme_location' => 'primary',
                                            'menu_class' => 'nav navbar-nav',
                                            'menu_id' => '',
                                            'echo' => true,
                                            'fallback_cb' => 'default_menu',
                                            'walker' => new WP_Bootstrap_Navwalker()
                                        );
                                    
                                        wp_nav_menu( $args );
                                 ?>
                        <!-- Navigation Links End -->
                    </div>
                </div>
            </div>
        </nav>