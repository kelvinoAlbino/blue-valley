<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<div class="footer-content container">
					<div class="col-sm-3">
						<h3>Who are We</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<div class="col-sm-3">
						<h3>Opening Hours</h3>
							<ul class="open-hours">
								<li><strong>Monday - Friday:</strong> 6am - 7pm</li>
								<li><strong>Weekends:</strong> 7am - 6pm</li>
								<li><strong>Public Holidays:</strong> 7am - 5pm</li>
							</ul>
					</div>
					<div class="col-sm-3">
						<h3>Contact Us</h3>
						<ul class="contact-us">
							<li><i class="fa fa-phone"></i> <a href="#">011 605 1313</a></li>
							<li><i class="fa fa-envelope"></i> <a href="#">info@bvgolf.co.za</a></li>
							<li><i class="fa fa-fax"></i> <a href="#">011 123 1234</a></li>
						</ul>
					</div>
					<div class="col-sm-3">
						<h3>Connect with Us</h3>
							<ul class="social-icons">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
					</div>
				</div>

				<div id="footer-bottom">
					<div class="container clearfix">
						<p>
							2017 © Blue Valley Golf Club | Website Designed by <a href="http://gap-theory.com" target="_blank">Gap-theory</a>
						</p>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
</body>
</html>