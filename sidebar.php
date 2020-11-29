<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cr12_marinbalabanov_traveler
 */

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		return;
	}

	if ( is_front_page() ) {
?>

<aside id="secondary" class="widget-area post-row">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>

<?php } else { ?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>

<?php }; ?>