<?php
/**
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<style type="text/css">
#general-page-header {
  width: 100vw;
  height: 25px;
  background-color: black;
  background-image: url('<?php the_field('general_page_header_image', 'option') ?>');
  background-size: cover;
  background-position: top center;
}
</style>

<?php 
$athlete_name = bp_get_displayed_user_fullname();
// $athlete_email = bp_displayed_user_email();
$coach_name = bp_core_get_user_displayname( bp_loggedin_user_id() );
?>

<section id="general-page-header" class="text-center">
  <a class="d-none"
    href="mailto:<?php bp_displayed_user_email(); ?> ?subject=FROM <?php echo $coach_name ?>&body=Hey <?php echo $athlete_name; ?>,%0D%0A%0D%0A Give me a holla if you're interested ... Since this is College sports, you won't make any money. %0D%0A We'll do that for you. You just need to put in the work like a donkey ... hee hee... %0D%0A%0D%0A --Big Boss %0D%0A<?php echo $coach_name ?>"
    class="btn btn-danger btn-lg mt-3">
    SEND EMAIL TO ATHLETE
  </a>
  <!-- <a href="mailto:[ATHLETE-EMAIL]?subject=FROM [COACH NAME]&body=[ATHLETE-NAME], BLAH BLAH ... [COACH NAME]" class="btn btn-danger btn-lg mt-3">
		SEND EMAIL TO ATHLETE
	</a> -->
  <?php // echo bp_get_displayed_user_fullname(); ?>
  <!-- Loggedin Coach/User: <?php // echo bp_core_get_user_displayname( bp_loggedin_user_id() ); ?> -->
  <!-- Display User Email: <?php // bp_displayed_user_email(); ?> -->
</section>


<div id="page-ias" class="content-area container-fluid">
  <div class="row">
    <main id="main" class="site-main col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

    </main><!-- #main -->

  </div> <!-- END ROW -->
</div><!-- #primary -->

<?php
get_footer();