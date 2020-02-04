<?php
/**
 * Template part for displaying hero section.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package byn
 */

?>

<?php if ( is_page() || is_single() ) : ?>

<div class="hero hero--has-no-thumb">
	<div class="hero__bg"></div>
	<h1 class="hero__ttl"><?php the_title(); ?></h1>
</div>

<?php elseif ( is_post_type_archive() ) :
	$post_type = get_post_type();
	$obj = get_post_type_object($post_type); ?>

<div class="hero hero--has-no-thumb">
	<div class="hero__bg"></div>
	<h1 class="hero__ttl"><?php echo $obj->labels->name; ?></h1>
</div>

<?php endif; ?>