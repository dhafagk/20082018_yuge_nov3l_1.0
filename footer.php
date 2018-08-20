<footer>
		<div id="footer-content">
			<p id="copyright">copyright 2017 © yugen novel</p>
			<?php wp_nav_menu( array('theme_location' => 'footer','container' => '', 'fallback_cb' => '')) ?>
		</div>
	</footer>
	<div id="secret-container">
	<div id='shark'><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shark-baby.png" nopin = "nopin"/></div>
	<div id='slugger'><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slugger.png" nopin = "nopin"/></div>
</div>

<?php wp_footer(); ?>
</body>
</html>