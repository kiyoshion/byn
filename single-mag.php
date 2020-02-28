<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package byn
 */

get_header();
?>

	<div class="content" id="main">
		<div class="content__entry content__entry--full">
			<div class="content__lead js-wrap">
				<h1 class="content__lead-ttl"><?php the_title(); ?></h1>
				<p class="content__lead-name"><?php echo get_field( 'lead_name' ); ?></p>
				<p class="content__lead-txt js-wrap"><?php echo get_field( 'lead_txt' ); ?></p>
			</div>
			<div class="content__meta">
				<div class="content__meta-thumbnail-inner item js-wrap">
					<div class="item__img-wrap">
						<?php the_post_thumbnail('full', array('class' => 'content__meta-thumbnail item__img')); ?>
					</div>
				</div>
				<div class="content__meta-data js-wrap">
					<div class="content__meta-data-inner">
						<span class="content__meta-season"><?php echo get_field( 'season' ); ?></span>
						<span class="content__meta-case"><?php echo get_field( 'case' ); ?></span>
					</div>
					<span class="content__meta-description"><?php echo get_field( 'description' ); ?></span>
					<span class="content__meta-stacks"><?php echo get_field( 'stacks' ); ?></span>
				</div>
			</div>
			<div class="content__section">
				<div class="content__section-grid">
					<?php echo get_field( 'grid_area_1' ); ?>
				</div>
				<div class="content__section-grid content__section-grid--full">
					<?php echo get_field( 'grid_area_2' ); ?>
				</div>
			</div>
		</div>

		<?php
			$url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			$ttl = get_the_title();
		?>
		<div class="sharelink__wrapper">
			<h3 class="sharelink__ttl">\ SHARE ME /</h3>
			<div class="sharelink__list">
				<div class="sharelink__twitter">
					<a href="https://twitter.com/share?url=<?php echo $url; ?>" rel="nofollow" target="_blank">TW</a>
				</div>
				<div class="sharelink__facebook">	
					<a href="http://www.facebook.com/share.php?u=<?php echo $url; ?>" rel="nofollow" target="_blank">FB</a>
				</div>
				<div class="sharelink__hatena">
					<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url; ?>&title=<?php echo $ttl; ?>" target="_blank" rel="nofollow">B!</a>
				</div>
			</div>
		</div>
		
		<div class="pagelink__wrapper">
		<?php
			$prev_post = get_previous_post();
			if( !empty( $prev_post ) ) {
				$url = get_permalink( $prev_post->ID );
				echo '<div class="pagelink__prev"><a href="' . $url . '"></a><span class="pagelink__txt">BACK NUMBER</span></div>';
			} else {
				echo '<div class="pagelink__prev"><a href="' . esc_url( home_url( '/mag' ) ) . '"></a><span class="pagelink__txt">This is oldest. Back to lists?</span></div>';
			}
			$next_post = get_next_post();
			if( !empty( $next_post ) ) {
				$url = get_permalink( $next_post->ID );
				echo '<div class="pagelink__next"><a href="' . $url . '"></a><span class="pagelink__txt">NEXT NUMBER</span></div>';
			} else {
				echo '<div class="pagelink__next"><a href="' . esc_url( home_url( '/contact' ) ) . '"></a><div class="flex"><img src="' . get_template_directory_uri() . '/assets/images/icon-contact.svg"><span class="flex__txt">This is latest. Do you want to add your project on the next page?</span></div></div>';
			}
		?>
		</div>

<?php
get_footer();
