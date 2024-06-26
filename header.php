<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( ' - ', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php include get_stylesheet_directory().'/modules/mega-menu-mobile.php'; ?>

	<div id="page">
		<header class="header">

            <?php if(get_field('sitewide_notice_enable', 'option')): ?>
                <div class="header--site__wide__notice">
                    <div class="max__width">
                        <?php the_field('sitewide_notice', 'option'); ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="pre-header">
                <div class="max__width">
                    <div class="contact-container">
                        <div class="contact">
                            <i class="fa fa-phone"></i>
                            <a href="tel:07957575429">07957575429</a>
                        </div>
                        <div class="contact">
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:presidential.plumbing@outlook.com">presidential.plumbing@outlook.com</a>
                        </div>
                    </div>

                    <div class="social">
                        <a href="https://www.instagram.com/presidentialplumbingltd/" target="_blank" class="insta"><i class="fab fa-instagram"></i></a>
                        <a href="https://m.facebook.com/100089734701459/" target="_blank" class="facebook"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/presidential-plumbing-7813232b5?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank" class="linkedin"><i class="fab fa-linkedin"></i></a>
                        <a href="www.tiktok.com/@presidentialplumbing" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>

            <div class="header__main">

                <div class="max__width">
                    
                    <div class="header__main--left"> 
                        <div class="logo">
                            <a href="<?php echo esc_url(home_url()); ?>" title="<?php bloginfo('name'); ?>">
                               <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/img/logo.png'); ?>" alt="<?php bloginfo('name'); ?>"/>
                            </a>
                        </div><!-- logo -->
                        
                        <div class="title">
                            <h3>Presidential Plumbing</h3>
                            <p>The Plumbing Presidents, Serving UK Residents</p>
                        </div>
                    </div><!-- left -->

                    <div class="header__main--right">
                        <a href="#" title="Google Reviews">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/img/google-reviews.png'); ?>" alt="<?php bloginfo('name'); ?>"/>
                        </a>

                        <a href="#" title="Trust Pilot">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/img/trust-pillot.png'); ?>" alt="<?php bloginfo('name'); ?>"/>
                        </a>
                    </div><!-- right -->

                </div><!-- max__width -->
            </div><!-- header__main -->

            <div class="post-header">
                <div class="max__width">
                    <nav class="header__nav">
                        <?php include get_stylesheet_directory().'/modules/mega-menu.php'; ?>
                    </nav><!-- header__nav -->

                    <a href="https://www.google.com/search?q=presidential+plumbing+potters+bar&oq=presidential+&gs_lcrp=EgZjaHJvbWUqCAgAEEUYJxg7MggIABBFGCcYOzIGCAEQRRg5MgYIAhBFGDsyBggDEEUYPDIGCAQQRRg8MgYIBRBFGDwyBggGEEUYPDIGCAcQRRg8qAIAsAIA&sourceid=chrome&ie=UTF-8#lrd=0x34b8755c4a51f89:0xd9d1367444c84555,1,,,," class="mobile" title="Google Reviews">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/img/google-reviews.png'); ?>" alt="<?php bloginfo('name'); ?>"/>
                    </a>

                    <div class="mobile-centre">
                        <a href="#nav_mobile" class="burger__menu">
                            <i class="fal fa-bars"></i>
                        </a>

                        <a href="https://presidentialplumbing.co.uk/" class="mobile">Home</a>
                    </div>

                    <a href="https://uk.trustpilot.com/review/presidentialplumbing.co.uk" class="mobile" title="Trust Pilot">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/img/trust-pillot.png'); ?>" alt="<?php bloginfo('name'); ?>"/>
                    </a>

                </div>
            </div>
		</header><!-- header -->
