<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital@0;1&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
    <?php do_action( 'wp_body_open' ); ?>
    <div class="site" id="page">

        <!-- ******************* The Navbar Area ******************* -->

        <div id="top-bar">
            <div class='login-register-mobile'>
                <i class="fa fa-user-circle"> </i>
                Login
            </div>
            <div class="contact-info">
                <div class="contact-item phone">
                    <i class="fa fa-phone"></i>
                    420-614-8004
                </div>
                <div class="contact-item email">
                    <i class="fa fa-envelope-o"> </i>
                    hello@mailman.com
                </div>
                <div class="contact-item search">
                    <i class="fa fa-search"> </i>
                    <input type='text' placeholder='Search' />
                </div>
            </div>
            <div class="shipping-info">
                <i class="fa fa-truck"> </i>
                Free shipping on orders over $100
            </div>
            <div class='login-register'>
                Login / Register
                <i class="fa fa-user-circle"> </i>
            </div>
            <div class='mobile-menu'>
                Menu
                <i class="fa fa-bars"> </i>
            </div>
        </div>

        <div id="wrapper-navbar">

            <nav id="main-nav" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">

                <h2 id="main-nav-label" class="sr-only">
                    <?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
                </h2>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- The WordPress Menu goes here -->
                <?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>

            </nav><!-- .site-navigation -->

        </div><!-- #wrapper-navbar end -->

        <div class="top-logo-holder">
            <div class="logo-title">
                <div class='logo'>
                    <img src='<?php echo get_template_directory_uri(); ?>/img/logo.png' alt='Testy Theme Logo'>
                </div>
                <div class='social-media'>
                    <a herf="#">
                        <i class='fa fa-facebook'></i>
                    </a>
                    <a herf="#">
                        <i class='fa fa-linkedin'></i>
                    </a>
                    <a herf="#">
                        <i class='fa fa-instagram'></i>
                    </a>
                </div>
            </div>
        </div>