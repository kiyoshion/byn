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

<?php /*?>
<div class="content__entry content__entry--full">
	<section id="about" class="bg bg--full">
		<div class="flex__container">
			<h2 class="flex__container-ttl container__ttl--left">ABOUT</h2>
			<div class="flex__container-txt flex__container-txt--left">
				<h3 class="js-wrap"><?php the_field('about_ttl', $pid); ?></h3>
				<p class="js-wrap"><?php the_field('about_txt', $pid); ?></p>
				<div class="js-wrap center">
					<div class="btn">
						<a href="<?php echo esc_url( home_url('/about') ); ?>">VIEW DEATIL</a>
					</div>
				</div>
			</div>
			<div class="js-wrap">
				<img class="flex__container-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/nohaco-front-mockup.jpg" alt="" style="width:100%;">
			</div>
		</div>
	</section>
	<?php */?>

<?php /*?>
	<section id="service" class="bg ">
		<div class="">
			<div class="grid__container" style="margin:10vh 0 0;min-height:100vh;grid-template-rows: 10vh 20vh 20vh 20vh 20vh 20vh 20vh 20vh 100vh;">
			
			<h2 class="js-wrap" style="font-size:10vw;margin: 0;
    line-height: 1;grid-column: 2/4;grid-row: 1/3;">FIT FOR <br>TODAY.</h2>
				<div class="grid__item grid__item-txt item__txt-wrap" style="grid-area: 4 / 2 / 6 / 3;">
				<h3 class="js-wrap"><?php the_field('service_ttl', $pid); ?></h3>
				<p class="js-wrap">nohacoはフリーランスのエンジニアです。個人でWebサイト製作、Webアプリ開発をしています。</p>
				</div>
				<div class="item" style="grid-column: 4 / 6;">
					<div class="grid__item grid__item-img item__img-wrap">
						<img class="item__img" src="http://localhost/nohaco/wp-content/uploads/AdobeStock_291094827_Preview.jpg">
						<small>派遣会議　匿名チャットサービス</small>
					</div>
				</div>
				<div class="item" style="grid-column: 2 / 3;
    grid-row: 6/8;">
					<div class="grid__item grid__item-img item__img-wrap">
						<img class="item__img" src="http://localhost/nohaco/wp-content/uploads/fit-for-today.jpg">
						<small>派遣会議　匿名チャットサービス</small>
					</div>
				</div>
				<div class="" style="grid-column: 4 / 6;
    grid-row: 7/8;">
					<div class="grid__item grid__item-img item__img-wrap">
						<h3 class="js-wrap">デザインを、もっと身近に。</h3>
						<p class="js-wrap">nohacoのWebサイト制作は、やること・やらないことが明確。それはつまり、選択肢の多い現代において、トレードオフを賢く選択するということ。個人事業・中小企業の方に"ちょうどいいサービス"をご提供します。</p>
						<!-- <p>nohacoのスタイルは小さくはじめて、大きくそだてる。フリーランスだからこその柔軟さで、個人事業・中小企業の方に特化したサービスをお届けします。</p> -->
					</div>
				</div>
				<div class="item" style="grid-column: 1 / 7;
    grid-row: 9/10;margin:0;">
					<div class="grid__item grid__item-img item__img-wrap">
						<img class="item__img" src="http://localhost/nohaco/wp-content/uploads/nohaco-front-mockup-fix1500.jpg">
						<small>派遣会議　匿名チャットサービス</small>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php */?>

<?php /*?>	<section id="service" class="bg bg--full bg--gray">
		<div class="container container--gray">
			<h2 class="flex__container-ttl container__ttl--right">SERVICE</h2>
			<div class="flex__container-txt flex__container-txt--center">
				<h3 class="js-wrap"><?php the_field('service_ttl', $pid); ?></h3>
				<p class="js-wrap"><?php the_field('service_txt', $pid); ?></p>
			</div>
			<div class="flex__container center">
				<div class="flex__item flex__item-icon js-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-service-1.svg" alt="">
					<h3><?php the_field('service_ttl_1', $pid); ?></h3>
					<p><?php the_field('service_txt_1', $pid); ?></p>
				</div>
				<div class="flex__item flex__item-icon js-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-production.svg" alt="">
					<h3><?php the_field('service_ttl_2', $pid); ?></h3>
					<p><?php the_field('service_txt_2', $pid); ?></p>
				</div>
				<div class="flex__item flex__item-icon js-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-support.svg" alt="">
					<h3><?php the_field('service_ttl_3', $pid); ?></h3>
					<p><?php the_field('service_txt_3', $pid); ?></p>
				</div>
			</div>
			<div class="js-wrap center">
				<div class="btn">
					<a href="<?php echo esc_url( home_url('/service') ); ?>">VIEW DEATIL</a>
				</div>
			</div>
		</div>
	</section><?php */?>

	<?php /* ?>
	<section id="calculator" class="bg bg__img" style="z-index:10;">
		<div class="flex__container flex__container-around" style="height:75vh;">
			<h2 class="flex__container-ttl container__ttl--left">CALCULATOR</h2>
			<div class="flex__container-txt flex__container-txt--left">
				<h3 class="js-wrap">まずはその場で、<br>ざっくりお見積り。</h3>
				<p class="js-wrap">選び方は人それぞれ。あなたに”ちょうどいい”ウェブとは？30秒でざっくりお見積り。</p>
			</div>
			<div class="js-wrap" style="margin-bottom:-10vw;">
				<img class="flex__container-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/calculator.png" alt="" style="max-width:150%;width:150%;">
			</div>
		</div>
	</section>
	<?php */?>

	<?php /*?>
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
	</section><?php */?>

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

<section id="looks" class="bg ">
<h2 class="js-wrap" style="
/* position: absolute; */
    top: -10vh;
    left: 10%;
    font-size: 10vw;
    line-height: 1;
    /* white-space: nowrap; */
	/* opacity: .55; */
	margin-left: 10%;
	margin-bottom: 0;
    /* transform: translateX(-50%); */
">PROJECTS</h2>
		<div class="" style="display:flex;justify-content:center;margin:10vh 0 10vh;">
		<?php $args = array(
					'post_type'	=> 'mag',
					'posts_per_page'	=> 3,
					);
					$the_query = new WP_Query($args);
					if ($the_query->have_posts()) :
						while ($the_query->have_posts()) :
							$the_query->the_post();
							?>
							
						<div class="item js-wrap" style="margin: 10vh 5vw;">
							<a class="" style="position:absolute;width:100%;height:100%;z-index:11;" href="<?php the_permalink(); ?>"></a>

					<?php 
					//drop-shadow(rgba(0, 0, 0, 0.55) 15px 15px 20px);
					echo '<div class="item__img-wrap " style="height:27vw;width:20vw;filter: ">';
					the_post_thumbnail('full', array('class' => 'item__img')); 
					echo '</div>';
				?>

				<div class="" style="width:15vw;color:#aaa;">
					<?php
						echo '<div class="" style="padding:2rem 0;"><span>' . post_custom('mag_id') . '</span></div>';
						// the_title( '<h2 class="">', '</h2>' );
						// echo '<p class="">' . get_the_excerpt() . '</p>';
						?>
					<!-- <span class="">VIEW DEATIL</span> -->
				</div>
			</div>

				<?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>
</section>


<?php get_template_part( 'template-parts/content', 'cta' ); ?>
		


