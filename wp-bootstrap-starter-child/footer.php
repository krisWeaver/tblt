<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="social-icons">
				<a href="https://www.facebook.com/The-Beer-League-Tribune-484862358539112/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
				<a href="https://twitter.com/beerleaguetrib" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
				<a href="https://www.instagram.com/thebeerleaguetribune/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</div>

            <div class="site-info">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-105882356-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_footer(); ?>
</body>
</html>
