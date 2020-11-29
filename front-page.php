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
                
            <?php
            if ( have_posts() ) : 
                if ( is_home() && ! is_front_page() ) :
                    ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
                    <?php
                endif;

                while ( have_posts() ) :
                    ?>
                <div class="post-col">
                    <?php 
                        the_post();
                        get_template_part( 'template-parts/content', get_post_type() );
                    ?>
                </div>
            <?php
                endwhile;

                the_posts_navigation();

                else:
                    get_template_part( 'template-parts/content', 'none' );
            ?>
            <?php endif; ?>

        </div>

        <div class="post-row">
            <div class="post-col-25">
                <?php get_sidebar(); ?>
            </div>
        </div>
	</main>

<?php get_footer(); ?>
