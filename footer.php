<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cr12_marinbalabanov_traveler
 */

?>

</div>

<img src="<?php echo get_template_directory_uri(); ?>/img/footer-collage.jpg" alt="Collage of Travels" id="footer-collage" width="100%">
<footer id="colophon" class="site-footer">
	<div class="site-info">
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cr12_marinbalabanov_traveler' ) ); ?>">
			<?php
				$year = date("Y");
				printf( esc_html__( '©%s Mount Everest Travel. All Rights Reserved.', 'cr12_marinbalabanov_traveler' ), $year );
			?>
		</a>
			<?php
				printf( esc_html__( ' | Theme by %1$s. ', 'cr12_marinbalabanov_traveler' ), '<a href="http://marincomics.com">Marin Balabanov</a>' );
			?>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
