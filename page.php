<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cr12_marinbalabanov_traveler
 */

get_header();
?>

	<main id="primary" class="site-main">

	<div class="post-row">
		<div class="page-wide-col">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile;
			?>
		</div>
		<div class="page-side-col">
			<?php get_sidebar(); ?>
		</div>
	</div>


	</main>

<?php
get_footer(); ?>
