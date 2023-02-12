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
                        <a href="https://www.instagram.com/presidentialplumbingltd/" target="_blank"><i class="fab fa-instagram"></i></a>
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

                    </div><!-- right -->

                </div><!-- max__width -->
            </div><!-- header__main -->

            <div class="post-header">
                <div class="max__width">
                    <nav class="header__nav">
                        <?php include get_stylesheet_directory().'/modules/mega-menu.php'; ?>
                    </nav><!-- header__nav -->

                    <a href="#nav_mobile" class="burger__menu">
                        <i class="fal fa-bars"></i>
                    </a>
                </div>
            </div>
		</header><!-- header -->
