<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer text-center bg-white mt-4 text-muted">

		<section class="footer-widgets text-left">
			<div class="container-fluid">
				<div class="row">
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-1-area mb-2">
								<?php dynamic_sidebar( 'footer-1' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-2-area mb-2">
								<?php dynamic_sidebar( 'footer-2' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-3-area mb-2">
								<?php dynamic_sidebar( 'footer-3' ); ?>
							</aside>
						</div>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
						<div class="col">
							<aside class="widget-area footer-4-area mb-2">
								<?php dynamic_sidebar( 'footer-4' ); ?>
							</aside>
						</div>
					<?php endif; ?>
				</div>
				<!-- /.row -->
			</div>
		</section>

		<div id="footer-top">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<div class="join-us-footer">Join Us <a href="<?php echo bloginfo('url'); ?>/jobs/">Join Us</a></div>
					</div>
					
					<div class="col-sm-12 col-md-6">
						<div class="social-media">
							<ul>
								<li>Follow us on social media :</li>
								<li><a href="https://www.facebook.com/profile.php?id=100083370945795" target="_blank"><div class="facebook-icon">&nbsp;</div></a></li>
								<li><a href="https://www.linkedin.com/company/oopoqoo-studio/" target="_blank"><div class="linkedin-icon">&nbsp;</div></a></li>
								<li><a href="https://www.instagram.com/oopoqoostudio/" target="_blank"><div class="instagram-icon">&nbsp;</div></a></li>
								<!--<li><a href="#" target="_blank"><div class="twitter-icon">&nbsp;</div></a></li-->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="footer-bottom">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12 col-md-6 site-info">
						<div class="copyright">&#169; <?php echo date('Y'); ?> <?php printf('OOPOQOO STUDIO', 'oopoqoo' ); ?></div>
					</div><!-- .site-info -->
					<div class="col-sm-12 col-md-6">
						<?php
							wp_nav_menu( array(
								'theme_location'  => 'footer',
								'menu_id'         => 'footer-menu',
								'container'       => 'div'
							) );
						?>
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<div id="current-openings-apply-now-form" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-xl">
    	<div class="modal-content">
			<h2>Application Form</h2>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h3 id="job-title-popup"></h3>
			<div id="job-type">Full Time</div>
			<?php echo do_shortcode('[contact-form-7 id="118" title="Current Openings Form"]'); ?>
		</div>
	</div>
</div>

</body>
</html>
