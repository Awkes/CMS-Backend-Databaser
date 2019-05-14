<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				the_title('<h1 class="pf-title">','</h1>');
			?>

				<!-- Featured image -->
				<?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
					<div class="site-featured-image">
						<?php
							twentynineteen_post_thumbnail();
						?>
					</div>
				<?php endif; ?>

				<!-- Innehåll -->
				<div id="pf-content">
					<?=the_content();?>
				</div>

			<?
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
						'after'  => '</div>',
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
