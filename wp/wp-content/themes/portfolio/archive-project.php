<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

		<?php if ( have_posts() ) : ?>
			<h1 class="pf-title"><?=post_type_archive_title( '', false );?></h1>
			<div id="pf-projects">
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

			?>

				<div id="post-<?php the_ID(); ?>">
					<?php twentynineteen_post_thumbnail(); ?>
					<div class="entry-header">
						<?php
							the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
						?>
					</div><!-- .entry-header -->
				</div><!-- #post-${ID} -->
				
			<?

				// End the loop.
			endwhile;
			?>
			</div>
			<?
			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
		
<?php
get_footer();
