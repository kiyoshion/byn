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
<?php /*?>	<a class="content__item-link" href="<?php the_permalink(); ?>"></a><?php */?>

		<?php 
		echo '<div class="content__item-thumbnail">';
		the_post_thumbnail('full', array('class' => 'content__item-thumbnail-inner')); 
		echo '</div>';
		// $thumb_1 = post_custom('sub_thumbnail');
		$sub_thumb = get_field( 'sub_thumbnail' );
		$upload_dir = wp_upload_dir();
		echo '<div class="content__item-sub-thumbnail"><img src="' . $upload_dir['baseurl'] . '/' . $sub_thumb . '" alt=""></div>';
		?>

	<?php /*
		$thumb_1 = post_custom('sub_thumbnail_1');
		$upload_dir = wp_upload_dir();
		echo '<div class="item__img-wrap"><img class="item__img" src="' . $upload_dir['baseurl'] . '/' . $thumb_1 . '" alt=""></div>';
		echo '<div class="item__img-wrap item__img-wrap--next"><img class="item__img" src="' . $upload_dir['baseurl'] . '/' . $thumb_1 . '" alt=""></div>';
*/	?>

	<div class="content__item-inner">
		<?php
			echo '<div class="content__item-meta">';
			echo '<span class="content__item-meta-season js-wrap">' . get_field( 'season' ) . '</span><span class="content__item-meta-case js-wrap">' . get_field( 'case' ) . '</span></div>';
			the_title( '<h2 class="content__item-ttl js-wrap">', '</h2>' );
			echo '<span class="content__item-description js-wrap">' . get_field( 'description' ) . '</span>';
			echo '<span class="content__item-stacks js-wrap">' . get_field( 'stacks' ) . '</span>';
			// echo '<p class="content__item-txt">' . get_the_excerpt() . '</p>';
			?>
		<span class="content__item-anchor js-wrap"><a href="<?php the_permalink(); ?>">VIEW DEATIL</a></span>
	</div>
</div>
