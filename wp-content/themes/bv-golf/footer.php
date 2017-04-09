<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				
				<div class="col-sm-3">
					<h3>Heading</h2>
				</div>
				<div class="col-sm-3">
					<h3>Heading</h2>
				</div>
				<div class="col-sm-3">
					<h3>Heading</h2>
				</div>
				<div class="col-sm-3">
					<h3>Heading</h2>
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