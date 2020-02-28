<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package byn
 */

$get_page_id = get_page_by_path("front");
$pid = $get_page_id->ID;
?>

<section id="mag" class="bg bg__wind content__front" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/the-wind.svg')">
	<h2 class="content__front-ttl js-wrap"><?php echo get_field( 'magazine_ttl', $pid ); ?></h2>
	<div class="content__front-txt-inner js-wrap">
		<p class="content__front-txt content__front-txt-en"><?php echo get_field( 'magazine_txt_en', $pid ); ?></p>
		<p class="content__front-txt content__front-txt-ja"><?php echo get_field( 'magazine_txt_ja', $pid ); ?></p>
	</div>
	<div class="flex flex--justify-content-center flex--align-items-center">
		<div class="content__front-list">
		<?php
		$args = array(
			'post_type'	=> 'mag',
			'posts_per_page'	=> 2,
			);
			$the_query = new WP_Query($args);
			if ($the_query->have_posts()) :
				while ($the_query->have_posts()) :
					$the_query->the_post();
		?>
					
			<div class="item content__front-item js-wrap">
			<?php echo '<div class="item__img-wrap">'; ?>
				<a class="content__front-item-link" href="<?php the_permalink(); ?>"></a>
			<?php
				the_post_thumbnail('full', array('class' => 'item__img')); 
				echo '</div>';
			?>

		<div class="content__front-item-meta">
			<?php
			echo '<span class="content__front-item-meta-season">' . get_field( 'season' ) . '</span>';
			echo '<span class="content__front-item-meta-case">' . get_field( 'case' ) . '</span>';
			echo '<div class="content__front-item-meta-txt">';
			echo '<span class="content__front-item-meta-description js-wrap">' . get_field( 'description' ) . '</span>';
			echo '<span class="content__front-item-meta-stacks js-wrap">' . get_field( 'stacks' ) . '</span>';
			echo '</div>';
			?>
		</div>
	</div>

	<?php
			endwhile;
		endif;
		wp_reset_postdata();
	?>
	</div>
		<div class="content__front-link js-wrap">
			<a class="" href="<?php echo esc_url( home_url( '/mag' ) ); ?>">VIEW ALL</a>
			<span class="border"></span>
			<span class="arrow-right"></span>
		</div>
	</div>
</section>

<section id="what" class="bg content__front">
	<h2 class="content__front-ttl js-wrap"><?php echo get_field( 'what_ttl', $pid ); ?></h2>
	<div class="flex flex--center flex--end">
		<div class="content__front-txt-inner js-wrap">
			<p class="content__front-txt content__front-txt-en"><?php echo get_field( 'what_txt_en', $pid ); ?></p>
			<p class="content__front-txt content__front-txt-ja"><?php echo get_field( 'what_txt_ja', $pid ); ?></p>
		</div>
		<div class="content__front-link js-wrap">
			<a class="" href="<?php echo esc_url( home_url( '/about' ) ); ?>">ABOUT ME</a>
			<span class="border"></span>
			<span class="arrow-right"></span>
		</div>
	</div>
	<div class="content__front-img-inner item js-wrap">
		<div class="item__img-wrap">
			<img class="item__img" src="<?php echo get_field( 'what_img', $pid ); ?>">
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/content', 'cta' ); ?>
		


