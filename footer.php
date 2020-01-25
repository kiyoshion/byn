<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package byn
 */

?>
		</div>
	</main>

	<footer class="footer">
		<div class="footer__info">
			<span class="footer__copy"> 2020 &copy; </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '%1$s', 'byn' ), '<a href="https://nohaco.com">nohaco</a>' );
				?>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
