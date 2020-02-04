<?php
/**
 * Template part for displaying mag archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package byn
 */

?>

<div class="content__item">
<!-- <div class="item" style="height:100vh;"> -->
	<a class="content__item-link" href="<?php the_permalink(); ?>"></a>

		<?php 
		echo '<div class="content__item-thumbnail">';
		the_post_thumbnail('full', array('class' => 'content__item-thumbnail-inner')); 
		echo '</div>';
		$thumb_1 = post_custom('sub_thumbnail_1');
		$upload_dir = wp_upload_dir();
		echo '<div class="content__item-sub-thumbnail"><img src="' . $upload_dir['baseurl'] . '/' . $thumb_1 . '" alt=""></div>';
	?>

	<?php /*
		$thumb_1 = post_custom('sub_thumbnail_1');
		$upload_dir = wp_upload_dir();
		echo '<div class="item__img-wrap"><img class="item__img" src="' . $upload_dir['baseurl'] . '/' . $thumb_1 . '" alt=""></div>';
		echo '<div class="item__img-wrap item__img-wrap--next"><img class="item__img" src="' . $upload_dir['baseurl'] . '/' . $thumb_1 . '" alt=""></div>';
*/	?>

	<div class="content__item-inner">
		<?php
			echo '<div class="content__item-case"><span>' . post_custom('mag_id') . '</span></div>';
			the_title( '<h2 class="content__item-ttl">', '</h2>' );
			echo '<p class="content__item-txt">' . get_the_excerpt() . '</p>';
			?>
		<span class="content__item-anchor">VIEW DEATIL</span>
	</div>
</div>
