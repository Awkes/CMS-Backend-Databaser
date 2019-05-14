<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<h1 class="pf-title">404 - Error</h1>
	<div id="pf-content">

			<h2 class="pf-error"><?=_e( 'Oops! Sidan kan inte hittas!', 'twentynineteen' );?></h2>
			<p class="pf-error"><?=_e( 'Den här sidan finns inte, testa sök-funktionen för att hitta det du letar efter...', 'twentynineteen' ); ?></p>		
			<?php get_search_form(); ?>
			
	</div>

<?php
get_footer();
