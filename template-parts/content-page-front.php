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

<div class="content__entry content__entry--full">
	<section id="about" class="bg bg--full">
		<div class="flex__container">
			<h2 class="flex__container-ttl container__ttl--left">ABOUT</h2>
			<div class="flex__container-txt">
				<h3><?php the_field('about_ttl', $pid); ?></h3>
				<p><?php the_field('about_txt', $pid); ?></p>
			</div>
			<img class="flex__container-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/img_main_02.png" alt="" >
		</div>
	</section>

	<section id="service" class="bg bg--full bg--gray">
		<div class="container container--gray">
			<h3 class="flex__container-ttl container__ttl--right">SERVICE</h3>
			<div class="flex__container center">
				<div class="flex__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-service-1.svg" alt="" width="100">
					<h3><?php the_field('service_ttl_1', $pid); ?></h3>
					<p class="left"><?php the_field('service_txt_1', $pid); ?></p>
				</div>
				<div class="flex__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-production.svg" alt="" width="100">
					<h3><?php the_field('service_ttl_2', $pid); ?></h3>
					<p class="left"><?php the_field('service_txt_2', $pid); ?></p>
				</div>
				<div class="flex__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-plan.png" alt="" width="100">
					<h3><?php the_field('service_ttl_3', $pid); ?></h3>
					<p class="left"><?php the_field('service_txt_3', $pid); ?></p>
				</div>
			</div>
		</div>
	</section>

	<section id="magazine" class="bg">
		<div class="">
			<h3 class="flex__container-ttl container__ttl--left">MAGAZINE</h3>


				<?php $args = array(
					'post_type'	=> 'mag',
					'posts_per_page'	=> 4,
					);
					$the_query = new WP_Query($args);
					if ($the_query->have_posts()) :
						while ($the_query->have_posts()) :
							$the_query->the_post();
							?>
							
						<div class="content__item">
							<a class="content__item-link" href="<?php the_permalink(); ?>"></a>

					<?php 
					echo '<div class="content__item-thumbnail">';
					the_post_thumbnail('full', array('class' => 'content__item-thumbnail-inner')); 
					echo '</div>';
					$thumb_1 = post_custom('sub_thumbnail_1');
					$upload_dir = wp_upload_dir();
					echo '<div class="content__item-sub-thumbnail"><img src="' . $upload_dir['baseurl'] . '/' . $thumb_1 . '" alt=""></div>';
				?>

				<div class="content__item-inner">
					<?php
						echo '<div class="content__item-case"><span>' . post_custom('mag_id') . '</span></div>';
						the_title( '<h2 class="content__item-ttl">', '</h2>' );
						echo '<p class="content__item-txt">' . get_the_excerpt() . '</p>';
						?>
					<span class="content__item-anchor">VIEW DEATIL</span>
				</div>
			</div>

				<?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>

		</div>
	</section>

	<?php /*?>
	<section id="news">
		<h2 class="ttl">NEWS</h2>
		<div class="news__list">
		<?php $args = array(
			'post_type'	=> 'news',
			'posts_per_page'	=> 4,
		);
		$the_query = new WP_Query($args);
		if ($the_query->have_posts()) :
			while ($the_query->have_posts()) :
				$the_query->the_post();
				?>
				<div class="news__card">
					<a class="news__link" href="<?php the_permalink(); ?>"></a>
					<span class="news__date"><?php the_date(); ?></span>
					<p class="news__ttl"><?php the_title(); ?></p>
				</div>
				<?php
			endwhile;
		endif;
		wp_reset_postdata();
		?>
		</div>
	</section>
		<?php */?>

</div>
