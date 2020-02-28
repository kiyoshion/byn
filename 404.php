<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package byn
 */

get_header();
?>

		<div id="main" class="content">

			<section class="error-404 not-found bg bg--full">
				<div>
					<h2>404 Not Found.</h2>
					<div class="content__item-anchor">
						<a data-barba-prevent href="<?php echo esc_url( home_url( '/' ) );?>">Back to home</a>
					</div>
				</div>
			</section>

</div>

<?php
get_footer();
