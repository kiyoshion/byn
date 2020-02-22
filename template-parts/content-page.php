<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package byn
 */

?>

<div class="content__entry content__entry--medium">
	<?php
	the_content();
	?>
</div>


<?php 
	if ( !is_page('contact') ):
		get_template_part( 'template-parts/content', 'cta' ); 
	endif;
?>