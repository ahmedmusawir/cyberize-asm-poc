<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cyberize
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?>>
  <section class="post-lovehealth">

    <figure class="featured-img-holder">
      <?php cyberize_post_thumbnail(); ?>
    </figure>

    <div class="entry-content container-fluid">

      <!--<h1 class="blog-index-title col-sm-6 col-md-3 col-lg-3 text-center">
				<?php //the_field('blog_index_title', 'option') ?>
				BLOG POST
			</h1>
			<div class="long-underline"></div>-->

      <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-8">

          <main class="">
            <!-- CATEGORY -->
            <div class="FL-post-item-footer d-none">
              <?php cyberize_entry_footer(); ?>
            </div>

            <?php
						if ( is_singular() ) :
							the_title( '<h1 class="entry-title mx-auto">', '</h1>' );
							// the_title( '<h1 class="entry-title text-center">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title mx-auto"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;

						if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta pl-2 mb-5 d-none">
              <?php
								cyberize_posted_by();
								cyberize_posted_on();
								cyberize_post_commetnts_count();
							?>
            </div><!-- .entry-meta -->
            <?php
						endif; ?>

          </main>


          <?php
						the_content();


						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
        </div> <!-- 8 COLS END -->
        <div class="col-sm-12 col-md-12 col-lg-4">

          <?php get_sidebar(); ?>

        </div> <!-- 4 COLS END -->

      </div>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
    </footer><!-- .entry-footer -->
  </section>
</article><!-- #post-<?php the_ID(); ?> -->