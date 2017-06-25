<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<div class="footer-content container">
					<div class="col-sm-4">
						<h3>Who are We</h3>
						<p>
							The Blue Valley Golf Course is part of a residential estate to the north Johannesburg, not too far from the famous Kyalami racetrack. Constructed to the specification of the Gary Player Design Group and opened in 1998, the course has many surprising elevation changes throughout as holes rise and fall over gently undulating terrain.
						</p>
					</div>
					<div class="col-sm-4">
						<h3>Opening Hours</h3>
							<ul class="open-hours">
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Monday - Friday:</strong> 6am - 7pm</li>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Weekends:</strong> 7am - 6pm</li>
								<li><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>Public Holidays:</strong> 7am - 5pm</li>
							</ul>
					</div>
					<div class="col-sm-4">
						<h3>Contact Us</h3>
						<ul class="contact-us">
							<li><i class="fa fa-phone"></i> <a href="#">011 605 1313</a></li>
							<li><i class="fa fa-envelope"></i> <a href="#">info@bvgolf.co.za</a></li>
							<li><i class="fa fa-fax"></i> <a href="#">011 123 1234</a></li>
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