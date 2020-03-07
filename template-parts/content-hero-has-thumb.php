<?php
/**
 * Template part for displaying hero section.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package byn
 */

?>

<?php if ( is_page() ) :
	$thumb = get_the_post_thumbnail_url( get_the_ID(), 'full'); ?>

<div class="hero hero--has-thumb">
	<div class="hero__bg" style="background-image:url('<?php echo $thumb; ?>')">
		<div class="hero__bg-inner"></div>
	</div>
	<div class="hero__lead">
		<div class="hero__lead-inner">
			<h2 class="hero__lead-ttl"><?php echo post_custom( 'sub_ttl' ); ?></h2>
			<p class="hero__lead-txt"><?php echo post_custom( 'sub_description' ); ?></p>
			<div class="hero__lead-mask"></div>
		</div>
	</div>
	<div class="hero__scroll">
		<div class="arrow__wrap">
			<div class="arrow__inner">
				<p><span>SCROLL DOWN</span></p>
				<div class="arrow"></div>
			</div>
		</div>
	</div>
</div>

<?php elseif ( is_front_page() ) : 
	$get_page_id = get_page_by_path("front");
	$pid = $get_page_id->ID;
	$thumbs_path = '/assets/images/';
	$thumbs = [];
	$thumb = get_the_post_thumbnail_url( $pid, 'full');
	?>
<div class="hero hero--has-thumb">
	<?php 
		for($i = 0; $i < 1; $i++) :
			$thumbs[$i] = get_template_directory_uri() . '/assets/images/front-' . $i . '.jpg';
			$is_active = ( $i == 0 ) ? ' is-active' : '';
			?>
			<div class="hero__bg<?php echo $is_active; ?>" style="background-image:url('<?php echo $thumb; ?>')">
				<div class="hero__bg-inner"></div>
			</div>
		<?php endfor;
	?>
	<div class="hero__lead">
		<div class="hero__lead-inner">
			<h2 class="hero__lead-ttl"><?php the_field( 'hero_ttl', $pid ); ?></h2>
			<p class="hero__lead-txt"><?php the_field( 'hero_description', $pid ); ?></p>
		</div>
	</div>
	<div class="hero__scroll">
		<div class="arrow__wrap">
			<div class="arrow__inner">
				<p><span>SCROLL DOWN</span></p>
				<div class="arrow"></div>
			</div>
		</div>
	</div>
</div>
<?php elseif ( is_post_type_archive() ) :

	$post_type = get_post_type();
	$args = array(
		'post_type' => $post_type,
		'post_per_page' => 4,
	);
	$the_query = new WP_Query($args);
	$upload_dir = wp_upload_dir();
	$obj = get_post_type_object($post_type);
	$thumb = get_the_post_thumbnail_url( get_the_ID(), 'full');
?>
<div class="hero hero--has-thumb">
	<div class="hero__bg" style="background-image:url('<?php echo $thumb; ?>')">
		<div class="hero__bg-inner"></div>
	</div>
	<div class="hero__lead">
		<div class="hero__lead-inner">
			<h2 class="hero__lead-ttl"><?php echo $obj->labels->singular_name; ?></h2>
			<p class="hero__lead-txt"><?php echo $obj->description; ?></p>
		</div>
	</div>
	<div class="hero__scroll">
		<div class="arrow__wrap">
			<div class="arrow__inner">
				<p><span>SCROLL DOWN</span></p>
				<div class="arrow"></div>
			</div>
		</div>
	</div>
</div>
<?php else:
	
	$thumb = get_the_post_thumbnail_url( get_the_ID(), 'full'); ?>

<div class="hero hero--has-thumb">
	<div class="hero__bg" style="background-image:url('<?php echo $thumb; ?>')">
		<div class="hero__bg-inner"></div>
	</div>
	<div class="hero__lead">
		<div class="hero__lead-inner">
			<h2 class="hero__lead-ttl">nohaco mag</h2>
			<p class="hero__lead-txt"><?php echo the_field( 'description' ); ?></p>
			<div class="hero__lead-mask"></div>
		</div>
	</div>
	<div class="hero__scroll">
		<div class="arrow__wrap">
			<div class="arrow__inner">
				<p><span>SCROLL DOWN</span></p>
				<div class="arrow"></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>