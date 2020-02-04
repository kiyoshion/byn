<?php
/**
 * Template part for displaying mag archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package byn
 */

?>

<div class="news__list">
	<div class="news__card">
		<a class="news__link" href="<?php the_permalink(); ?>"></a>
		<span class="news__date"><?php the_date(); ?></span>
		<p class="news__ttl"><?php the_title(); ?></p>
	</div>
</div>
