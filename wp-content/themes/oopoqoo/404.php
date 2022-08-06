<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>

<?php
	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>	
	<div class="banner-image">
		<?php $banner_img_src = get_template_directory_uri() ."/assets/images/404-main-image.jpg"; ?>
		<img src="<?php echo $banner_img_src; ?>" alt="404 Page" />
		<div class="banner-overlap-content-404">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/404-error.png" alt="404 Icon" />
			<a href="<?php echo bloginfo('url'); ?>">Go to home</a>
		</div>
	</div>	
<?php
get_footer();
