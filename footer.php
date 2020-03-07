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
		<div class="footer__info footer__inner">
			<span class="footer__copy">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '%1$s', 'byn' ), '<a href="https://nohaco.com">nohaco</a>' );
				?>
				 ALL RIGHTS RESERVED.
			</span>
		</div>
	</footer>

	<div class="menu-toggle">
		<span></span>
		<span></span>
	</div>
	<div class="modal-menu" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.svg');">
		<div class="modal-menu__inner">
		<?php
				wp_nav_menu( array(
					'menu' => 'modal'
				) );
				?>
		</div>
	</div>
	<div class="mask"></div>

</div>

<div class="stalker"></div>
<?php wp_footer(); ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T89J4QM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</body>
</html>
