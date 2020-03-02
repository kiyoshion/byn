<?php
/**
 * Template part for displaying mag archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package byn
 */

?>

<div class="content__item js-wrap">
<!-- <div class="item" style="height:100vh;"> -->
<?php /*?>	<a class="content__item-link" href="<?php the_permalink(); ?>"></a><?php */?>

		<?php 
		echo '<div class="content__item-thumbnail">';
		the_post_thumbnail('full', array('class' => 'content__item-thumbnail-inner')); 
		echo '</div>';
		$sub_thumb = get_field( 'sub_thumbnail' );
		$upload_dir = wp_upload_dir();
		echo '<div class="content__item-sub-thumbnail"><img src="' . $upload_dir['baseurl'] . '/' . $sub_thumb . '" alt=""></div>';
		?>

	<div class="content__item-inner">
		<?php
			echo '<div class="content__item-meta">';
			echo '<span class="content__item-meta-season">' . get_field( 'season' ) . '</span><span class="content__item-meta-case">' . get_field( 'case' ) . '</span></div>';
			the_title( '<h2 class="content__item-ttl">', '</h2>' );
			echo '<span class="content__item-description">' . get_field( 'description' ) . '</span>';
			echo '<span class="content__item-stacks">' . get_field( 'stacks' ) . '</span>';
			?>
		<span class="content__item-anchor"><a href="<?php the_permalink(); ?>">VIEW DEATIL</a></span>
	</div>
</div>
