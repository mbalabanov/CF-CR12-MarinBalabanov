<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cr12_marinbalabanov_traveler
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="post-row">
			<div class="page-wide-col">
				<section class="error-404 not-found ">
					<header class="page-header category-title">
						<h2 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'cr12_marinbalabanov_traveler' ); ?></h2>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'cr12_marinbalabanov_traveler' ); ?></p>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</div>
			<div class="page-side-col">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</main><!-- #main -->

<?php get_footer(); ?>