<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-container">
					<div class="footer-contact-column">
						<h3>Contact Info</h3>
						<p><i class="fa fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
						<p><i class="fa fa-telephone"></i><a href="tel:5553434567891">778-456-7891</a></p>
						<p><i class="fa fa-facebook-square"></i><i class="fa fa-twitter-square"></i><i class="fa fa-google-plus-square"></i></p>
					</div>
					<div class="footer-bus-hours-column">
						<h3>Business Hours</h3>
						<p><span class="day-of-week">Monday-Friday:</span>9am-5pm</p>
						<p><span class="day-of-week">Saturday</span>10am-2pm</p>
						<p><span class="day-of-week">Sunday</span>Closed</p>
					</div>
					<div class="footer-branding">
						<a href="inhabitent/home">
							<img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-text.svg" alt="Inhabitent logo"/>
						</a>
					</div>
					<div class="site-info">
						<p>Copyright &copy; 2016 Inhabitent</p>
					</div><!-- .site-info -->
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
