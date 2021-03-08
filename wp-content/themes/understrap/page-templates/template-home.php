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
    <h2>
        A community dedicated to the everyday adventurer, photo taker and story maker. Photo printing, photo
        scanning and beyond.
    </h2>
    <h3>No story untold.</h3>
</section>

<section class="home-call-to-action">
    <div class="row">
        <div class="col-lg-4">
            <a href="#" class="action">
                <div class="title">Fine Art Prints</div>
                <div class="img"></div>
            </a>
        </div>

        <div class="col-lg-4">
            <a href="#" class="action">
                <div class="title">Every Day Photo Prints</div>
                <div class="img"
                    style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/photo-2.jpg);">
                </div>
            </a>
        </div>

        <div class="col-lg-4">
            <a href="#" class="action">
                <div class="title">Beyond Photography</div>
                <div class="img"
                    style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/photo-3.jpg);">
                </div>
            </a>
        </div>
    </div>
</section>

<section class="home-about">
</section>

<?php
get_footer();