<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div id="footer-sidebar" class="footer-sidebar widget-area" role="complementary"> 
		<?php dynamic_sidebar( 'footer_sidebar' ); ?>
		</div>



		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
<center>
			<?php printf( '<a href=https://github.com/lyndon160/WPChildTheme> Custom build theme </a> powered by WordPress. Contact me at:   ')?>
<a href="mailto:l.fawcett1@lancaster.ac.uk?Subject=Website%20Contact" target="_top"><?php printf('l.fawcett1@lancaster.ac.uk')?></a>
</center>

		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
