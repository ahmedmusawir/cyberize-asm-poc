<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moose_Framework_2
 */

get_header(); ?>


<section id="BLOCK1">

	<?php get_template_part( '_cyberize-modules/archive-members-index-lovehealth' ); ?>
	<?php //get_template_part( '_cyberize-modules/archive-index-freeman' ); ?>

</section>


<?php
// get_sidebar();
get_footer();