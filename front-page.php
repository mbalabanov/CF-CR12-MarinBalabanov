<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cr12_marinbalabanov_traveler
 */

get_header();
?>

    <img src="<?php echo get_template_directory_uri(); ?>/img/travelcollage.jpg" alt="Collage of Travels" width="100%">

	<main id="primary" class="site-main">

        <div class="post-row">
            <div class="page-wide-col">
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
            </div>
            <div class="page-side-col">
                <?php get_sidebar(); ?>
            </div>
        </div>
	</main>

<?php get_footer(); ?>
