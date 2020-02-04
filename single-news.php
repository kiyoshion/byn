<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package byn
 */

get_header();
?>

	<div class="content" id="main">
		<div class="content__entry content__entry--medium">

		<?php
		while ( have_posts() ) :
			the_post();

			the_content();

		endwhile; // End of the loop.
		?>
		</div>
	</div>

<?php
get_sidebar();
get_footer();
