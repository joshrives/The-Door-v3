<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Door_v3
 */

?>
	<div class="overlay-content">

    </div>
    <div class="overlay"></div>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrap">
			<span class="tdc-copyright">The Door Church &copy;<?php echo date('Y'); ?></span>
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-links', 'menu_class' => 'footer-links four-list group' ) ); ?>
		</div>
	</footer><!-- #colophon -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="_js/functions-min.js"></script>
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58c6c0c8eae5345f"></script>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
