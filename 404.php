<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cyberize
 */

get_header();
?>

<div id="lovehealth-404" class="content-area">
	<main id="main" class="site-main container">

		<div class="page-content text-center">

			<img src="wp-content/uploads/2019/11/Group-139.png" />
			<h3>Page not found</h3>
			<h6>We can’t find the page you’re looking for. Check out our Help Center and forums for help, or head back to home.</h6>
			<div class="button-actions">
				<a href="/" class="button-home">Home</a>
				<a href="/contact">Contact</a>
			</div>

			<!-- <div class="social mt-5 col-md-6 col-sm-6 col-6 mx-auto"> -->
				<?php // echo do_shortcode( '[Sassy_Social_Share title=""]' );  ?>
			<!-- </div> -->

		</div><!-- .page-content -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
