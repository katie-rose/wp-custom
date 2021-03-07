<?php
/**
 * Template Name: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<section class="home-banner">
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
    <h2>
        A community dedicated to the everyday adventurer, photo taker and story maker. Photo printing, photo
        scanning and beyond.
    </h2>
    <h3>No story untold</h3>
</section>


<?php
get_footer();