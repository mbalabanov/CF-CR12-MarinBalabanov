<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cr12_marinbalabanov_traveler
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="post-row">

			<?php if ( have_posts() ) : ?>

				<header class="page-header category-title">
					<?php
					the_archive_title( '<h2 class="page-title">', '</h2>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php

				while ( have_posts() ) :
					?>
					<div class="post-col">
					<?php 
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );
					?>
					</div>
			<?php endwhile;

				the_posts_navigation();
			
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div>
	</main>

	<?php get_footer(); ?>
